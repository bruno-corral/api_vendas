<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;

class RegistroEnvioMail extends Mailable
{
    use Queueable, SerializesModels;

    public $vendasTotais;

    /**
     * Create a new message instance.
     */
    public function __construct($vendasTotais)
    {
        $this->vendasTotais = $vendasTotais;
    }

    /**
     * Get the message envelope.
     */
    public function envelope(): Envelope
    {
        return new Envelope(
            subject: 'Registro Envio Mail',
        );
    }

    /**
     * Get the message content definition.
     */
    public function content(): Content
    {
        $this->subject('Vendas do Dia');
        $this->from('reply@email.com', 'Reply Bot');
        $this->replyTo('brunoalcorral@gmail.com');

        return new Content(
            view: 'Mails.registerMail',
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
