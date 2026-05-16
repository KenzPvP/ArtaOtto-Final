<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;

class ContactMessageMail extends Mailable
{
    use Queueable, SerializesModels;

    public string $name;
    public string $email;
    public string $whatsapp;
    public string $clinic;
    public string $profession;
    public string $inquiryType;
    public string $body; // ← BUKAN $message

    public function __construct(
        string $name,
        string $email,
        string $whatsapp,
        string $clinic,
        string $profession,
        string $inquiryType,
        string $message
    ) {
        $this->name        = $name;
        $this->email       = $email;
        $this->whatsapp    = $whatsapp;
        $this->clinic      = $clinic;
        $this->profession  = $profession;
        $this->inquiryType = $inquiryType;
        $this->body        = $message; // ← assign ke $body
    }

    public function envelope(): Envelope
    {
        return new Envelope(
            subject: "[Inquiry] {$this->inquiryType} - {$this->name}",
        );
    }

    public function content(): Content
    {
        return new Content(
            view: 'emails.contact',
        );
    }

    public function attachments(): array
    {
        return [];
    }
}