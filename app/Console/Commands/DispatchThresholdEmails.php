<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use App\Users;
use App\user_amt_datas;
use App\user_carts;
use App\Jobs\SendThresholdEmails;
class DispatchThresholdEmails extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'Dispatch:ThresholdEmails';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Dispatches threshold emails';

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
        //
        
        $UserCartEntries = user_carts::all();
        
        foreach ($UserCartEntries as $UserCartEntry)
        {
        	$user = Users::where('id',$UserCartEntry->id)->first();
        	$SavedSoFar= $UserCartEntry->amount_saved + $UserCartEntry->amount_per_day;
        	$UserCartEntry->amount_saved = $SavedSoFar;
        	$AmountPercent = ceil(($SavedSoFar/$UserCartEntry->amount)*100);
        	if ($AmountPercent >= 20 or $AmountPercent <= 35)
        	{
        			dispatch(new SendThresholdEmails($user));
        	}
        	elseif ($AmountPercent >= 36 or $AmountPercent <= 50)
        	{
        			dispatch(new SendThresholdEmails($user));
        	}
        	elseif ($AmountPercent >= 51 or $AmountPercent <= 70) 
        	{
        			dispatch(new SendThresholdEmails($user));
        	}
        	elseif ($AmountPercent >= 71 or $AmountPercent <= 85)
        	{
        			
        			dispatch(new SendThresholdEmails($user));
        			
        	}
        	elseif ($AmountPercent >= 86 or $AmountPercent ==100)
        	{
        			dispatch(new SendThresholdEmails($user));
        	}
        	else
        	{
        			dispatch(new SendThresholdEmails($user));
        	}
        	
        
        }
        
        
        
    }
}
