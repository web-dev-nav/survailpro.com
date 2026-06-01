<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\Mail;
use App\Mail\ApplicationSubmitted;

class TestEmail extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'test:email {email?} {--driver= : Override mail driver for this test}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Test the application submitted email functionality with different drivers';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        $email = $this->argument('email') ?? env('ADMIN_EMAIL', 'survailpro@rogers.com');
        $testDriver = $this->option('driver');
        $currentDriver = env('MAIL_MAILER', 'log');
        $emailEnabled = env('ENABLE_EMAIL_NOTIFICATIONS', true);

        $this->info('🧪 Testing Email Functionality');
        $this->info('═══════════════════════════════');

        // Display current configuration
        $this->info('📧 Email Configuration:');
        $this->info("   Target Email: {$email}");
        $this->info("   Current Driver: {$currentDriver}");
        $this->info("   Email Notifications: " . ($emailEnabled ? 'Enabled' : 'Disabled'));

        if ($testDriver) {
            $this->info("   Test Driver Override: {$testDriver}");
            // Temporarily override the mail driver
            config(['mail.default' => $testDriver]);
        }

        if (!$emailEnabled) {
            $this->warn('⚠️  Email notifications are disabled in .env');
            $this->info('   Set ENABLE_EMAIL_NOTIFICATIONS=true to enable');
        }

        $this->info('');
        $this->info('🚀 Sending test email...');

        // Sample application data for testing
        $testData = [
            'first_name' => 'John',
            'last_name' => 'Doe',
            'email' => 'survailpro@rogers.com',
            'phone' => '519-555-0123',
            'address' => '123 Main Street',
            'city' => 'London',
            'gender' => 'male',
            'date_of_birth' => '1990-01-15',
            'security_license' => 'SG123456789',
            'license_expiry' => '2025-12-31',
            'certifications' => ['first_aid', 'use_of_force'],
            'work_preference' => ['Full time', 'Days only'],
            'expected_wages' => '$22/hour',
            'work_history' => 'Previous experience includes 3 years at ABC Security Company, military background with Canadian Armed Forces, completed advanced security training courses.',
            'criminal_record' => 'no',
            'best_time_to_contact' => 'Weekdays 9am-5pm',
            'ip_address' => '192.168.1.100',
            'user_agent' => 'Mozilla/5.0 (Test Browser)',
            'submitted_at' => now(),
        ];

        try {
            Mail::to($email)->send(new ApplicationSubmitted($testData, null));

            $usedDriver = $testDriver ?: $currentDriver;

            if ($usedDriver === 'log') {
                $this->info('✅ Test email logged successfully!');
                $this->info('📁 Check storage/logs/laravel.log for the email content');
                $this->info('💡 To send real emails, change MAIL_MAILER to smtp, mailgun, etc.');
            } else {
                $this->info('✅ Test email sent successfully!');
                $this->info('📧 Check the inbox for: ' . $email);
            }

            $this->info('');
            $this->info('📋 Test Data Used:');
            $this->info("   Applicant: {$testData['first_name']} {$testData['last_name']}");
            $this->info("   License: {$testData['security_license']}");
            $this->info("   Email Driver: {$usedDriver}");

        } catch (\Exception $e) {
            $this->error('❌ Failed to send test email!');
            $this->error('Error: ' . $e->getMessage());
            $this->info('');
            $this->info('🔧 Troubleshooting:');
            $this->info('1. Check your .env mail configuration');
            $this->info('2. Verify SMTP credentials (if using smtp driver)');
            $this->info('3. Check storage/logs/laravel.log for details');
            $this->info('4. See MAIL_CONFIGURATION.md for setup guide');
        }

        $this->info('');
        $this->info('📚 Available Commands:');
        $this->info('   php artisan test:email                    # Test with current settings');
        $this->info('   php artisan test:email survailpro@rogers.com   # Test with specific email');
        $this->info('   php artisan test:email --driver=mail      # Test PHP mail() function');
        $this->info('   php artisan test:email --driver=smtp      # Test SMTP driver');
    }
}
