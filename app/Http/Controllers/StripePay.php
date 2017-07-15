<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \Stripe\Stripe;
class StripePay extends Controller
{
    //Sets the API key 
    private static function setApiKey()
    {
    		$key=env('STRIPE_KEY');
    		\Stripe\Stripe::SetApiKey($key);
    }
    //Creates a customer
    public function createCustomer() 
    {
    //echo "test";
    //\Stripe\Stripe::SetApiKey("sk_test_l4syxXB4eypu47xEA4257JvY");
    
  //\Stripe\Stripe::SetApiKey("sk_test_l4syxXB4eypu47xEA4257Jv");
  		
    	//$key=env('STRIPE_KEY');
	//dd($key);
   		try {
   			StripePay::setApiKey();
   			//\Stripe\Stripe::SetApiKey($key);
  // Use Stripe's library to make requests...
   $t=\Stripe\Customer::create(array(
  "description" => "Customer for maddy",
  	"email" => "madprabh@gmail.com"
  		
  //"source" => "tok_1AUL2eCbd0cZsov2c5ZdNxZn" // obtained with Stripe.js
));
			//$t=\Stripe\Customer::retrieve("cus_AqBDKNEyASkppZ");
			} catch(\Stripe\Error\Card $e) {
  // Since it's a decline, \Stripe\Error\Card will be caught
  					$body = $e->getJsonBody();
  					$err  = $body['error'];

  					print('Status is:' . $e->getHttpStatus() . "\n");
  					print('Type is:' . $err['type'] . "\n");
  					print('Code is:' . $err['code'] . "\n");
  // param is '' in this case
 				    print('Param is:' . $err['param'] . "\n");
  					print('Message is:' . $err['message'] . "\n");
			} catch (\Stripe\Error\RateLimit $e) {
  // Too many requests made to the API too quickly
  				echo "too many requests";
			} catch (\Stripe\Error\InvalidRequest $e) {
  // Invalid parameters were supplied to Stripe's API
  				echo "Invalid request";
			} catch (\Stripe\Error\Authentication $e) {
				echo "Authentication with stripe API failed";
  // Authentication with Stripe's API failed
  // (maybe you changed API keys recently)
			} catch (\Stripe\Error\ApiConnection $e) {
				echo "Network error";
  // Network communication with Stripe failed
			} catch (\Stripe\Error\Base $e) {

				echo "Generic error";	
  // Display a very generic error to the user, and maybe send
  // yourself an email
			} catch (Exception $e) {
  // Something else happened, completely unrelated to Stripe
				echo "Nothing related to Stripe";
			}
    	
    			echo $t;
    	
    }
    public function getCustomer() 
    {
    		try {
   			StripePay::setApiKey();
			$t=\Stripe\Customer::retrieve("cus_AqBDKNEyASkppZ");
			} catch(\Stripe\Error\Card $e) {
  // Since it's a decline, \Stripe\Error\Card will be caught
  					$body = $e->getJsonBody();
  					$err  = $body['error'];

  					print('Status is:' . $e->getHttpStatus() . "\n");
  					print('Type is:' . $err['type'] . "\n");
  					print('Code is:' . $err['code'] . "\n");
  // param is '' in this case
 				    print('Param is:' . $err['param'] . "\n");
  					print('Message is:' . $err['message'] . "\n");
			} catch (\Stripe\Error\RateLimit $e) {
  // Too many requests made to the API too quickly
  				echo "too many requests";
			} catch (\Stripe\Error\InvalidRequest $e) {
  // Invalid parameters were supplied to Stripe's API
  				echo "Invalid request";
			} catch (\Stripe\Error\Authentication $e) {
				echo "Authentication with stripe API failed";
  // Authentication with Stripe's API failed
  // (maybe you changed API keys recently)
			} catch (\Stripe\Error\ApiConnection $e) {
				echo "Network error";
  // Network communication with Stripe failed
			} catch (\Stripe\Error\Base $e) {

				echo "Generic error";	
  // Display a very generic error to the user, and maybe send
  // yourself an email
			} catch (Exception $e) {
  // Something else happened, completely unrelated to Stripe
				echo "Nothing related to Stripe";
			}
    	
    			echo $t;
    	
    }
    public function updateCustomer()
    {
    
    }
    public function addDebitCard() 
    {
    	
    }
    //add bank account details for an existing customer
    public function addBankAccountACH()
    {

		try {
   			StripePay::setApiKey();
    		$t=\Stripe\Token::create(array(
  			"bank_account" => array(
   			"country" => "US",
   			"currency" => "usd",
    		"account_holder_name" => "Addison Martin",
    		"account_holder_type" => "individual",
    		"routing_number" => "110000000",
    		"account_number" => "000123456789"
  )
));
			$token = $t->id;
			$j=\Stripe\Customer::create(array(
  			"description" => "Customer for maddy",
  			"email" => "madprabh@gmail.com",
  			"source" => $token
  		
  //"source" => "tok_1AUL2eCbd0cZsov2c5ZdNxZn" // obtained with Stripe.js
));
		
			} catch(\Stripe\Error\Card $e) {
  // Since it's a decline, \Stripe\Error\Card will be caught
  					$body = $e->getJsonBody();
  					$err  = $body['error'];

  					print('Status is:' . $e->getHttpStatus() . "\n");
  					print('Type is:' . $err['type'] . "\n");
  					print('Code is:' . $err['code'] . "\n");
  // param is '' in this case
 				    print('Param is:' . $err['param'] . "\n");
  					print('Message is:' . $err['message'] . "\n");
			} catch (\Stripe\Error\RateLimit $e) {
  // Too many requests made to the API too quickly
  				echo "too many requests";
			} catch (\Stripe\Error\InvalidRequest $e) {
  // Invalid parameters were supplied to Stripe's API
  				echo "Invalid request";
			} catch (\Stripe\Error\Authentication $e) {
				echo "Authentication with stripe API failed";
  // Authentication with Stripe's API failed
  // (maybe you changed API keys recently)
			} catch (\Stripe\Error\ApiConnection $e) {
				echo "Network error";
  // Network communication with Stripe failed
			} catch (\Stripe\Error\Base $e) {

				echo "Generic error";	
  // Display a very generic error to the user, and maybe send
  // yourself an email
			} catch (Exception $e) {
  // Something else happened, completely unrelated to Stripe
				echo "Nothing related to Stripe";
			}
    	
    			echo $t->id;
    			echo $j;

    }
}
