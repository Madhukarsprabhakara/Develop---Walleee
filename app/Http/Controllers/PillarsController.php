<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\leaderboards;
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

			$pillar->status = 0;

			$pillar->save();
    		//return view('walleee/html/leaderboard',compact('AllPillars'));
    		session()->flash('message', 'Thanks for signing up, please consider supporting this campaign in the future. Together we can make this world a better place!');
    		return view('walleee/html/leaderboard',compact('AllPillars'));
    	}
    	
    	return view('walleee/html/leaderboard',compact('AllPillars'));	
    
    }
    
    public function getPillars()
    {
    	
    	$AllPillars = leaderboards::where('status',1)->get();
    	
    	return view('walleee/html/leaderboard',compact('AllPillars'));
    	//return $AllPillars;
    	
    	
    }
}
