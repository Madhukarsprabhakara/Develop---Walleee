<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;
use App\user_amt_datas;
use App\Users;

class RemindSave extends Mailable
{
    use Queueable, SerializesModels;

	public $user_amt_data;
    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct(user_amt_datas $user_amt_data)
    {
        //
        $this->user_amt_data=$user_amt_data;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
    	//$id=$this->user_amt_data->amount_per_day;
    	$idj = Users::where('email',$this->user_amt_data->email)->first(['name']);
    	//$info = Users::where('email','=',$this->user_amt_data->email)->get();
    	//$name = $name->name;
    	$subject='Just save $'.$this->user_amt_data->amount_per_day.' today!';
		//$remind_save_morning = user_amt_datas::select('id')->where('email',request('email'))->first();
    	
        return $this->view('emails.remind',compact('user_amt_data'))
        			->subject($subject)
        			->with('name',$idj->name);
    }
}
