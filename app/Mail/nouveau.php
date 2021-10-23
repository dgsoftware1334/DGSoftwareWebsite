<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use App\Models\Message;
use Illuminate\Queue\SerializesModels;

class nouveau extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public $message = [];
    public $contenu;
    public function __construct(Message $message)
    {
        $this->message = $message;
        $this->contenu = $message->Message;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->from('guettaia8@gmail.com')
                    ->subject($this->message['Sujet'])
                    ->view('dashboard.mails.nouveau');
    }
}
