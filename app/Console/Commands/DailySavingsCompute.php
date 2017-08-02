<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use App\user_carts;
class DailySavingsCompute extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'DailySavings:Compute';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'The job runs everyday at a set time to calculate the daily savings';

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
        $UserCarts = user_carts::all();
        
        
        foreach ($UserCarts as $UserCart)
        {
        	//Check if the saved amount is equal to total amount
        	$AmtSaved = $UserCart->amount_saved;
        	$TotalAmt = $UserCart->amount;
        	if ($AmtSaved =< $TotalAmt) 
        	{
        		//set 5
        	}
        	else
        	{
        		//Get  per day amount
        		$AmtPerDay= $UserCart->amount_per_day;
        		//increment the saved amount
        		$AmtSaved = $UserCart->amount_saved + $AmtPerDay;
        		$UserCart->amount_saved = $AmtSaved;
        		
        		//Calculate the percentage saved
        		$AmtPercent = ($AmtSaved/$TotalAmt) * 100;
        		//Save the percentage in the database
        	}	
        }
    }
}
