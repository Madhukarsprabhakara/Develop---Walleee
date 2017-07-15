<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;
use App\User;
class WelcomeToWalleee extends Mailable
{
    use Queueable, SerializesModels;
	public $user;
    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct(User $user)
    {
        //
        $this->user=$user;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {	
    	
    	$subject = "Welcome to WALLEEE, ".$this->user->name."!";
        return $this->markdown('emails.walleee.welcome-to-walleee',compact('user'))
        			->subject($subject);
    }
}
