<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Mail\WelcomeToWalleee;
use App\Jobs\SendEmails;
use App\leaderboards;
use Carbon\Carbon;
class RegistrationController extends Controller
{
    //
   // public function create() 
    //{
    //	return view(walleee/HTML/category);
    
    //}
    
    public function store(Request $request)
    {
    //validate form
    //dd(request('name'));
    //echo "madhu";
    //echo $_POST['mtype_id'];
     $this->validate(request(), [
     	'name' => 'required',
      	'email' => 'required|email',
      	'password' => 'required',
     	'mtype_id' => 'required'
//     
//      
     ]);
// //     
// //     //create and save user
// //     


	$data = $request->all();
	$data['password'] = \Hash::make($data['password']);
	$user=User::create($data);
     //$user=User::create(request(['name','email','password','mtype_id']));
     
     
    
     	 //return response()->json(['responseText' => 'Success!'], 200);
     
     
// //     //sign them in
// //     
	auth()->login($user);
	$user1 = \Auth::user();
	
	$id = \Auth::id();
	
	//Code for pillars
	
	
	
	if ($user1->name) {
	
		$pillars=new leaderboards();
		$pillars->id = $id;
		$pillars->name = $user1->name;
		$pillars->status = 1;
		$creationdatetime = Carbon::now();
		$pillars->creation_time = $creationdatetime;
		$pillars->start_time = $creationdatetime;
		$pillars->end_time = $creationdatetime;
		$pillars->total_time = $creationdatetime;
		
		$pillars->save();
		
		//$job=new SendEmails(\Mail::to($user->email)->send(new WelcomeToWalleee($user)));
		\Mail::to($user->email)->queue(new WelcomeToWalleee($user));
		//$this->dispatch($job);
		return response()->json(['responseText' => $user1->name ], 200);
		//\Mail::to($user1->email)->send(new RemindSave($user1));
	
	}
	else
	{
		return response()->json(['responseText' => 'Error' ], 500);
	}
	
    
        //return redirect('walleee/HTML/index-logged-in');
    
    }
    
}
