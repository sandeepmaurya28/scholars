<?php

namespace App\Http\Controllers\Faculty;

use App\Models\Faculty\FacultyModel;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class FacultyController extends Controller
{
    public function GetAllFaculty(){
        $data=FacultyModel::FacultyAll();
        return view("Faculty/Faculty")->with("faculty",$data);
    }
}
