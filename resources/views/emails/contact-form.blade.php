<x-mail::message>
# New Contact Form Submission

You have received a new contact form submission from your website.

<x-mail::panel>
**Name:** {{ $formData['name'] }}

**Email:** {{ $formData['email'] }}

**Phone:** {{ $formData['phone'] }}

**Service Needed:** {{ ucwords(str_replace('-', ' ', $formData['service'])) }}
</x-mail::panel>

## Message:

{{ $formData['message'] }}

---

*This email was sent from the SurVail contact form.*
</x-mail::message>
