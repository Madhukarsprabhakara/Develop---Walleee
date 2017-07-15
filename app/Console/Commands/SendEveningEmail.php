<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
//use App\Users;
use App\user_amt_datas;
use App\Mail\GetSavingsData;
use App\Mail\RemindSave;
class SendEveningEmail extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'email:sendEvening';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Send emails every evening';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return mixed
     */
    public function handle()
    {
    	//$user = Users::all();
    	$user_amt_data  = user_amt_datas::all();
    	//dd(gettype($user_amt_data));
    	foreach ($user_amt_data as $users) {
    		//echo $users->email . "\n";
    		\Mail::to($users->email)->send(new GetSavingsData($users));
    		//\Mail::to($user_amt_data->email)->send(new RemindSave($user_amt_data));
    	}
    	
        
        
    }
}
