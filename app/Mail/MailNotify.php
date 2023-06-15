<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;
use Illuminate\Mail\Mailables\Address;

class MailNotify extends Mailable
{
    use Queueable, SerializesModels;

    public $data;
    // protected $username = "Martin Wainaina";
    // protected $email = "martinwainaina001@gmail.com";

    /**
     * Create a new message instance.
     */
    // public function __construct($username, $email)
    public function __construct($data)
    {
        $this->data = $data;
        // $this->$email = $email;
        // $this->username = $username;
    }

    /**
     * Get the message envelope.
     */
    public function envelope(): Envelope
    {
        /***
        return new Envelope(
            from: new Address('martin@platdel.com', 'Martin Platdel'),
            replyTo: [
                new Address('marie@platdel.com', 'Marie Platdel'),
            ],
            subject: 'Mail Notify',
        );
         */
        
        return new Envelope(
            from: new Address($this->data['from'], $this->data['from_name']),
            replyTo: [
                new Address($this->data['reply_to'], $this->data['reply_to_name']),
            ],
            subject: $this->data['subject'],
        );
    }

    /**
     * Get the message content definition.
     */
    public function content(): Content
    {
        return new Content(
            markdown: 'emails.welcome',
            with: $this->data,
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