<?php

namespace App\Http\Controllers;

use App\Models\ContructUsModel;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    function ContactUsIndex(){

        return view('Contact');
    }
}
