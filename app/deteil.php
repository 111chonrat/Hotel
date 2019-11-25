<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use DB;

class deteil extends Model
{
    public static function show(){
        return DB::table("deeil")
        ->get();

    }
}
