<?php

namespace App\Http\Controllers;
use App\Models\ContructUsModel;
use App\Models\ProjectModel;
use Illuminate\Http\Request;
use App\Models\VisitorModel;
use App\Models\ServicesModel;
use App\Models\CourchModel;



class HomeController extends Controller
{
    function HomeIndex(){
        $UserIP=$_SERVER['REMOTE_ADDR'];
        date_default_timezone_set("Asia/Dhaka");
        $timeDate= date("Y-m-d h:i:sa");
        VisitorModel::insert(['ip_address'=>$UserIP,'visit_time'=>$timeDate]);

        $ServicesData=json_decode(ServicesModel::all());
        $CoursesData=json_decode(CourchModel::orderBy('id','desc')->limit(6)->get());
        $ProjectData=json_decode(ProjectModel::all());


        return view('Home', [
            'ServicesData'=>$ServicesData,
            'CoursesData'=>$CoursesData,
            'ProjectData'=>$ProjectData,
    ]);
    }





    function sendData(Request $request){
        $contruct_name=$request->input('contruct_name');
        $contruct_number=$request->input('contruct_number');
        $contruct_email=$request->input('contruct_email');
        $contruct_massage=$request->input('contruct_massage');


        $result=ContructUsModel::insert([
            'contruct_name'=> $contruct_name,
            'contruct_number'=> $contruct_number,
            'contruct_email'=> $contruct_email,
            'contruct_massage'=> $contruct_massage
        ]);
        if ($result==true){
            return 1;
        }else{
            return 0;
        }

    }
}
