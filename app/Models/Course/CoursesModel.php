<?php

namespace App\Models\Course;

use Illuminate\Database\Eloquent\Model;
use DB;
use Log;
session_write_close();
error_reporting(E_ALL & ~E_NOTICE & ~E_WARNING);
class CoursesModel extends Model
{
    public static function CoursePage(){
        $data=DB::table('special_course')
            ->selectRaw('*')
            ->get();
        return $data;
    }
}
