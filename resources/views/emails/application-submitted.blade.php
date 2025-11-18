<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>New Security Guard Application</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            line-height: 1.6;
            color: #333;
            margin: 0;
            padding: 0;
            background-color: #f4f4f4;
        }
        .container {
            max-width: 800px;
            margin: 0 auto;
            padding: 20px;
            background-color: #ffffff;
            box-shadow: 0 0 10px rgba(0,0,0,0.1);
        }
        .header {
            background: linear-gradient(135deg, #1e40af, #059669);
            color: white;
            padding: 30px;
            text-align: center;
            border-radius: 8px 8px 0 0;
        }
        .header h1 {
            margin: 0;
            font-size: 24px;
        }
        .content {
            padding: 30px;
        }
        .applicant-info {
            background-color: #f8fafc;
            border-left: 4px solid #1e40af;
            padding: 20px;
            margin: 20px 0;
            border-radius: 0 8px 8px 0;
        }
        .section {
            margin: 25px 0;
            padding: 20px;
            border: 1px solid #e5e7eb;
            border-radius: 8px;
            background-color: #fafafa;
        }
        .section h3 {
            color: #1e40af;
            margin-top: 0;
            margin-bottom: 15px;
            font-size: 18px;
            border-bottom: 2px solid #1e40af;
            padding-bottom: 5px;
        }
        .info-row {
            display: flex;
            margin: 10px 0;
            padding: 8px 0;
            border-bottom: 1px solid #e5e7eb;
        }
        .info-row:last-child {
            border-bottom: none;
        }
        .label {
            font-weight: bold;
            width: 200px;
            color: #374151;
        }
        .value {
            flex: 1;
            color: #6b7280;
        }
        .highlight {
            background-color: #fef3c7;
            padding: 15px;
            border-radius: 8px;
            border-left: 4px solid #f59e0b;
            margin: 20px 0;
        }
        .footer {
            background-color: #1f2937;
            color: white;
            padding: 20px;
            text-align: center;
            border-radius: 0 0 8px 8px;
        }
        .badge {
            display: inline-block;
            background-color: #10b981;
            color: white;
            padding: 4px 12px;
            border-radius: 20px;
            font-size: 12px;
            font-weight: bold;
            margin: 2px;
        }
        .urgent {
            background-color: #ef4444;
        }
        .work-prefs {
            display: flex;
            flex-wrap: wrap;
            gap: 5px;
            margin-top: 5px;
        }
        .certifications {
            display: flex;
            flex-wrap: wrap;
            gap: 5px;
            margin-top: 5px;
        }
        .timestamp {
            color: #6b7280;
            font-size: 14px;
            text-align: right;
            margin-top: 20px;
            padding-top: 10px;
            border-top: 1px solid #e5e7eb;
        }
        @media (max-width: 600px) {
            .info-row {
                flex-direction: column;
            }
            .label {
                width: 100%;
                margin-bottom: 5px;
            }
        }
    </style>
</head>
<body>
    <div class="container">
        <!-- Header -->
        <div class="header">
            <h1>🛡️ New Security Guard Application</h1>
            <p style="margin: 10px 0 0 0; opacity: 0.9;">SurVail Protection & Investigation Services</p>
        </div>

        <!-- Content -->
        <div class="content">
            <!-- Applicant Quick Info -->
            <div class="applicant-info">
                <h2 style="margin: 0 0 10px 0; color: #1e40af;">
                    {{ $applicationData['first_name'] }} {{ $applicationData['last_name'] }}
                </h2>
                <p style="margin: 5px 0;">
                    📧 {{ $applicationData['email'] }} | 📞 {{ $applicationData['phone'] }}
                </p>
                <p style="margin: 5px 0;">
                    🆔 License: {{ $applicationData['security_license'] }}
                    (Expires: {{ \Carbon\Carbon::parse($applicationData['license_expiry'])->format('M j, Y') }})
                </p>
            </div>

            <!-- Highlight Important Info -->
            <div class="highlight">
                <strong>⚠️ Action Required:</strong> New application submitted and requires review.
                @if($resumePath && isset($applicationData['resume_url']))
                    <br><br>
                    <strong style="font-size: 16px; color: #059669;">📎 Resume:</strong>
                    <a href="{{ $applicationData['resume_url'] }}" style="color: #1e40af; font-weight: bold; text-decoration: underline;">
                        Click here to view/download
                    </a>
                    <span style="color: #6b7280; font-size: 14px;">(Also attached to this email)</span>
                @elseif($resumePath)
                    <br><br>
                    <strong style="font-size: 16px; color: #059669;">📎 Resume attached to this email</strong>
                @else
                    <br>⚠️ No resume attachment provided.
                @endif
            </div>

            <!-- Personal Information -->
            <div class="section">
                <h3>👤 Personal Information</h3>
                <div class="info-row">
                    <span class="label">Full Name:</span>
                    <span class="value">{{ $applicationData['first_name'] }} {{ $applicationData['last_name'] }}</span>
                </div>
                @if(!empty($applicationData['address']))
                <div class="info-row">
                    <span class="label">Address:</span>
                    <span class="value">{{ $applicationData['address'] }}</span>
                </div>
                @endif
                @if(!empty($applicationData['city']))
                <div class="info-row">
                    <span class="label">City:</span>
                    <span class="value">{{ $applicationData['city'] }}</span>
                </div>
                @endif
                <div class="info-row">
                    <span class="label">Gender:</span>
                    <span class="value">{{ ucfirst(str_replace('_', ' ', $applicationData['gender'])) }}</span>
                </div>
                <div class="info-row">
                    <span class="label">Date of Birth:</span>
                    <span class="value">{{ \Carbon\Carbon::parse($applicationData['date_of_birth'])->format('M j, Y') }} (Age: {{ \Carbon\Carbon::parse($applicationData['date_of_birth'])->age }})</span>
                </div>
            </div>

            <!-- License & Qualifications -->
            <div class="section">
                <h3>🏆 License & Qualifications</h3>
                <div class="info-row">
                    <span class="label">Security License:</span>
                    <span class="value">{{ $applicationData['security_license'] }}</span>
                </div>
                <div class="info-row">
                    <span class="label">License Expiry:</span>
                    <span class="value">
                        {{ \Carbon\Carbon::parse($applicationData['license_expiry'])->format('M j, Y') }}
                        @if(\Carbon\Carbon::parse($applicationData['license_expiry'])->lt(\Carbon\Carbon::now()->addMonths(3)))
                            <span class="badge urgent">Expires Soon</span>
                        @endif
                    </span>
                </div>
                <div class="info-row">
                    <span class="label">Has Vehicle:</span>
                    <span class="value">
                        {{ ucfirst($applicationData['has_vehicle']) }}
                        @if($applicationData['has_vehicle'] === 'yes')
                            <span class="badge">✓ Available</span>
                        @endif
                    </span>
                </div>
                @if(!empty($applicationData['certifications']))
                <div class="info-row">
                    <span class="label">Certifications:</span>
                    <div class="certifications">
                        @foreach($applicationData['certifications'] as $cert)
                            <span class="badge">{{ ucfirst(str_replace('_', ' ', $cert)) }}</span>
                        @endforeach
                    </div>
                </div>
                @endif
            </div>

            <!-- Work Preferences -->
            <div class="section">
                <h3>💼 Work Preferences & Wages</h3>
                <div class="info-row">
                    <span class="label">Work Preference:</span>
                    <div class="work-prefs">
                        @foreach($applicationData['work_preference'] as $pref)
                            <span class="badge">{{ $pref }}</span>
                        @endforeach
                    </div>
                </div>
                <div class="info-row">
                    <span class="label">Expected Wages:</span>
                    <span class="value">{{ $applicationData['expected_wages'] }}</span>
                </div>
            </div>

            <!-- Contact Information -->
            <div class="section">
                <h3>📞 Contact Information</h3>
                <div class="info-row">
                    <span class="label">Email:</span>
                    <span class="value">
                        <a href="mailto:{{ $applicationData['email'] }}" style="color: #1e40af;">{{ $applicationData['email'] }}</a>
                    </span>
                </div>
                <div class="info-row">
                    <span class="label">Phone:</span>
                    <span class="value">
                        <a href="tel:{{ $applicationData['phone'] }}" style="color: #1e40af;">{{ $applicationData['phone'] }}</a>
                    </span>
                </div>
                @if(!empty($applicationData['best_time_to_contact']))
                <div class="info-row">
                    <span class="label">Best Time to Contact:</span>
                    <span class="value">{{ $applicationData['best_time_to_contact'] }}</span>
                </div>
                @endif
            </div>

            <!-- Background Information -->
            <div class="section">
                <h3>🔍 Background Information</h3>
                <div class="info-row">
                    <span class="label">Criminal Record:</span>
                    <span class="value">
                        {{ ucfirst($applicationData['criminal_record']) }}
                        @if($applicationData['criminal_record'] === 'yes')
                            <span class="badge urgent">Requires Review</span>
                        @else
                            <span class="badge">Clear</span>
                        @endif
                    </span>
                </div>
            </div>

            <!-- Work History -->
            <div class="section">
                <h3>📋 Work History and Training</h3>
                <div style="background-color: white; padding: 15px; border-radius: 6px; border: 1px solid #d1d5db;">
                    {!! nl2br(e($applicationData['work_history'])) !!}
                </div>
            </div>

            <!-- Resume Attachment -->
            <div class="section">
                <h3>📎 Resume</h3>
                @if($resumePath)
                    @if(isset($applicationData['resume_url']))
                    <div class="info-row">
                        <span class="label">Download Link:</span>
                        <span class="value">
                            <a href="{{ $applicationData['resume_url'] }}" style="color: #1e40af; font-weight: bold; text-decoration: underline;">
                                Click here to view/download resume
                            </a>
                        </span>
                    </div>
                    @endif
                    <div class="info-row">
                        <span class="label">Email Attachment:</span>
                        <span class="value">Resume_{{ $applicationData['first_name'] }}_{{ $applicationData['last_name'] }}.{{ pathinfo($resumePath, PATHINFO_EXTENSION) }}</span>
                    </div>
                    <p style="color: #6b7280; font-size: 13px; margin-top: 10px;">
                        The resume file is attached to this email. Check your email client's attachment section.
                    </p>
                @else
                    <p style="color: #92400e; font-weight: bold;">⚠️ No resume was uploaded with this application</p>
                @endif
            </div>

            <!-- Timestamp -->
            <div class="timestamp">
                Application submitted on {{ \Carbon\Carbon::parse($applicationData['submitted_at'])->format('l, F j, Y \a\t g:i A T') }}
            </div>
        </div>

        <!-- Footer -->
        <div class="footer">
            <p style="margin: 0; font-weight: bold;">SurVail Protection & Investigation Services</p>
            <p style="margin: 5px 0 0 0; opacity: 0.8;">
                📧 hr@survailpro.ca | 📞 519-770-6634 | 🌐 survailpro.ca
            </p>
        </div>
    </div>
</body>
</html>