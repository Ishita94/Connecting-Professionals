<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class Servicescontroller extends Controller
{
    //
    public function showabout()
    {
        return view ('services');
    }
}