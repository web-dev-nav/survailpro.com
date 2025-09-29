<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Mail\Mailables\Attachment;
use Illuminate\Queue\SerializesModels;

class ApplicationSubmitted extends Mailable
{
    use Queueable, SerializesModels;

    public $applicationData;
    public $resumePath;

    /**
     * Create a new message instance.
     */
    public function __construct($applicationData, $resumePath = null)
    {
        $this->applicationData = $applicationData;
        $this->resumePath = $resumePath;
    }

    /**
     * Get the message envelope.
     */
    public function envelope(): Envelope
    {
        return new Envelope(
            subject: 'New Security Guard Application - ' . $this->applicationData['first_name'] . ' ' . $this->applicationData['last_name'],
        );
    }

    /**
     * Get the message content definition.
     */
    public function content(): Content
    {
        return new Content(
            view: 'emails.application-submitted',
            with: [
                'applicationData' => $this->applicationData,
                'resumePath' => $this->resumePath,
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
        $attachments = [];

        if ($this->resumePath && file_exists(storage_path('app/' . $this->resumePath))) {
            $attachments[] = Attachment::fromPath(storage_path('app/' . $this->resumePath))
                ->as('Resume_' . $this->applicationData['first_name'] . '_' . $this->applicationData['last_name'] . '.pdf');
        }

        return $attachments;
    }
}
