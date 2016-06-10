<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
//use App\faulModel;
use DB;
class faulController extends Controller
{
    //
    public function show($name)
	{
		$alldata = DB::table('profile')->where('Profile_name', $name)->first();
		return view('getprofile')->with('data', $alldata);
	}

}
