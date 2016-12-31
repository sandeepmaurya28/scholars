<?php

namespace App\Http\Controllers\Course;

use App\Models\Course\CoursesModel;
use Illuminate\Http\Request;
use Log;
use App\Http\Requests;
use App\Http\Controllers\Controller;
session_write_close();
error_reporting(E_ALL & ~E_NOTICE & ~E_WARNING);
class CourseController extends Controller
{

    public function GetAllCourse(){
        $data=CoursesModel::CoursePage();

        return view('Course/courses')->with("course",$data);

    }
}
