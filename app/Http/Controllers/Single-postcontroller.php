<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class Single-postcontroller extends Controller
{
    //
    public function showabout()
    {
        return view ('single-post');
    }
}