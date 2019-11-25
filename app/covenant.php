<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use DB;

class covenant extends Model
{
    public static function show(){
        return DB::table("covenant")
        ->get();

    }
}
