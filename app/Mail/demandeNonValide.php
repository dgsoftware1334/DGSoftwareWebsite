<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use App\Models\Demande;

class demandeNonValide extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct(Demande $demande)
    {
         $this->demande = $demande;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
            return $this->from('e-ecg@gmail.com')
                        ->subject("Demande d'abonnement E-ECG refusée")
                        ->with([ 'recuCCP' =>$this->demande->recuCCP ])
                        ->markdown('emails.demandesNonValide');
    }
}
