<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\RateLimiter;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Str;
use App\Mail\ApplicationSubmitted;

class ApplicationController extends Controller
{
    public function show()
    {
        return view('application');
    }

    public function store(Request $request)
    {
        \Log::info('APPLICATION FORM SUBMISSION STARTED', ['ip' => $request->ip()]);

        // Rate limiting - max 3 submissions per hour per IP
        $key = 'application-submit-' . $request->ip();

        if (RateLimiter::tooManyAttempts($key, 3)) {
            $seconds = RateLimiter::availableIn($key);
            return back()->withErrors([
                'rate_limit' => "Too many submission attempts. Please try again in " . ceil($seconds / 60) . " minutes."
            ]);
        }

        // Input validation and sanitization
        $validator = Validator::make($request->all(), [
            // Personal Information
            'first_name' => 'required|string|max:50|regex:/^[a-zA-Z\s\-\'\.]+$/',
            'last_name' => 'required|string|max:50|regex:/^[a-zA-Z\s\-\'\.]+$/',
            'address' => 'nullable|string|max:200',
            'city' => 'nullable|string|max:100|regex:/^[a-zA-Z\s\-\'\.]+$/',
            'gender' => 'required|in:male,female,other,prefer_not_to_say',
            'date_of_birth' => 'required|date|before:today|after:1950-01-01',

            // License & Qualifications
            'security_license' => 'required|string|max:50|regex:/^[A-Z0-9\-]+$/',
            'license_expiry' => 'required|date|after:today',
            'has_vehicle' => 'required|in:yes,no',
            'certifications' => 'nullable|array',
            'certifications.*' => 'string|in:first_aid,use_of_force,baton,emergency_response',

            // Work Preference & Wages
            'work_preference' => 'required|array|min:1',
            'work_preference.*' => 'string|in:Any time,Part time,Full time,Nights only,Days only',
            'expected_wages' => 'required|string|max:100',

            // Work History and Training
            'work_history' => 'required|string|max:2000',

            // Contact Information
            'email' => 'required|email|max:255',
            'phone' => 'required|string|max:20|regex:/^[\+]?[1-9][\d]{0,15}$/',
            'best_time_to_contact' => 'nullable|string|max:200',

            // Background Information
            'criminal_record' => 'required|in:yes,no',

            // File Upload
            'resume' => 'nullable|file|mimes:pdf,docx,doc|max:10240', // 10MB max

            // Agreement
            'agree_terms' => 'required|accepted',
        ], [
            'first_name.regex' => 'First name contains invalid characters.',
            'last_name.regex' => 'Last name contains invalid characters.',
            'city.regex' => 'City name contains invalid characters.',
            'security_license.regex' => 'Security license format is invalid.',
            'phone.regex' => 'Phone number format is invalid.',
            'email.email' => 'Please enter a valid email address.',
            'date_of_birth.before' => 'Date of birth must be in the past.',
            'date_of_birth.after' => 'Please enter a valid date of birth.',
            'license_expiry.after' => 'License must not be expired.',
            'work_preference.min' => 'Please select at least one work preference.',
            'expected_wages.required' => 'Please enter your expected wages.',
            'expected_wages.string' => 'Expected wages must be text (e.g., $20/hour, Negotiable).',
            'expected_wages.max' => 'Expected wages cannot exceed 100 characters.',
            'resume.mimes' => 'Resume must be a PDF or Word document.',
            'resume.max' => 'Resume file size cannot exceed 10MB.',
        ]);

        if ($validator->fails()) {
            return back()
                ->withErrors($validator)
                ->withInput($request->except(['resume']));
        }

        // Increment rate limiter
        RateLimiter::hit($key, 3600); // 1 hour

        try {
            // Sanitize input data
            $sanitizedData = $this->sanitizeInput($validator->validated());

            // Handle file upload securely
            $resumePath = null;
            if ($request->hasFile('resume')) {
                $resumePath = $this->handleFileUpload($request->file('resume'));
            }

            // Store application data (you can save to database here)
            $applicationData = array_merge($sanitizedData, [
                'resume_path' => $resumePath,
                'ip_address' => $request->ip(),
                'user_agent' => $request->userAgent(),
                'submitted_at' => now(),
            ]);

            // For now, just log the application (replace with database storage)
            \Log::info('New job application submitted', $applicationData);

            // Send email notification to admin (if enabled)
            if (env('ENABLE_EMAIL_NOTIFICATIONS', true)) {
                try {
                    $adminEmail = env('ADMIN_EMAIL', 'don@survailpro.ca');
                    $mailDriver = env('MAIL_MAILER', 'log');

                    \Log::info('Sending application notification email', [
                        'driver' => $mailDriver,
                        'admin_email' => $adminEmail,
                        'applicant' => $sanitizedData['first_name'] . ' ' . $sanitizedData['last_name']
                    ]);

                    Mail::to($adminEmail)->send(new ApplicationSubmitted($sanitizedData, $resumePath));

                    if ($mailDriver === 'log') {
                        \Log::info('Application notification logged (using log driver)', ['email' => $adminEmail]);
                    } else {
                        \Log::info('Application notification email sent to admin', ['email' => $adminEmail, 'driver' => $mailDriver]);
                    }
                } catch (\Exception $emailError) {
                    \Log::error('Failed to send application notification email: ' . $emailError->getMessage(), [
                        'driver' => env('MAIL_MAILER', 'log'),
                        'admin_email' => env('ADMIN_EMAIL', 'don@survailpro.ca')
                    ]);
                    // Don't fail the application submission if email fails
                }
            } else {
                \Log::info('Email notifications disabled - skipping email notification');
            }

            // Send success response
            return redirect()->route('application')->with('success',
                'Your application has been submitted successfully! We will review your application and contact you if you are selected for further consideration.');

        } catch (\Exception $e) {
            \Log::error('Application submission error: ' . $e->getMessage());

            return back()
                ->withErrors(['submission' => 'There was an error processing your application. Please try again.'])
                ->withInput($request->except(['resume']));
        }
    }

    private function sanitizeInput(array $data): array
    {
        $sanitized = [];

        foreach ($data as $key => $value) {
            if (is_array($value)) {
                $sanitized[$key] = array_map(function($item) {
                    return htmlspecialchars(strip_tags(trim($item)), ENT_QUOTES, 'UTF-8');
                }, $value);
            } elseif (is_string($value)) {
                // Remove potential XSS vectors
                $sanitized[$key] = htmlspecialchars(strip_tags(trim($value)), ENT_QUOTES, 'UTF-8');
            } else {
                $sanitized[$key] = $value;
            }
        }

        return $sanitized;
    }

    private function handleFileUpload($file): string
    {
        // Generate secure filename
        $originalName = $file->getClientOriginalName();
        $extension = $file->getClientOriginalExtension();
        $filename = Str::random(40) . '.' . $extension;

        // Additional security checks
        $realMimeType = $file->getMimeType();
        $allowedMimes = [
            'application/pdf',
            'application/vnd.openxmlformats-officedocument.wordprocessingml.document',
            'application/msword'
        ];

        if (!in_array($realMimeType, $allowedMimes)) {
            throw new \Exception('Invalid file type detected.');
        }

        // Scan file content for potential threats (basic check)
        $fileContent = file_get_contents($file->getRealPath());
        $suspiciousPatterns = ['<script', '<?php', '<%', 'javascript:', 'vbscript:'];

        foreach ($suspiciousPatterns as $pattern) {
            if (stripos($fileContent, $pattern) !== false) {
                throw new \Exception('Potentially malicious file detected.');
            }
        }

        // Store file securely
        $path = $file->storeAs('applications/resumes', $filename, 'local');

        // Log file upload
        \Log::info('Resume uploaded', [
            'original_name' => $originalName,
            'stored_name' => $filename,
            'size' => $file->getSize(),
            'mime_type' => $realMimeType
        ]);

        return $path;
    }
}
