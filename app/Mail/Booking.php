<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Mail\Mailables\Address;
use Illuminate\Queue\SerializesModels;
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
        $firstName = $this->booking['first_name'] ?? '';
        $lastName = $this->booking['last_name'] ?? '';
        $fullName = trim("$firstName $lastName") ?: 'Doghouse Guest';

        return new Envelope(
            from: new Address('enquiries@doghousebroga.com', 'Doghouse Broga'),
            subject: 'New Booking Request - Doghouse Broga',
            replyTo: [
                new Address($email, $fullName),
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
