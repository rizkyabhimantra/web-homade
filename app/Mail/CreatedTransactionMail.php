<?php

namespace App\Mail;

use App\Models\Transaction;
use App\Service\ContactService;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;

class CreatedTransactionMail extends Mailable
{
    use Queueable, SerializesModels;

    private Transaction $transaction;

    private bool $is_admin = false;

    /**
     * Create a new message instance.
     */
    public function __construct(Transaction $transaction, bool $is_admin = false)
    {
        $this->transaction = $transaction;
        $this->is_admin = $is_admin;
    }

    /**
     * Get the message envelope.
     */
    public function envelope(): Envelope
    {

        $subject = $this->is_admin ? '[Homade] Ada Pemesanan Masuk Nih!' : '[Homade] Berhasil Dalam Membuat Pemesanan';

        return new Envelope(
            subject: $subject,
        );
    }

    /**
     * Get the message content definition.
     */
    public function content(): Content
    {
        return new Content(
            markdown: 'mail.created-transaction-mail',
            with: [
                'transaction' => $this->transaction,
                'contact' => (new ContactService())->contact(),
                'is_admin' => $this->is_admin
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
