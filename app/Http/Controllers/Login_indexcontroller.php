<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Profile;

class Login_indexcontroller extends Controller
{
    //
    public function showabout()
    {
        return view ('login_index');
    }

    public function dologin()
    {

    }
}