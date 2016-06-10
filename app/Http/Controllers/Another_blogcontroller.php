<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class Another_blogcontroller extends Controller
{
    //
    public function showabout()
    {
        return view ('another_blog');
    }
}