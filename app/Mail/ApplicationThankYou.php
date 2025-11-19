<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;

class ApplicationThankYou extends Mailable
{
    use Queueable, SerializesModels;

    public $applicantName;
    public $contactPhone;
    public $contactEmail;

    /**
     * Create a new message instance.
     */
    public function __construct($firstName, $lastName, $contactPhone = '519-770-6634', $contactEmail = 'info@survailpro.ca')
    {
        $this->applicantName = $firstName . ' ' . $lastName;
        $this->contactPhone = $contactPhone;
        $this->contactEmail = $contactEmail;
    }

    /**
     * Get the message envelope.
     */
    public function envelope(): Envelope
    {
        return new Envelope(
            subject: 'Thank You for Your Application - SurVail Protection & Investigation Services',
        );
    }

    /**
     * Get the message content definition.
     */
    public function content(): Content
    {
        return new Content(
            view: 'emails.application-thankyou',
            with: [
                'applicantName' => $this->applicantName,
                'contactPhone' => $this->contactPhone,
                'contactEmail' => $this->contactEmail,
            ]
        );
    }

    /**
     * Get the attachments for the message.
     *
     * @return array<int, \Illuminate\Mail\Mailables\Attachment>
     */
    public function attachments(): array
    {
        return [];
    }
}
