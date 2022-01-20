<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PrivacyPolicyController extends Controller
{
    function PrivacyPolicyIndex(){

        return view('PrivacyPolicy');
    }
}
