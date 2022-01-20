<?php

namespace App\Http\Controllers;

use App\Models\CourchModel;
use Illuminate\Http\Request;

class CourchController extends Controller
{
    function CourchIndex(){

        $CourchData=json_decode(CourchModel::all());

        return view('Courch',['CourchData'=>$CourchData]);
    }
}
