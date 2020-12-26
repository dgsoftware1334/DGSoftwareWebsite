<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use App\Models\User;

class accountCreated extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct(User $user,$motDepasse)
    {
        $this->user = $user;
        $this->mdp = $motDepasse;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->from('e-ecg@gmail.com')
                    ->subject("Compte d'accés E-ECG")
                    ->markdown('emails.accountCreated')
                    ->with(['motDepasse' => $this->mdp , 'user' => $this->user]);
    }
}
