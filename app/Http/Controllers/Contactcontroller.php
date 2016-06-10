<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class Contactcontroller extends Controller
{
    //
    public function showabout()
    {
        return view ('contact');
    }
}