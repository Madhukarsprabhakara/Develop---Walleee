<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use App\leaderboards;
use Carbon\Carbon;
class SortLeaderBoard extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'Sort:leaderboard';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'This sorts the leaderboard';

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
        $leaderboard_entries = leaderboards::where('status',1)->get();
        foreach ($leaderboard_entries as $leaderboard_entry)
        {	
        	$start = Carbon::parse($leaderboard_entry->start_time);
    		//echo($start);
    		$end = Carbon::parse($leaderboard_entry->end_time);
    		//dd($end);
    		$created = Carbon::parse($leaderboard_entry->created_at);
    		$updated = Carbon::parse($leaderboard_entry->updated_at);
        	if ($start->eq($end) && $created->eq($updated) && $start->eq($created)) 
			{	
				//dd("here or not");
				//$pillar->status = 0;
				//$pillar->end_time = Carbon::now();
				$CurrentDate = Carbon::now();
				$TotalTime = $CurrentDate->diffInMinutes($start);
				$leaderboard_entry->total_time = $TotalTime;
				$leaderboard_entry->save();
			}
			elseif ($start->gt($end))
			{
				
				$CurrentDate = Carbon::now();
				$TotalTime = $leaderboard_entry->total_time + $CurrentDate->diffInMinutes($start);
				$leaderboard_entry->start_time = $CurrentDate;
				$leaderboard_entry->total_time = $TotalTime;
				$leaderboard_entry->save();
				
			}
			elseif ($start->eq($end) && $start->eq($created) && $start->ne($updated))
			{
				$CurrentDate = Carbon::now();
				$TotalTime = $CurrentDate->diffInMinutes($start);
				$leaderboard_entry->total_time = $TotalTime;
				$leaderboard_entry->save();
				
			}
			else
			{
				//do nothing
			}
        	// elseif ($leaderboard_entry->created_at != $leaderboard_entry->updated_at && $leaderboard_entry->status == 0)
//         	{
//         	
//         		$CurrentDate = Carbon::now();
//         		
//         	
//         	}
        }
        
    }
}
