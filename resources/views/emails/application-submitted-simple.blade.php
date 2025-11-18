<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body style="margin: 0; padding: 0; font-family: Arial, sans-serif; background-color: #f4f4f4;">
    <table width="100%" cellpadding="0" cellspacing="0" style="background-color: #f4f4f4; padding: 20px;">
        <tr>
            <td align="center">
                <table width="600" cellpadding="0" cellspacing="0" style="background-color: #ffffff; border-radius: 8px; overflow: hidden;">

                    <!-- Header -->
                    <tr>
                        <td style="background: linear-gradient(135deg, #1e40af, #059669); padding: 30px; text-align: center;">
                            <h1 style="color: #ffffff; margin: 0; font-size: 24px;">🛡️ New Security Guard Application</h1>
                            <p style="color: #ffffff; margin: 10px 0 0 0; opacity: 0.9;">SurVail Protection & Investigation Services</p>
                        </td>
                    </tr>

                    <!-- Applicant Info -->
                    <tr>
                        <td style="background-color: #f8fafc; border-left: 4px solid #1e40af; padding: 20px; margin: 20px;">
                            <h2 style="margin: 0 0 10px 0; color: #1e40af; font-size: 20px;">
                                {{ $applicationData['first_name'] }} {{ $applicationData['last_name'] }}
                            </h2>
                            <p style="margin: 5px 0; color: #333;">
                                📧 {{ $applicationData['email'] }} | 📞 {{ $applicationData['phone'] }}
                            </p>
                            <p style="margin: 5px 0; color: #333;">
                                🆔 License: {{ $applicationData['security_license'] }}
                                (Expires: {{ \Carbon\Carbon::parse($applicationData['license_expiry'])->format('M j, Y') }})
                            </p>
                        </td>
                    </tr>

                    <!-- Resume Link -->
                    @if($resumePath && isset($applicationData['resume_url']))
                    <tr>
                        <td style="background-color: #fef3c7; padding: 20px; text-align: center;">
                            <p style="margin: 0 0 15px 0; color: #92400e; font-weight: bold; font-size: 16px;">
                                ⚠️ Action Required: New application submitted
                            </p>
                            <p style="margin: 0 0 10px 0; color: #333;">
                                <strong style="color: #059669; font-size: 16px;">📎 Resume Available</strong>
                            </p>
                            <a href="{{ $applicationData['resume_url'] }}"
                               style="display: inline-block; background-color: #059669; color: #ffffff; padding: 12px 30px; text-decoration: none; border-radius: 5px; font-weight: bold; font-size: 16px; margin: 10px 0;">
                                📄 View/Download Resume
                            </a>
                            <p style="margin: 10px 0 0 0; color: #666; font-size: 13px;">
                                Resume is also attached to this email
                            </p>
                        </td>
                    </tr>
                    @elseif($resumePath)
                    <tr>
                        <td style="background-color: #fef3c7; padding: 20px; text-align: center;">
                            <p style="margin: 0; color: #92400e; font-weight: bold;">
                                📎 Resume attached to this email
                            </p>
                        </td>
                    </tr>
                    @else
                    <tr>
                        <td style="background-color: #fef3c7; padding: 20px; text-align: center;">
                            <p style="margin: 0; color: #92400e; font-weight: bold;">
                                ⚠️ No resume was uploaded with this application
                            </p>
                        </td>
                    </tr>
                    @endif

                    <!-- Personal Information -->
                    <tr>
                        <td style="padding: 20px;">
                            <h3 style="color: #1e40af; margin: 0 0 15px 0; font-size: 18px; border-bottom: 2px solid #1e40af; padding-bottom: 5px;">
                                👤 Personal Information
                            </h3>
                            <table width="100%" cellpadding="5" cellspacing="0" style="font-size: 14px;">
                                <tr>
                                    <td width="35%" style="font-weight: bold; color: #374151; padding: 8px 0; border-bottom: 1px solid #e5e7eb;">Full Name:</td>
                                    <td style="color: #6b7280; padding: 8px 0; border-bottom: 1px solid #e5e7eb;">{{ $applicationData['first_name'] }} {{ $applicationData['last_name'] }}</td>
                                </tr>
                                @if(!empty($applicationData['address']))
                                <tr>
                                    <td style="font-weight: bold; color: #374151; padding: 8px 0; border-bottom: 1px solid #e5e7eb;">Address:</td>
                                    <td style="color: #6b7280; padding: 8px 0; border-bottom: 1px solid #e5e7eb;">{{ $applicationData['address'] }}</td>
                                </tr>
                                @endif
                                @if(!empty($applicationData['city']))
                                <tr>
                                    <td style="font-weight: bold; color: #374151; padding: 8px 0; border-bottom: 1px solid #e5e7eb;">City:</td>
                                    <td style="color: #6b7280; padding: 8px 0; border-bottom: 1px solid #e5e7eb;">{{ $applicationData['city'] }}</td>
                                </tr>
                                @endif
                                <tr>
                                    <td style="font-weight: bold; color: #374151; padding: 8px 0; border-bottom: 1px solid #e5e7eb;">Gender:</td>
                                    <td style="color: #6b7280; padding: 8px 0; border-bottom: 1px solid #e5e7eb;">{{ ucfirst(str_replace('_', ' ', $applicationData['gender'])) }}</td>
                                </tr>
                                <tr>
                                    <td style="font-weight: bold; color: #374151; padding: 8px 0;">Date of Birth:</td>
                                    <td style="color: #6b7280; padding: 8px 0;">{{ \Carbon\Carbon::parse($applicationData['date_of_birth'])->format('M j, Y') }} (Age: {{ \Carbon\Carbon::parse($applicationData['date_of_birth'])->age }})</td>
                                </tr>
                            </table>
                        </td>
                    </tr>

                    <!-- License & Qualifications -->
                    <tr>
                        <td style="padding: 20px; background-color: #fafafa;">
                            <h3 style="color: #1e40af; margin: 0 0 15px 0; font-size: 18px; border-bottom: 2px solid #1e40af; padding-bottom: 5px;">
                                🏆 License & Qualifications
                            </h3>
                            <table width="100%" cellpadding="5" cellspacing="0" style="font-size: 14px;">
                                <tr>
                                    <td width="35%" style="font-weight: bold; color: #374151; padding: 8px 0; border-bottom: 1px solid #e5e7eb;">Security License:</td>
                                    <td style="color: #6b7280; padding: 8px 0; border-bottom: 1px solid #e5e7eb;">{{ $applicationData['security_license'] }}</td>
                                </tr>
                                <tr>
                                    <td style="font-weight: bold; color: #374151; padding: 8px 0; border-bottom: 1px solid #e5e7eb;">License Expiry:</td>
                                    <td style="color: #6b7280; padding: 8px 0; border-bottom: 1px solid #e5e7eb;">
                                        {{ \Carbon\Carbon::parse($applicationData['license_expiry'])->format('M j, Y') }}
                                        @if(\Carbon\Carbon::parse($applicationData['license_expiry'])->lt(\Carbon\Carbon::now()->addMonths(3)))
                                            <span style="background-color: #ef4444; color: white; padding: 2px 8px; border-radius: 10px; font-size: 11px; font-weight: bold;">Expires Soon</span>
                                        @endif
                                    </td>
                                </tr>
                                <tr>
                                    <td style="font-weight: bold; color: #374151; padding: 8px 0; border-bottom: 1px solid #e5e7eb;">Has Vehicle:</td>
                                    <td style="color: #6b7280; padding: 8px 0; border-bottom: 1px solid #e5e7eb;">
                                        {{ ucfirst($applicationData['has_vehicle']) }}
                                        @if($applicationData['has_vehicle'] === 'yes')
                                            <span style="background-color: #10b981; color: white; padding: 2px 8px; border-radius: 10px; font-size: 11px; font-weight: bold;">✓</span>
                                        @endif
                                    </td>
                                </tr>
                                @if(!empty($applicationData['certifications']))
                                <tr>
                                    <td style="font-weight: bold; color: #374151; padding: 8px 0;">Certifications:</td>
                                    <td style="color: #6b7280; padding: 8px 0;">
                                        @foreach($applicationData['certifications'] as $cert)
                                            <span style="background-color: #10b981; color: white; padding: 2px 8px; border-radius: 10px; font-size: 11px; font-weight: bold; margin: 2px; display: inline-block;">{{ ucfirst(str_replace('_', ' ', $cert)) }}</span>
                                        @endforeach
                                    </td>
                                </tr>
                                @endif
                            </table>
                        </td>
                    </tr>

                    <!-- Work Preferences -->
                    <tr>
                        <td style="padding: 20px;">
                            <h3 style="color: #1e40af; margin: 0 0 15px 0; font-size: 18px; border-bottom: 2px solid #1e40af; padding-bottom: 5px;">
                                💼 Work Preferences & Wages
                            </h3>
                            <table width="100%" cellpadding="5" cellspacing="0" style="font-size: 14px;">
                                <tr>
                                    <td width="35%" style="font-weight: bold; color: #374151; padding: 8px 0; border-bottom: 1px solid #e5e7eb;">Work Preference:</td>
                                    <td style="color: #6b7280; padding: 8px 0; border-bottom: 1px solid #e5e7eb;">
                                        @foreach($applicationData['work_preference'] as $pref)
                                            <span style="background-color: #10b981; color: white; padding: 2px 8px; border-radius: 10px; font-size: 11px; font-weight: bold; margin: 2px; display: inline-block;">{{ $pref }}</span>
                                        @endforeach
                                    </td>
                                </tr>
                                <tr>
                                    <td style="font-weight: bold; color: #374151; padding: 8px 0;">Expected Wages:</td>
                                    <td style="color: #6b7280; padding: 8px 0;">{{ $applicationData['expected_wages'] }}</td>
                                </tr>
                            </table>
                        </td>
                    </tr>

                    <!-- Contact Information -->
                    <tr>
                        <td style="padding: 20px; background-color: #fafafa;">
                            <h3 style="color: #1e40af; margin: 0 0 15px 0; font-size: 18px; border-bottom: 2px solid #1e40af; padding-bottom: 5px;">
                                📞 Contact Information
                            </h3>
                            <table width="100%" cellpadding="5" cellspacing="0" style="font-size: 14px;">
                                <tr>
                                    <td width="35%" style="font-weight: bold; color: #374151; padding: 8px 0; border-bottom: 1px solid #e5e7eb;">Email:</td>
                                    <td style="color: #6b7280; padding: 8px 0; border-bottom: 1px solid #e5e7eb;">
                                        <a href="mailto:{{ $applicationData['email'] }}" style="color: #1e40af; text-decoration: none;">{{ $applicationData['email'] }}</a>
                                    </td>
                                </tr>
                                <tr>
                                    <td style="font-weight: bold; color: #374151; padding: 8px 0; border-bottom: 1px solid #e5e7eb;">Phone:</td>
                                    <td style="color: #6b7280; padding: 8px 0; border-bottom: 1px solid #e5e7eb;">
                                        <a href="tel:{{ $applicationData['phone'] }}" style="color: #1e40af; text-decoration: none;">{{ $applicationData['phone'] }}</a>
                                    </td>
                                </tr>
                                @if(!empty($applicationData['best_time_to_contact']))
                                <tr>
                                    <td style="font-weight: bold; color: #374151; padding: 8px 0;">Best Time to Contact:</td>
                                    <td style="color: #6b7280; padding: 8px 0;">{{ $applicationData['best_time_to_contact'] }}</td>
                                </tr>
                                @endif
                            </table>
                        </td>
                    </tr>

                    <!-- Background Information -->
                    <tr>
                        <td style="padding: 20px;">
                            <h3 style="color: #1e40af; margin: 0 0 15px 0; font-size: 18px; border-bottom: 2px solid #1e40af; padding-bottom: 5px;">
                                🔍 Background Information
                            </h3>
                            <table width="100%" cellpadding="5" cellspacing="0" style="font-size: 14px;">
                                <tr>
                                    <td width="35%" style="font-weight: bold; color: #374151; padding: 8px 0;">Criminal Record:</td>
                                    <td style="color: #6b7280; padding: 8px 0;">
                                        {{ ucfirst($applicationData['criminal_record']) }}
                                        @if($applicationData['criminal_record'] === 'yes')
                                            <span style="background-color: #ef4444; color: white; padding: 2px 8px; border-radius: 10px; font-size: 11px; font-weight: bold;">Requires Review</span>
                                        @else
                                            <span style="background-color: #10b981; color: white; padding: 2px 8px; border-radius: 10px; font-size: 11px; font-weight: bold;">Clear</span>
                                        @endif
                                    </td>
                                </tr>
                            </table>
                        </td>
                    </tr>

                    <!-- Work History -->
                    <tr>
                        <td style="padding: 20px; background-color: #fafafa;">
                            <h3 style="color: #1e40af; margin: 0 0 15px 0; font-size: 18px; border-bottom: 2px solid #1e40af; padding-bottom: 5px;">
                                📋 Work History and Training
                            </h3>
                            <div style="background-color: white; padding: 15px; border-radius: 6px; border: 1px solid #d1d5db; color: #333; line-height: 1.6;">
                                {!! nl2br(e($applicationData['work_history'])) !!}
                            </div>
                        </td>
                    </tr>

                    <!-- Timestamp -->
                    <tr>
                        <td style="padding: 20px; border-top: 1px solid #e5e7eb; text-align: right; color: #6b7280; font-size: 14px;">
                            Application submitted on {{ \Carbon\Carbon::parse($applicationData['submitted_at'])->format('l, F j, Y \a\t g:i A T') }}
                        </td>
                    </tr>

                    <!-- Footer -->
                    <tr>
                        <td style="background-color: #1f2937; color: white; padding: 20px; text-align: center;">
                            <p style="margin: 0; font-weight: bold;">SurVail Protection & Investigation Services</p>
                            <p style="margin: 5px 0 0 0; opacity: 0.8; font-size: 14px;">
                                📧 hr@survailpro.ca | 📞 519-770-6634 | 🌐 survailpro.ca
                            </p>
                        </td>
                    </tr>

                </table>
            </td>
        </tr>
    </table>
</body>
</html>
