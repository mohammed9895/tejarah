<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;

class ContactForm extends Mailable
{
    use Queueable, SerializesModels;

    private $first_name;
    private $family_name;
    private $email;
    private $confirm_email;
    private $phone;
    private $company_name;
    private $cr;
    private $interested_in;

    /**
     * Create a new message instance.
     */
    public function __construct($first_name, $family_name, $email, $phone, $company_name, $cr, $interested_in)
    {
        $this->first_name = $first_name;
        $this->family_name = $family_name;
        $this->email = $email;
        $this->phone = $phone;
        $this->company_name = $company_name;
        $this->cr = $cr;
        $this->interested_in = $interested_in;
    }

    /**
     * Get the message envelope.
     */
    public function envelope(): Envelope
    {
        return new Envelope(
            subject: 'Contact Form | Tejarah',
            from: 'info@yc.om',
        );
    }

    /**
     * Get the message content definition.
     */
    public function content(): Content
    {
        return new Content(
            view: 'mail.contact_form',
            with: [
                'first_name' => $this->first_name,
                'family_name' => $this->family_name,
                'email' => $this->email,
                'phone' => $this->phone,
                'company_name' => $this->company_name,
                'cr' => $this->cr,
                'interested_in' => $this->interested_in,
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
