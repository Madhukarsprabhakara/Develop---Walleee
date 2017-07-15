<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\products;
use App\product_categories;
use App\product_sub_categories;
use App\user_carts;
class categoryController extends Controller
{
    //get products
    
    public function getProducts($prod_cat_id,$prod_subcat_id)
    {
    	$total =0;
    	$totalAmtPDay = 0;
    	$category = product_categories::all();
     	$sub_categories = product_sub_categories::all();
     	$products = products::where('prod_subcat_id', $prod_subcat_id)->get();
     	$subcatImage = product_sub_categories::where('prod_subcat_id',$prod_subcat_id)->get(['prod_sub_category_image_uri','prod_sub_cat_name']);
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
    		return view('walleee/html/eco_loggedin', compact('category','sub_categories','products'))
    				->with('name',$userName)
    				->with('total',$total)
    				->with('subcatImage',$subcatImage)
    				->with('totalAmtPDay',$totalAmtPDay);
    		}
    		else
    		{
				return view('walleee/html/eco',compact('category','sub_categories','products'))
						//->with('name',$userName)
    					->with('total',$total)
    					->with('subcatImage',$subcatImage)
    					->with('totalAmtPDay',$totalAmtPDay);    	
    		}
    	
     	// if ($products->isEmpty())
//         {
//         		$products = new products;
//         		return view('/walleee/html/eco',compact('category','sub_categories','products'))
//         					->with('subcatImage',$subcatImage);
//         		//return view('walleee/html/cart');
//         }	
// 		else 
// 		{
//     		return view('/walleee/html/eco',compact('category','sub_categories','products'))
//     						->with('subcatImage',$subcatImage);
//     	}	
    	//echo $products;
    
    }
    public function getProductCategoriesforDemo() 
    {
    	$prod_cat_id = 1;
    	$prod_subcat_id = 1;
    	$total =0;
    	$totalAmtPDay = 0;
    	$category = product_categories::all();
     	$sub_categories = product_sub_categories::all();
     	$products = products::where('prod_subcat_id', $prod_subcat_id)->get();
     	$subcatImage = product_sub_categories::where('prod_subcat_id',$prod_subcat_id)->get(['prod_sub_category_image_uri','prod_sub_cat_name']);
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
    		return view('walleee/html/products_lin', compact('category','sub_categories','products'))
    				->with('name',$userName)
    				->with('total',$total)
    				->with('subcatImage',$subcatImage)
    				->with('totalAmtPDay',$totalAmtPDay);
    		}
    		else
    		{
				return view('walleee/html/create-account',compact('category','sub_categories','products'))
						//->with('name',$userName)
    					->with('total',$total)
    					->with('subcatImage',$subcatImage)
    					->with('totalAmtPDay',$totalAmtPDay);    	
    		}
    }
}
