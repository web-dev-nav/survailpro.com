<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Thank You for Your Application</title>
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
            max-width: 600px;
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
        .logo {
            font-size: 48px;
            margin-bottom: 10px;
        }
        .content {
            padding: 30px;
        }
        .content h2 {
            color: #1e40af;
            margin-top: 0;
        }
        .content p {
            margin: 15px 0;
            color: #4b5563;
        }
        .highlight {
            background-color: #f0f9ff;
            border-left: 4px solid #1e40af;
            padding: 15px;
            margin: 20px 0;
            border-radius: 0 8px 8px 0;
        }
        .next-steps {
            background-color: #f9fafb;
            padding: 20px;
            border-radius: 8px;
            margin: 20px 0;
        }
        .next-steps h3 {
            color: #1e40af;
            margin-top: 0;
        }
        .next-steps ul {
            margin: 10px 0;
            padding-left: 20px;
        }
        .next-steps li {
            margin: 8px 0;
            color: #4b5563;
        }
        .footer {
            background-color: #1f2937;
            color: white;
            padding: 20px;
            text-align: center;
            border-radius: 0 0 8px 8px;
            margin-top: 20px;
        }
        .footer p {
            margin: 5px 0;
            opacity: 0.9;
        }
        .contact-info {
            background-color: #f9fafb;
            padding: 15px;
            border-radius: 8px;
            margin: 20px 0;
            text-align: center;
        }
        .contact-info a {
            color: #1e40af;
            text-decoration: none;
            font-weight: bold;
        }
        .signature {
            margin-top: 30px;
            padding-top: 20px;
            border-top: 1px solid #e5e7eb;
        }
    </style>
</head>
<body>
    <div class="container">
        <!-- Header -->
        <div class="header">
            <div class="logo">🛡️</div>
            <h1>Thank You for Your Application!</h1>
            <p style="margin: 10px 0 0 0; opacity: 0.9;">SurVail Protection & Investigation Services</p>
        </div>

        <!-- Content -->
        <div class="content">
            <h2>Dear {{ $applicantName }},</h2>

            <p>
                Thank you for submitting your application for a security guard position with
                <strong>SurVail Protection & Investigation Services</strong>.
            </p>

            <div class="highlight">
                <strong>✓ Your application has been successfully received!</strong><br>
                Our HR team will carefully review your application and qualifications.
            </div>

            <p>
                We appreciate your interest in joining our team. With 42 years of combined management experience
                in the protection and investigation sector, we are committed to maintaining the
                highest standards of professionalism and security services in Southern Ontario.
            </p>

            <div class="next-steps">
                <h3>What Happens Next?</h3>
                <ul>
                    <li><strong>Application Review:</strong> Our HR team will review your application and resume within the next 5-7 business days.</li>
                    <li><strong>Interview Selection:</strong> If your qualifications match our current requirements, we will contact you to schedule an interview.</li>
                    <li><strong>Background Check:</strong> Successful candidates will undergo a comprehensive background check as part of our hiring process.</li>
                    <li><strong>Training & Onboarding:</strong> Selected candidates will receive comprehensive training before starting their position.</li>
                </ul>
            </div>

            <p>
                <strong>Important:</strong> Please ensure your security license is valid and up to date.
                We will verify all certifications and qualifications during the screening process.
            </p>

            <div class="contact-info">
                <p style="color: #4b5563; margin-bottom: 10px;">
                    If you have any questions about your application, please contact us:
                </p>
                <p>
                    📧 <a href="mailto:{{ env('ADMIN_EMAIL', 'hr@survailpro.ca') }}">{{ env('ADMIN_EMAIL', 'hr@survailpro.ca') }}</a><br>
                    📞 <a href="tel:{{ preg_replace('/\s+/', '', $contactPhone) }}">{{ $contactPhone }}</a>
                </p>
            </div>

            <div class="signature">
                <p style="margin: 5px 0;">Best regards,</p>
                <p style="margin: 5px 0; font-weight: bold; color: #1e40af;">
                    Human Resources Department
                </p>
                <p style="margin: 5px 0;">
                    SurVail Protection & Investigation Services
                </p>
            </div>
        </div>

        <!-- Footer -->
        <div class="footer">
            <p style="font-weight: bold; margin-bottom: 10px;">SurVail Protection & Investigation Services</p>
            <p>Protecting Southern Ontario with 42 years of combined management experience</p>
            <p style="opacity: 0.8; font-size: 14px;">
                📧 {{ $contactEmail }} | 📞 {{ $contactPhone }} | 🌐 survailpro.ca
            </p>
            <p style="opacity: 0.7; font-size: 12px; margin-top: 15px;">
                Serving Brantford, Hamilton, Waterloo, Haldimand, and Norfolk counties
            </p>
        </div>
    </div>
</body>
</html>
