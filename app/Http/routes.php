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
use DB;
use Auth;
Route::group(['middleware' =>['web']],function(){

	Route::get('/', function () {
		//Session::flush();
		Session::flush();
		//$name=null;
	   // return view('index')->with('name',$name);
		return view('index');
	});
	Route::get('/logout', function () {
		Session::flush();
	    return view('index');
	});


	
	

	Route::get('/dologin',function(){
		
		$email=Input::get('email');
		
		$password=md5(Input::get('password'));
		$rows = DB::table('profile')->where('email',$email)->where('password',md5($password))->get();
		if($rows==null)

		{return view('ashollogin');
		}
		else 
		{
				session(['name' => $rows->Profile_name]);
					session(['id' => $rows->Profile_id]);
					return view('ashollogin');

		}
	});
	Route::get('/info',function(){
		$info=Input::get('search');
		//$name =Input::get('search');
		session(['info' => $info]);
	$rows = DB::table('profile')->where('Profile_name', 'like',$info.'%')->where('Profile_name','<>','Ishita')->get();
       //$user = User::where('email', '=', Input::get('email'))->first();
/*if ($rows == null) {
   // user doesn't exist
	return view('index');
}
else{*/
	return view('searchpeople')->with('row',$rows);


		//return view('searchpeople')->with('info',$info);
	});

	Route::get('/jobresult',function(){
		$info=Input::get('search');
		//$name =Input::get('search');
		//session(['info' => $info]);
	$rows = DB::table('jobpost')->where('Emp_type', 'like',$info.'%')->get();
       //$user = User::where('email', '=', Input::get('email'))->first();
/*if ($rows == null) {
   // user doesn't exist
	return view('index');
}
else{*/
	return view('searchjob')->with('row',$rows);


		//return view('searchpeople')->with('info',$info);
	});

	Route::post('/submitinfo',function(){
		$Profile=new App\Profile;
		$Profile->Profile_name=Input::get('name');
		$Profile->Email=Input::get('email');
		$Profile->Password=md5(Input::get('pass'));
		$name1=$Profile->Profile_name;
			//$Profile->Profession=Input::get('profession');
		//$Profile->Phone=Input::get('phone');
		$Profile->save();
		 session(['name' => $name1]);
		//Session::set('name', $name1);

		return view('index');
		//return redirec('/index',['name'=>($Profile->Profile_name)]);
		//return 'hello';


	});

	Route::get('/postjob',function(){
		$name=Input::get('name');
		$emp=Input::get('emp');
		$exp=Input::get('exp');
		$salary=Input::get('salary');
		DB::table('jobpost')->insert(
    ['Recruiter_id' => 1, 'Post_name' =>$name,'Emp_type' =>$emp,'Experience' =>$exp,'Salary' =>$salary ] //change koro
        );

		return view('/index');
		//return redirec('/index',['name'=>($Profile->Profile_name)]);
		//return 'hello';


	});
	Route::get('/searchjob',function(){
		

		return view('jobs');
		//return redirec('/index',['name'=>($Profile->Profile_name)]);
		//return 'hello';


	});
	
	/*Route::post('/signin', [
		'uses' => 'UsersController@postSignIn',
		'as' => 'signin'
	]);|*/
	Route::get('/ashollogin', function () {
		
	    return view('/ashollogin');
	});
	Route::get('/single-post', function () {
		
	    return view('/single-post');
	});

	Route::get('/profile/{name}','Profilecontroller@showmine');
	Route::get('/goto/{name}','Newprofilecontroller@gotopo');
	Route::get('/seereq/{id}','Newprofilecontroller@seereq');
	Route::get('/apply/{rid}/{pid}','Newprofilecontroller@applyjob');

	Route::get('/sendreq/{name}','Newprofilecontroller@sendreq');
	Route::get('/accept/{ids}/{idr}/{sname}','Newprofilecontroller@acceptreq');
	Route::get('/reject/{ids}/{idr} ','Newprofilecontroller@rejectreq');

		
		
       

	Route::get('/editprofile/{name}','editProfileController@showabout');
	Route::get('/getprofile/{name}', 'faulController@show');
	Route::get('/index','Indexcontroller@showabout');
	Route::get('/about','Aboutcontroller@showabout');
	Route::get('/an_blog','Another_blogcontroller@showabout');
	Route::get('/blog','Blogcontroller@showabout');
	Route::get('/contact','Contactcontroller@showabout');
	Route::get('/extra','Extracontroller@showabout');
	Route::get('/jobs','Jobscontroller@showabout');
	Route::get('/login_index','Login_indexcontroller@showabout');
	Route::get('/network','Newprofilecontroller@showfr');
	//Route::get('/profile','Profilecontroller@showabout');
	Route::get('/portfolio','Portfoliocontroller@showabout');
	Route::get('/services','Servicescontroller@showabout');
	Route::get('/signout','Signoutcontroller@showabout');
	
	Route::post('/updateprofile',function(){
		//$Profile=new App\Profile;

		$Name=Input::get('profile_name');
		$Email=Input::get('email');
		$Education=Input::get('education');
		$Interest=Input::get('interest');
		$Experience=Input::get('experience');
		$Languageskills=Input::get('languageskills');
		$Projects=Input::get('projects');
		$Courses=Input::get('courses');
		$Volunteer_exp=Input::get('volunteer_experiences');

		//$name1=$Profile->Profile_name;
		DB::table('profile')
            ->where('Profile_name', $Name)
            ->update(['Email' => $Email, 'Education' => $Education, 'Interest' => $Interest, 'Experience' => $Experience, 'Languageskills' => $Languageskills, 'Projects' => $Projects, 'Courses' => $Courses, 'Volunteer_exp' => $Volunteer_exp]);
		//$Profile->save();
		
		//session(['name' => $name1]);
            $Profile=DB::table('profile')
            ->where('Profile_name', $Name)->first();
		return view('otherprofile')->with('data', $Profile);

	});



});










Route::auth();

Route::get('/home', 'HomeController@index');
