<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Queue\SerializesModels;

class ContactMail extends Mailable
{
    use Queueable, SerializesModels;

    public $details;
    public $isAdmin;

    /**
     * Create a new message instance.
     *
     * @param array|object $details
     * @param bool $isAdmin
     * @return void
     */
    public function __construct($details, $isAdmin = false)
    {
        $this->details = (array) $details;
        $this->isAdmin = $isAdmin;
    }

    /**
     * Get the message envelope.
     *
     * @return \Illuminate\Mail\Mailables\Envelope
     */
    public function envelope()
    {
        $subject = $this->isAdmin
            ? 'New Contact Message from ' . ($this->details['full_name'] ?? 'User')
            : 'Thank You for Contacting Us - Dallas Black Cars';

        return new Envelope(
            subject: $subject
        );
    }

    /**
     * Get the message content definition.
     *
     * @return \Illuminate\Mail\Mailables\Content
     */
    public function content()
    {
        return new Content(
            view: 'emails.contact',
            with: [
                'details' => $this->details,
                'isAdmin' => $this->isAdmin,
            ]
        );
    }

    /**
     * Get the attachments for the message.
     *
     * @return array
     */
    public function attachments()
    {
        return [];
    }
}
