<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class Sendmail extends Mailable
{
    use Queueable, SerializesModels;

    public $visteurs;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($visteurs)
    {
        //
        $this->visteurs = $visteurs;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->from('etienirahuberson@gmail.com')->subject('Visiteur')->view('mail.contact_client')->with('visteurs', $this->visteurs);
    }
}
