<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use DB;

class hotels extends Model
{
    protected $table ='hotels';
    public static function show(){
        return DB::table("hotels")
        // ->join('imgs','img_name','hotel_id')
        ->join('imgs', 'imgs.hotel_id', '=', 'hotels.hotel_id')
        ->get();

    }
}
