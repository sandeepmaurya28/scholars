<?php

namespace App\Http\Controllers\Service;

use App\Models\Service\ServicesModel;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Log;
class ServiceController extends Controller
{
    public function GetAllServices(){
        $data=ServicesModel::ServicesPage();
//        echo "<pre>";
//        print_r($data);
//        exit;
        return view('Service/services')->with("service",$data);
    }
}
