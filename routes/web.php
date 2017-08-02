<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Route::get('/', function () {
//     return view('walleee/HTML/category');
// })->name('home');
Route::get('/','PlatformController@index');

Route::get('/users', 'UsersController@index');
Route::get('/walleee/html/{page}', function($page) {
	
		return view('walleee/HTML/'.$page);
});

Route::get('/category','PlatformController@category');
Route::get('/aboutus','PlatformController@aboutUs');
Route::get('/account','PlatformController@account');
Route::get('/cart','orderController@show');
Route::get('/addtocart','orderController@store');
Route::get('/testemail','orderController@testemail');
Route::post('/addtocartd','orderController@stored');

Route::get('/category/{prod_cat_id}/scategory/{prod_subcat_id}','categoryController@getProducts');
Route::get('/productsd_lin','categoryController@getProductCategoriesforDemo');
Route::get('/ourpillars','PillarsController@getPillars');
Route::get('/ourpillars/start','PillarsController@startPillars');
Route::get('/ourpillars/stop','PillarsController@stopPillars');
Route::get('/joincampaign','PlatformController@joinCampaign');

//Route::get('/walleee/register','RegistrationController@create');
Route::post('/walleee/register','RegistrationController@store');
Route::get('/login','SessionsController@create');
Route::post('/sessions','SessionsController@createSession');
Route::get('/whoami','SessionsController@knowMe');
Route::get('/logout','SessionsController@destroy');



//Route::get('/users/{id}/{flag}', 'UsersController@SavingsInfo');
Route::get('/loggedin','PlatformController@loggedInPage');

Route::get('/users/create','UsersController@create');
Route::get('/admin/eveningSend','EveningEmail@sendEvening');
Route::post('/users/store','UsersController@store');
Route::post('/users/botstore','UsersController@botStore');
Route::get('/users/motionbottohuman','MotionAiBotSendHuman@sendToHumanOnfb');
Route::get('/users/stripepay/setapi','StripePay@createCustomer');
Route::get('/users/stripepay/getcustomer','StripePay@getCustomer');
Route::get('/users/stripepay/createtoken','StripePay@addBankAccountACH');

/*Route::get('/users/{id}', function($id) {
	
	//$info = DB::table('users')->where('id',$id)->get();
	$info = App\Users::where('id','=',$id)->get();
	
	return view('get_info',compact('info'));
	//return $info;
	
});

Route::get('/users', function() {
	
	//$info = DB::table('users')->get(); 
	$info = App\Users::all();
	return view('get_info',compact('info'));
	//return $info;
	
});*/
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
