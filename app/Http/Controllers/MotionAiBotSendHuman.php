<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use GuzzleHttp\Client;
use App\user_amt_datas;
use App\Users;
class MotionAiBotSendHuman extends Controller
{
    //
    
    public function sendToHumanOnfb() 
    {
    	$client = new Client;
    	$user = Users::where('id', 2)->first();
    	$user_data = user_amt_datas::where('id', 2)->first();
		$msg = $user->name . " ,you are just " . $user_data ->days_remaining ." days away from getting your hands on the " .$user_data -> item. " you've always wanted. Please keep going."; 
    	
    	$r = $client->post('https://api.motion.ai/messageHuman', 
                ['json' => [
                    "to" =>"1357633000990745",
                    "bot" => "59787",
                    "msg" => $msg,
                    "key" => "3c41072c71cbec26f199379191dce040"
                ]]);
                 dd($r->getStatusCode());
    	
    	return redirect('/');
    
    }
    
    
}
