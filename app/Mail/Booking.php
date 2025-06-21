<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Queue\SerializesModels;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Mail\Mailables\Address;
use Illuminate\Contracts\Queue\ShouldQueue;

class Booking extends Mailable
{
    public $booking;

    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($booking)
    {
        $this->booking = $booking;
    }

    /**
     * Get the message envelope.
     */
    public function envelope(): Envelope
    {
        $email = $this->booking['email'] ?? ''; 
        $name = trim(($this->booking['first_name'] ?? '') . ' ' . ($this->booking['last_name'] ?? ''));
        
        return new Envelope(
            subject: 'New Booking Request - Doghouse Broga',
            replyTo: [
                new Address($email, $name),
            ],
        );
    }

    /** 
     * Get the message content definition.
     */
    public function content(): Content
    {
        return new Content(
            view: 'emails.booking',
            with: ['data' => $this->booking],
        );
    }
}
