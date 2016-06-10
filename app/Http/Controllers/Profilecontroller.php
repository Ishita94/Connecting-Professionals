<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use DB;

class Profilecontroller extends Controller
{
    //
    public function showabout($name)
    {
        //return view ('profile');
        $x=null;
        $alldata=DB::table('profile')->where('Profile_name',$name)->first();
        return view('profile')->with('data',$alldata)->with('fri',$x);
    }
    public function gotopo($name)
    {
    
    }
    public function showmine($name)
    {
        $alldata=DB::table('profile')->where('Profile_name',$name)->first();
    return view('otherprofile')->with('data',$alldata);
    }
}