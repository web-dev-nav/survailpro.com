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

        if ($this->resumePath) {
            $fullPath = public_path($this->resumePath);

            \Log::info('Attempting to attach resume', [
                'resume_path' => $this->resumePath,
                'full_path' => $fullPath,
                'file_exists' => file_exists($fullPath),
                'applicant' => $this->applicationData['first_name'] . ' ' . $this->applicationData['last_name']
            ]);

            if (file_exists($fullPath)) {
                // Get the original file extension
                $pathInfo = pathinfo($fullPath);
                $extension = isset($pathInfo['extension']) ? '.' . $pathInfo['extension'] : '';
                $filename = 'Resume_' . $this->applicationData['first_name'] . '_' . $this->applicationData['last_name'] . $extension;

                $attachments[] = Attachment::fromPath($fullPath)
                    ->as($filename)
                    ->withMime($this->getMimeType($extension));

                \Log::info('Resume attached successfully', [
                    'filename' => $filename,
                    'extension' => $extension,
                    'mime_type' => $this->getMimeType($extension)
                ]);
            } else {
                \Log::error('Resume file not found for attachment', [
                    'resume_path' => $this->resumePath,
                    'full_path' => $fullPath
                ]);
            }
        } else {
            \Log::info('No resume uploaded for this application');
        }

        return $attachments;
    }

    /**
     * Get MIME type based on file extension
     */
    private function getMimeType($extension): string
    {
        $mimeTypes = [
            '.pdf' => 'application/pdf',
            '.docx' => 'application/vnd.openxmlformats-officedocument.wordprocessingml.document',
            '.doc' => 'application/msword',
        ];

        return $mimeTypes[$extension] ?? 'application/octet-stream';
    }
}
