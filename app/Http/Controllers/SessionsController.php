<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SessionsController extends Controller
{
    //logout users
    
    public function knowMe()
    {
    	$user1 = \Auth::user();
    	echo $user1;
    
    }
    
    public function destroy()
    {
    	if (\Auth::check()) {
    	$user1 = \Auth::user();
    	auth()->logout();
    	//echo $user1;
    	return redirect()->home();
    	}
    	else {
    		echo "forget it!";
    	}
    	
    }
    public function create()
    {
    		
    	if (\Auth::check()) 
    	{
    		return redirect('/aboutus');
    	//return redirect()->home();
    	}
    	else 
    	{
    		return view('walleee/HTML/account-1');
    	} 
    		
    }
    
    public function createSession() 
    {
    	//authenticate the user
    		//array(request('email'), request('password'))
    		 
    		 //$password=request('password');
    		// echo $email;
    		 //echo $password;
    		//$email="madhu@walleee.com";
    		//$password="asdasda";
    		if (!auth()->attempt(request(['email','password']),request(['signin_remember'])))
    		{
    			//echo "Not logged in";
    			//return response()->json(['responseText' => $e->getMessages() ], 500);
    			return redirect()->back()->withInput()->with('message', 'Login Failed');
    		}
    		else
    		{
    			//return redirect('walleee/html/index-logged-in');
    			return response()->json(['responseText' => 'Success!' ], 200);
    		}
//     		echo "Good";
     		
    		
    	//sign them in
    	
    	//do something
    	
    	
    
    }
    
}
