# 📧 Email Configuration Guide

This guide explains how to configure email functionality for the SurVail Protection & Investigation Services application.

## 🔧 Available Mail Options

You can switch between three simple mail options by changing the `MAIL_MAILER` value in your `.env` file:

### 1. **Log Driver** (Default - For Development/Testing)
```env
MAIL_MAILER=log
```
- **Use Case**: Development, testing, debugging
- **Behavior**: Emails are written to `storage/logs/laravel.log` instead of being sent
- **Pros**: No external configuration needed, safe for testing
- **Cons**: No actual emails sent

### 2. **Mail Driver** (For Online Hosting - PHP mail() function)
```env
MAIL_MAILER=mail
```
- **Use Case**: Online hosting providers (cPanel, Shared hosting, VPS)
- **Behavior**: Uses PHP's built-in `mail()` function
- **Pros**: No additional configuration needed, works on most hosting providers
- **Cons**: Limited control, may have deliverability issues
- **Best For**: Shared hosting, cPanel hosting, basic VPS setups

### 3. **SMTP Driver** (For External SMTP Servers)
```env
MAIL_MAILER=smtp
MAIL_HOST=smtp.gmail.com
MAIL_PORT=587
MAIL_USERNAME=your-email@gmail.com
MAIL_PASSWORD=your-app-password
MAIL_ENCRYPTION=tls
```

#### Gmail SMTP Setup:
1. Enable 2-Factor Authentication on your Gmail account
2. Generate an App Password: Google Account → Security → App passwords
3. Use the App Password (not your regular password) in `MAIL_PASSWORD`

#### Other SMTP Providers:
- **Outlook/Hotmail**: `smtp.office365.com`, Port `587`
- **Yahoo**: `smtp.mail.yahoo.com`, Port `587`
- **Custom SMTP**: Use your hosting provider's settings

## ⚙️ General Configuration

### Required Settings (All Drivers):
```env
MAIL_FROM_ADDRESS="don@survailpro.ca"
MAIL_FROM_NAME="SurVail Protection & Investigation Services"
ADMIN_EMAIL="don@survailpro.ca"
```

### Optional Settings:
```env
# Enable/disable email notifications
ENABLE_EMAIL_NOTIFICATIONS=true

# Additional SMTP settings (if needed)
MAIL_SCHEME=null
```

## 🚀 Quick Setup Examples

### For Development (Log emails to file):
```env
MAIL_MAILER=log
ENABLE_EMAIL_NOTIFICATIONS=true
ADMIN_EMAIL="don@survailpro.ca"
```

### For Online Hosting (PHP mail() function):
```env
MAIL_MAILER=mail
MAIL_FROM_ADDRESS="don@survailpro.ca"
MAIL_FROM_NAME="SurVail Protection & Investigation Services"
ADMIN_EMAIL="don@survailpro.ca"
ENABLE_EMAIL_NOTIFICATIONS=true
```

### For Production with Gmail SMTP:
```env
MAIL_MAILER=smtp
MAIL_HOST=smtp.gmail.com
MAIL_PORT=587
MAIL_USERNAME=don@survailpro.ca
MAIL_PASSWORD=your-gmail-app-password
MAIL_ENCRYPTION=tls
MAIL_FROM_ADDRESS="don@survailpro.ca"
MAIL_FROM_NAME="SurVail Protection & Investigation Services"
ADMIN_EMAIL="don@survailpro.ca"
ENABLE_EMAIL_NOTIFICATIONS=true
```

## 🧪 Testing Email Configuration

### Test Email Functionality:
```bash
php artisan test:email
```

### Test with Specific Email:
```bash
php artisan test:email your-test@email.com
```

### Test Mail() Function Driver:
```bash
php artisan test:email --driver=mail
```

### Test SMTP Driver:
```bash
php artisan test:email --driver=smtp
```

### Check Laravel Logs:
```bash
tail -f storage/logs/laravel.log
```

## 🔍 Troubleshooting

### Common Issues:

1. **Gmail "Less Secure Apps" Error**
   - Solution: Use App Passwords instead of regular password
   - Enable 2FA first, then generate App Password

2. **SMTP Authentication Failed**
   - Check username/password are correct
   - Verify SMTP host and port
   - Check if 2FA is enabled (use App Password)

3. **PHP mail() Function Not Working**
   - Check if hosting provider supports PHP mail()
   - Verify server has sendmail or postfix configured
   - Contact hosting provider support

4. **Connection Timeout**
   - Verify firewall allows SMTP ports (587, 465, 25)
   - Check hosting provider SMTP restrictions

5. **"Unauthenticated" Error**
   - Clear config cache: `php artisan config:clear`
   - Verify .env file syntax (no spaces around =)

### Debug Mode:
Set `APP_DEBUG=true` in `.env` for detailed error messages.

## 📋 Email Content

The system sends professional HTML emails containing:

- ✅ Complete applicant information
- ✅ Resume attachment (if uploaded)
- ✅ Professional SurVail branding
- ✅ Organized sections with color coding
- ✅ Contact information with clickable links
- ✅ Application timestamp and IP tracking

## 🔒 Security Features

- Rate limiting prevents spam submissions
- Input sanitization and validation
- Secure file upload handling
- IP and user agent logging
- Error handling prevents application failure

## 📞 Support

For email configuration issues:
- Check Laravel logs: `storage/logs/laravel.log`
- Verify .env settings
- Test with `php artisan test:email`
- Contact: don@survailpro.ca