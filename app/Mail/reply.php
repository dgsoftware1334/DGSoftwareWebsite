<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use App\Models\Contact;

class reply extends Mailable
{
    use Queueable, SerializesModels;
    public $contact = [];
    public $contenu;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct(Contact $contact, String $contenu)
    {
        $this->contact = $contact;
        $this->contenu = $contenu;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->from('guettaia8@gmail.com')
                    ->subject($this->contact['Sujet'])
                    ->view('dashboard.mails.reply');
    }
}
