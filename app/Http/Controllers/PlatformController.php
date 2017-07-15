<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\product_categories;
use App\product_sub_categories;
use App\user_carts;
class PlatformController extends Controller
{
    //
    public function __construct()
    {
    	
    	$this->middleware('auth')->except(['category','cart','index','aboutUs']);
    	
    }
    public function index() 
    {
    		$category = product_categories::all();
    		$sub_categories = product_sub_categories::all();
    		$total =0;
    		$totalAmtPDay = 0;
    		//echo $sub_categories ;
    		if (\Auth::check()) 
    		{
    		$id=\Auth::id();
        	//$userCartProducts = user_carts::where('id',$id)->get();
        	$totalAmount = user_carts::where('id',$id)->get(['amount','amount_per_day']);
        	
        	foreach ($totalAmount as $amtPerDayAndTotal) {
        			$totalAmt=$amtPerDayAndTotal->amount;
        			$total = $totalAmt + $total;
        			$totalAmtPerDay= $amtPerDayAndTotal->amount_per_day;
        			$totalAmtPDay = $totalAmtPDay + $totalAmtPerDay;
        		}
    		$user = \Auth::user();
    		$userName = $user->name;
    		return view('walleee/html/category_loggedin', compact('category','sub_categories'))
    				->with('name',$userName)
    				->with('total',$total)
    				->with('totalAmtPDay',$totalAmtPDay);
    		}
    		else
    		{
				return view('walleee/html/category',compact('category','sub_categories'))
						//->with('name',$userName)
    					->with('total',$total)
    					->with('totalAmtPDay',$totalAmtPDay);    	
    		}
    }
    public function category() 
    {
    
    	return redirect('/');
    
    }
    
    public function account()
    {
    
    	return view('walleee/html/account');
    }
    public function aboutUs()
    {
    	if (\Auth::id())
    	{
    		return redirect('/productsd_lin');	
    	}
    	else
    	{
    		return view('walleee/html/blank-page');
    	}
    }
    
    public function cart()
    {
    
    	if (\Auth::check()) {
    		return view('walleee/html/cart');
    	}
    	else {
    		return view('walleee/html/account-1');
    	}	
    
    }
    public function loggedInPage() 
    {
    	
    	if (\Auth::check()) {
    		
    		$user = \Auth::user();
    		$userName = $user->name;
    		return view('walleee/html/index-logged-in')
    				->with('name',$userName);
    	}
    	else {
    		return view('walleee/html/account-1');
    	}
    
    }
    public function joinCampaign()
    {
    	return view('walleee/html/campaigncontrol');
    }
}
