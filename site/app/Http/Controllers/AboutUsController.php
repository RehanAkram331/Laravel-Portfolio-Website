<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AboutUsController extends Controller
{
    function AboutUsIndex(){
        return view('AboutUs');
    }
}
