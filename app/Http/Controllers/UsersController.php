<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Users;
use App\user_amt_datas;
use App\Mail\RemindSave;
use Carbon\Carbon;
class UsersController extends Controller
{
    //
    
    public function index() 
    {
    	$info = Users::all();
		return view('get_info',compact('info'));
    
    }
    public function show($id)
    {
    	$info = Users::where('id','=',$id)->get();
		return view('get_info',compact('info'));
    
    }
    public function SavingsInfo($id,$flag)
    {
    	$user_update = user_amt_datas::where('id', $id)->first();
    	if ($flag ==1)
    	{
    		$remaining_amount = $user_update -> remaining_amount;
    		$amount_per_day = $user_update -> amount_per_day;
    		$days_remaining = $user_update -> days_remaining;
    		
    		$remaining_amount = $remaining_amount - $amount_per_day;
    		$days_remaining = $days_remaining -1;
    		
    		$user_update -> remaining_amount = $remaining_amount;
    		$user_update -> days_remaining = $days_remaining;
    		
    		$user_update -> save();
    	
    	}
    	return redirect('/');
    }
	public function create()
    {
    	//$info = Users::where('id','=',$id)->get();
		return view('users.add');
    
    }
    public function store()
    {
    	//dd(request()->all());
    	$user = new Users;
    	
    	$user->name = request('name');
    	$user->email = request('email');
    	$email_temp = request('email');
    	//$user->password = 'dummy';
    	//$user->by_when = request('byWhen');

		$user->save();
		
		$user_amt_data = new user_amt_datas;
		
		//$idj = Users::where('email',$email_temp)->first(['id']);
		$inserted_id=$user->id;
		$user_amt_data->id= $inserted_id;
		$user_amt_data->email = request('email');
		$user_amt_data->item = request('item');
		$user_amt_data->amount = request('amount');
		$user_amt_data->by_when = request('byWhen');
		
		
		//Total amount entered by user
		$total_amount = $user_amt_data->amount;
		//Initializing the remaining amount, would be initialized to total amount
		$remaining_amount = $total_amount;
		
		//Getting the days needed by the user to save the amount
		$end_date = Carbon::parse(request('byWhen'));
		$current_date = Carbon::now();
		
		$total_no_days = $end_date->diffInDays($current_date);
		
		//Amount per day calculation
		$amount_per_day = $total_amount / $total_no_days;
		$amount_per_day=round($amount_per_day);
		$remaining_days = $total_no_days;
		
		$user_amt_data -> amount_per_day = $amount_per_day;
		$user_amt_data->amount_saved = 0;
		$user_amt_data->days_remaining = $remaining_days;
		$user_amt_data->remaining_amount = $remaining_amount;
		$user_amt_data->no_of_days = $total_no_days;
		$user_amt_data->epoch_start = 0;
		$user_amt_data-> epoch_end = 0;
		
		
		$user_amt_data->save();
		
		\Mail::to($user_amt_data->email)->send(new RemindSave($user_amt_data));
		return redirect('/');    	
    	//create a new db entry
    	//save it to the db
    	// and then redirect the user to a success page
    }
    public function botStore()
    {
    	//dd(request()->all());
    	$user = new Users;
    	
    	$user->name = request('name');
    	$user->email = request('email');
    	$email_temp = request('email');
    	//$user->password = 'dummy';
    	//$user->by_when = request('byWhen');

		$user->save();
		
		$user_amt_data = new user_amt_datas;
		
		//$idj = Users::where('email',$email_temp)->first(['id']);
		$inserted_id=$user->id;
		$user_amt_data->id= $inserted_id;
		$user_amt_data->email = request('email');
		$user_amt_data->item = request('item');
		$user_amt_data->amount = request('amount');
		$user_amt_data->by_when = request('byWhen');
		
		
		//Total amount entered by user
		$total_amount = $user_amt_data->amount;
		//Initializing the remaining amount, would be initialized to total amount
		$remaining_amount = $total_amount;
		
		//Getting the days needed by the user to save the amount
		$end_date = Carbon::parse(request('byWhen'));
		$current_date = Carbon::now();
		
		$total_no_days = $end_date->diffInDays($current_date);
		
		//Amount per day calculation
		$amount_per_day = $total_amount / $total_no_days;
		
		$remaining_days = $total_no_days;
		
		$user_amt_data -> amount_per_day = $amount_per_day;
		$user_amt_data->amount_saved = 0;
		$user_amt_data->days_remaining = $remaining_days;
		$user_amt_data->remaining_amount = $remaining_amount;
		$user_amt_data->no_of_days = $total_no_days;
		$user_amt_data->epoch_start = 0;
		$user_amt_data-> epoch_end = 0;
		
		
		$user_amt_data->save();
		
		//\Mail::to($user_amt_data->email)->send(new RemindSave($user_amt_data));
		return 200;    	
    	//create a new db entry
    	//save it to the db
    	// and then redirect the user to a success page
    }
    
}
