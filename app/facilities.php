<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use DB;

class facilities extends Model
{
    public static function show(){
        return DB::table("facilities")
        ->get();

    }
}

