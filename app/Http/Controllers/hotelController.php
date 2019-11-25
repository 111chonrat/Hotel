<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\hotels as hotels;
use App\imgs as imgs;


class hotelController extends Controller
{


    public function  index()
    {
        $hotels = hotels::get();
        $hoteldata = array();
        $hoteldata["name"]=array();
        $hoteldata["img"]=array();
         foreach($hotels as $data){
            array_push(  $hoteldata["name"],$data->hotel_name);
            $img= imgs::where('hotel_id',$data->hotel_id)->first();
            array_push($hoteldata["img"],$img["img_name"]);
         }



       //dd($hoteldata);
        return view('indexhotel', ['Rawdata' =>  $hoteldata]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function createHotel(Request $request)
    {  $insert = array();
       $insert["hotel_name"] = $request->input("name");
       $insert["detel"] = $request->input("detail");
       $insert["address"] = $request->input("address");
       $insert["email"] = $request->input("email");
       $insert["tel"] = $request->input("tel");
        hotels::insert($insert);
        return view('addmins');

    }

    public function addimage(){
        $Rawdata = hotels::get();
        $namehotel = array();
        foreach($Rawdata as $data){
         array_push($namehotel,$data->hotel_name);
        }
        //dd($namehotel);
        return view('add-img', ['Rawdata' => $Rawdata] );
    }
    public function addimghoteldata(Request $request){
        try{
      //Save upload image to 'avatar' folder which in 'storage/app/public' folder
      $hotel_id = $request->input('idhotel');
      $path = $request->file('image')->store('avatar','public');

    //echo $path;
    //Save $path to database or anything else
    //...
    $insert = array();
    $insert["img_name"]=$path;
    $insert["hotel_id"]=$hotel_id;
    //dd($insert);
    imgs::insert($insert);
    $Rawdata = hotels::get();
    $namehotel = array();
    foreach($Rawdata as $data){
     array_push($namehotel,$data->hotel_name);
    }
    return view('add-img', ['Rawdata' => $Rawdata] );
 }
    catch (Exception $e) {

        $Rawdata = hotels::get();
    $namehotel = array();
    foreach($Rawdata as $data){
     array_push($namehotel,$data->hotel_name);
    }
    return view('add-img', ['Rawdata' => $Rawdata] );
    }
    //dd($namehotel);

    }
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
