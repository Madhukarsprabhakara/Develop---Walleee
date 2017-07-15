<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\user_amt_datas;
use App\Mail\GetSavingsData;
use App\Mail\RemindSave;
class EveningEmail extends Controller
{
    //
    
    public function sendEvening() 
    {

		$user_amt_data  = user_amt_datas::all();
    	//dd(gettype($user_amt_data));
    	foreach ($user_amt_data as $users) {
    		//echo $users->email . "\n";
    		\Mail::to($users->email)->send(new GetSavingsData($users));
    		//\Mail::to($user_amt_data->email)->send(new RemindSave($user_amt_data));
    	}
    	
    	return redirect('/');
	    
    }
}
