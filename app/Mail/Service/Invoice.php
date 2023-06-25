<?php

namespace App\Mail\Service;

use App\Models\Transaction;
use App\Models\User;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;

class Invoice extends Mailable
{
    use Queueable, SerializesModels;

    public $user;
    public $transaction;
    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct(User $user, Transaction $transaction)
    {
        $this->user = $user;
        $this->transaction = $transaction;
    }

    /**
     * Get the message envelope.
     *
     * @return \Illuminate\Mail\Mailables\Envelope
     */
    public function envelope()
    {

        

        return new Envelope(
            subject: $this->transaction->amount>0?'':'Widrawal ' .'Invoice for '. $this->transaction->ref ,
        );
    }

    /**
     * Get the message content definition.
     *
     * @return \Illuminate\Mail\Mailables\Content
     */
    public function content()
    {
        $type = "Widrawal";

        if(isset($this->transaction->payment_for[0])){
            $type = ucfirst(str_replace ( '_', ' ', $this->transaction->payment_for[0]) );
        }
        


        return new Content(
            markdown: 'emails.services.invoice',
            with: [
                'transaction' => $this->transaction,
                'type' => $type,
            ],
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
