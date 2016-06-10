<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/
use Illuminate\Support\Facades\Input ;

Route::group(['middleware' =>['web']],function(){

	Route::get('/', function () {
	    return view('index');
	});

	Route::post('/submitinfo',function(){
		/*$Profile=new app\Profile;
		$Profile->Profile_name=Input::get('name');
		$Profile->Email=Input::get('email');
		$Profile->Password=bcrypt(Input::get('pass'));
			//$Profile->Profession=Input::get('profession');
		//$Profile->Phone=Input::get('phone');
		$Profile->save();
		return view('/index',['name'=>($Profile->Profile_name)]);*/
		return 'hello';


	});
	Route::post('/signin', [
		'uses' => 'UsersController@postSignIn',
		'as' => 'signin'
	]);
	Route::get('/index','Indexcontroller@showabout');
	Route::get('/about','Aboutcontroller@showabout');
	Route::get('/another_blog','Another_blogcontroller@showabout');
	Route::get('/blog','Blogcontroller@showabout');
	Route::get('/contact','Contactcontroller@showabout');
	Route::get('/extra','Extracontroller@showabout');
	Route::get('/jobs','Jobscontroller@showabout');
	Route::get('/login_index','Login_indexcontroller@showabout');
	Route::get('/network','Networkcontroller@showabout');
	Route::get('/profile','Profilecontroller@showabout');
	Route::get('/portfolio','Portfoliocontroller@showabout');
	Route::get('/services','Servicescontroller@showabout');
	Route::get('/signout','Signoutcontroller@showabout');
	Route::get('/single-post','Single-postcontroller@showabout');

});









