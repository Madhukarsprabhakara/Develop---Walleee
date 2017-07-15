<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;
use App\Users;
use App\user_amt_datas;
use App\user_carts;
class GetSavingsData extends Mailable
{
    use Queueable, SerializesModels;
	public $user;
    /**
     * Create a new message instance.
     *
     * @return void
     */
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
    	$idj = Users::where('id',$this->user->id)->first(['name']);
    	$subject='Excited to see you plan your purchases!';
    	$leaderboard = 'http://localhost/ourpillars';
    	//$url_yes = 'http://localhost/users/'.$this->user_amt_data->id.'/1';
    	//$url_no = 'http://localhost/users/'.$this->user_amt_data->id.'/0';
        return $this->markdown('emails.get_savings_data-email',compact('UserCartEntries','leaderboard'))
        			->subject($subject)
        			->with('name',$idj->name);
        			
        			
    }
}
