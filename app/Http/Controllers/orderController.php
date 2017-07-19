<?php

namespace App\Http\Controllers;

use App\user_carts;
use App\products;
use Carbon\Carbon;
use Illuminate\Http\Request;
use App\leaderboards;
use App\Jobs\SendSaveEmail;
class orderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $cart = new user_carts;
        $data = $request->all();
        $product = products::where('product_id', $data['product_id'])->first();
        //return  $product->price;
        
       //echo $data['CSRF'];
        $current_date = Carbon::now();
        $end_date = Carbon::parse($data['nodays']);
		
		
		$total_no_days = $end_date->diffInDays($current_date);
        //$total_no_days = $data['nodays'];
        $total_amount = $product->price;
        $remaining_amount = $total_amount;
        
        $amount_per_day = $total_amount / $total_no_days;
		$amount_per_day=round($amount_per_day);
		$remaining_days = $total_no_days;
		
		$cart->product_id = $product -> product_id;
		$cart->product_details = $product->description;
		$cart->product_name = $product->name;
		$cart->id = $data['id'];
		$cart->amount = $product -> price;
		$cart->quantity = 1;
		$cart -> amount_per_day = $amount_per_day;
		$cart -> by_when = $end_date;
		$cart->amount_saved = 0;
		$cart->days_remaining = $remaining_days;
		$cart->remaining_amount = $remaining_amount;
		$cart->no_of_days = $total_no_days;
		$cart->product_image = $product->image;
		$cart->epoch_start = 0;
		$cart-> epoch_end = 0;
		
		if ($cart->save())
		{
			return response()->json(['responseText' => $cart ], 200);
		}
		// else
// 		{
// 			return return response()->json(['responseText' => 'Error' ], 500);
// 		}
        // $product = new products;
//         $id
//         $pricePerDay
//         $noOfDays
//         $productId
        
        
        
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\user_cart  $user_cart
     * @return \Illuminate\Http\Response
     */
    public function show(Request $request)
    {
        //temporary variables declared for calculating the summation of total amount and total amount per day
        $total = 0;
        $totalAmtPDay = 0;
        $discount = 15;
        $discountAmount =0;
        $totalWithDiscount =0;
        
        if (\Auth::check()) 
        {
        	$id=\Auth::id();
        	$userCartProducts = user_carts::where('id',$id)->get();
        	
        	//$userCartProducts = user_carts::find($id);
        	//$userCartProducts_hydrate = user_carts::hydrate($userCartProducts);
        	//dd($userCartProducts); 
        	//$totalAmount = user_carts::where('id',$id)->get(['amount','amount_per_day']);
        	$productImage = products::get(['image','product_id']);
        	//dd($productImage);
        	//echo dd($totalAmount);
        	//dd($productImage->image);
        	//$totalAmountPerDay = ;
        	//return $userCartProducts;
        	if ($userCartProducts->isEmpty())
        	{
        		return view('walleee/html/cart');
        	}	
        	else
        	{
        		
        		$totalAmount = user_carts::where('id',$id)->get(['amount','amount_per_day']);
        		foreach ($totalAmount as $amtPerDayAndTotal) {
        			$totalAmt=$amtPerDayAndTotal->amount;
        			$total = $totalAmt + $total;
        			$totalAmtPerDay= $amtPerDayAndTotal->amount_per_day;
        			$totalAmtPDay = $totalAmtPDay + $totalAmtPerDay;
        		}
        		//discount calculation
        		$discountAmount = 15*($total/100);
        		$totalWithDiscount = $total - $discountAmount;
        		//echo $total;
        		$user = \Auth::user();
    			$userName = $user->name;
        		return view('walleee/html/cart',compact('userCartProducts','productImage'))
        										->with('total',$total)	
        										->with('totalAmtPDay',$totalAmtPDay)
        										->with('discountAmount',$discountAmount)
        										->with('totalWithDiscount',$totalWithDiscount)
        										->with('name',$userName);
        										//->with('productImage',$productImage->image);
        	}		
    	}
    	else 
    	{
    		session()->flash('message', 'You must be logged in to access your cart!');
    		return redirect('walleee/html/account-1');
    	}
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\user_cart  $user_cart
     * @return \Illuminate\Http\Response
     */
    public function edit(user_cart $user_cart)
    {
        //
    }
	public function stored(Request $request)
	{
		
		if (\Auth::check()) 
        {
        	$id=\Auth::id();
			$cart = new user_carts;
        	$data = $request->all();
        	//return $data;
        	$product = products::where('product_id', $data['product_id'])->first();
        	//return  $product->price;
        
       		//echo $data['CSRF'];
        	$current_date = Carbon::now();
        	//$end_date = Carbon::now()->addDays($data['nodays']);
			$end_date = Carbon::parse($data['byWhen']);
		
			$total_no_days = $end_date->diffInDays($current_date);
        	//$total_no_days = $data['nodays'];
        	$total_amount = $data['totalprice'];
        	$remaining_amount = $total_amount;
        
       	 	$amount_per_day = $total_amount / $total_no_days;
			$amount_per_day=round($amount_per_day);
			$remaining_days = $total_no_days;
		
			$cart->product_id = $product -> product_id;
			$cart->product_details = $product->description;
			$cart->product_name = $product->name;
			$cart->id = $id;
			$cart->amount = $total_amount;
			$cart->quantity = 1;
			$cart -> amount_per_day = $amount_per_day;
			$cart -> by_when = $end_date;
			$cart->amount_saved = 0;
			$cart->days_remaining = $remaining_days;
			$cart->remaining_amount = $remaining_amount;
			$cart->no_of_days = $total_no_days;
			$cart->product_image = $product->image;
			$cart->epoch_start = 0;
			$cart-> epoch_end = 0;
			$leaderboard = leaderboards::where('id',$id)->first();
			//dd($leaderboard);
			if ($cart->save())
			{
				$user = \Auth::user();
				dispatch(new SendSaveEmail($user));
				//return response()->json(['responseText' => $cart ], 200);
				return view('walleee/html/campaigncontrol', compact('leaderboard'));
			}
		}
		else
		{
			
			session()->flash('message', 'You must be logged in to access your cart!');
    		return redirect('walleee/html/account-1');
		
		}	
		// else
// 		{
// 			return return response()->json(['responseText' => 'Error' ], 500);
// 		}
        // $product = new products;
//         $id
//         $pricePerDay
//         $noOfDays
//         $productId
        
        
        
    }
		
	
    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\user_cart  $user_cart
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, user_cart $user_cart)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\user_cart  $user_cart
     * @return \Illuminate\Http\Response
     */
    public function destroy(user_cart $user_cart)
    {
        //
    }
}
