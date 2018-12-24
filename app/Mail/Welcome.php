<?php

namespace App\Mail;

use App\User;
use App\Plantillacorreo;
use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class Welcome extends Mailable
{
    use Queueable, SerializesModels;
    /**
     * @var User
     */
    public $user;
    
        /**
     * @var Plantillacorreo
     */
    public $plantillacorreo;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct(User $user)
    {
        $this->user = $user;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        //return $this->view('emails.welcome')
        return $this->view('responsables.sendmail')
               ->subject('Ingrese en el Sistema SIAP');                
    }
}
