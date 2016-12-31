<?php

namespace App\Http\Controllers;

use App\Models\IndexModel;
use Illuminate\Http\Request;

use App\Http\Requests;
session_write_close();
error_reporting(E_ALL & ~E_NOTICE & ~E_WARNING);
class IndexController extends Controller
{

    public function IndexPage(Request $request){

        $flash=IndexModel::FlashNew();






        $studentBoard=IndexModel::StudentBoard();

        $sliders=IndexModel::slides();
//        $ss=json_decode(json_encode($sliders),true);
//        echo "<pre>";
//        print_r($sliders);
//        exit;
        $gallery=IndexModel::Gallery();
        $d=[$gallery,$flash[0],$studentBoard];

        return view("index")->with("data",$d);
    }

    /**
     * @GET("noti")
     */
    public function noti(Request $request){
        if($request->has("notification")){
            $notification=IndexModel::Notification();
            $noti=array();
            foreach ($notification as $key=>$value){
                $noti[]['achievement']=$value->achievement;
            }
            return json_encode($noti);
        }
        if($request->has("slides")){
            $slide=IndexModel::slides();
//            $slid=array();
//            foreach ($slide as $k=>$v){
//                $slid[$v->sliderid]=$v->image_url;
//            }

            return json_encode($slide);

        }
    }
}
