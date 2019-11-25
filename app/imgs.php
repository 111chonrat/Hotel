<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use DB;


class imgs extends Model
{
    protected $table ='imgs';
    public static function show(){
        return DB::table("imgs")
        ->get();

    }
}
