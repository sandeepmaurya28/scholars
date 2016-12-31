<?php

namespace App\Models\Service;

use Illuminate\Database\Eloquent\Model;
use DB;
use Log;
class ServicesModel extends Model
{
    public static function ServicesPage(){
        try{
            $data=DB::table('services')
                ->selectRaw('*')
                ->get();
            return $data;
        }catch (\Exception $e){
            Log::error("Error in Services Model".$e->getMessage());
            echo "Error in Services Model";
            exit;
        }
    }
}
