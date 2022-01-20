<?php

namespace App\Http\Controllers;

use App\Models\ProjectModel;
use Illuminate\Http\Request;

class ProjectController extends Controller
{
    function ProjectIndex(){

        $ProjectData=json_decode(ProjectModel::all());

        return view('Project',['ProjectData'=>$ProjectData]);
    }
}
