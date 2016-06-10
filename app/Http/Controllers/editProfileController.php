<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use DB;

class editProfilecontroller extends Controller
{
    //
    public function showabout($name)
    {
        //return view ('profile');
        $alldata=DB::table('profile')->where('Profile_name',$name)->first();
        return view('editprofile')->with('data',$alldata);
    }
}