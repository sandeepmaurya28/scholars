<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use DB;
use Log;

session_write_close();
error_reporting(E_ALL & ~E_NOTICE & ~E_WARNING);
class IndexModel extends Model
{
    public static function FlashNew(){
        $data=DB::table("flashnews")
            ->selectRaw("flash")
            ->limit(1)
            ->get();
        return $data;
    }

    public static function Notification(){
        $data=DB::table('achievement')
            ->selectRaw("achievement")
            ->get();
        return $data;
    }

    public static function StudentBoard(){

        $data=DB::table('feedback')
            ->selectRaw("Name ,Role,Review,time")
            ->where("permission",'=',1)
            ->orderBy("time",'desc')
            ->get();
        return $data;

    }

    public static function Gallery(){

        $data=DB::table('gallery')
            ->selectRaw("*")
            ->orderBy("seriall","desc")
            ->get();
        return $data;
    }

    public static function slides(){
        $data=DB::table('slider')
            ->selectRaw('*')
            ->get();
        return $data;
    }
}
