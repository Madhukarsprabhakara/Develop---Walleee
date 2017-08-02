<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;
use App\Users;
use App\user_amt_datas;
use App\user_carts;
class ThresholdEmail extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     *
     * @return void
     */
     protected $user;
    public function __construct($user)
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
    	$UserCartEntries = user_carts::where('id',$this->user->id)->get();
    	$subject = "Congratulations on achieving, ".$this->user->name."!";
    	$leaderboard = 'http://localhost/ourpillars';
        return $this->markdown('emails.ThreshholdEmail',compact('UserCartEntries','leaderboard'))
        			->subject($subject)
        			->with('name',$this->user->name);
    }
}
