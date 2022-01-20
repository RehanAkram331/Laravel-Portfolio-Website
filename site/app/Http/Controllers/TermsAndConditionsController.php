<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TermsAndConditionsController extends Controller
{
    function TermsAndConditionsIndex(){

        return view('TermsAndConditions');
    }
}
