<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\leaderboards;
use Carbon\Carbon;
class PillarsController extends Controller
{
    //
     //$AllPillars = leaderboards::where('status',1)->get();
     public function startPillars()
    {
    	$AllPillars = leaderboards::where('status',1)->get();
    	if (\Auth::id()) 
    	{
    		$id=\Auth::id();
    		$pillar = leaderboards::find($id);

			$pillar->status = 1;
			$pillar->start_time = Carbon::now();
			$pillar->save();
    		//return view('walleee/html/leaderboard',compact('AllPillars'));
    		session()->flash('message', 'Cannot thank you enough for supporting this campaign!');
    		return view('walleee/html/leaderboard',compact('AllPillars'));
    	}
    	else
    	{
    		return view('/');
    	}
    	
    }
    
    public function stopPillars()
    {
    	$AllPillars = leaderboards::where('status',1)->get();
    	
    	if (\Auth::id()) 
    	{
    		$id=\Auth::id();
    		$pillar = leaderboards::find($id);
    		$start = Carbon::parse($pillar->start_time);
    		//echo($start);
    		$end = Carbon::parse($pillar->end_time);
    		//dd($end);
    		$created = Carbon::parse($pillar->created_at);
    		$updated = Carbon::parse($pillar->updated_at);
			if ($start->eq($end) && $created->eq($updated) && $start->eq($created)) 
			{	
				//dd("here or not");
				$pillar->status = 0;
				$pillar->end_time = Carbon::now();
				$CurrentDate = Carbon::now();
				$TotalTime = $pillar->total_time + $CurrentDate->diffInMinutes($start);
				$pillar->total_time = $TotalTime;
				$pillar->save();
			}
			elseif ($start->gt($end))
			{
				$pillar->status = 0;
				$pillar->end_time = Carbon::now();
				$CurrentDate = Carbon::now();
				$TotalTime = $pillar->total_time + $CurrentDate->diffInMinutes($start);
				$pillar->total_time = $TotalTime;
				$pillar->save();
			}
			else
			{
				//nothing
				$pillar->status = 0;
				$pillar->end_time = Carbon::now();
				$pillar->save();
				
			}
			
    		//return view('walleee/html/leaderboard',compact('AllPillars'));
    		session()->flash('message', 'Thanks for signing up, please consider supporting this campaign in the future. Together we can make this world a better place!');
    		return view('walleee/html/leaderboard',compact('AllPillars'));
    	}
    	
    	return view('walleee/html/leaderboard',compact('AllPillars'));	
    
    }
    
    public function getPillars()
    {
    	
    	// $AllPillars = leaderboards::where('status',1)->get();
//     	
//     	foreach ($AllPillars as $pillar) 
//         {                
//                         
//                         if ($pillar->created_at == $pillar->updated_at) 
//                         {
//                         	$date_now = \Carbon\Carbon::now();
//                         	$created_date = \Carbon\Carbon::parse($pillar->created_at);
//                         	$total_no_hours = $date_now->diffInHours($created_date);
//                         	if ($AllPillars) 
//                         	{
//                         		leaderboards::where('id',$pillar->id )->update(['total_time' => $total_no_hours]);
//                         		//leaderboards::where('id',$pillar->id )->update(['pillar->total_time' => $total_no_hours]);
//                         	}
//                         }
//                         else 
//                         {
//                         	$current_date = \Carbon\Carbon::parse($pillar->created_at);
//                         	$end_date = \Carbon\Carbon::parse($pillar->updated_at);
//                         	$total_no_hours = $end_date->diffInHours($current_date);
//                         	if ($AllPillars)
//                         	{
//             					leaderboards::where('id',$pillar->id )->update(['total_time' => $total_no_hours]);
//             				}	
//                         }
//                         
//     	}
    	$AllPillars = leaderboards::where('status',1)->orderBy('total_time', 'desc')->get();
    	//dd($AllPillars);
    	return view('walleee/html/leaderboard',compact('AllPillars'));
    	//return $AllPillars;
    	
    	
    }
}
