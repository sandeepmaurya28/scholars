<?php

namespace App\Models\Faculty;

use Illuminate\Database\Eloquent\Model;
use DB;
use Log;
class FacultyModel extends Model
{
    public static function FacultyAll(){
        $data=DB::table('faculty')
            ->selectRaw('*')
            ->get();
        return $data;
    }

}
