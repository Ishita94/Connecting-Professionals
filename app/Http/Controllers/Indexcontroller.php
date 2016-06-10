<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class Indexcontroller extends Controller
{
    //
    public function showabout()
    {
        return view ('index');
    }
}