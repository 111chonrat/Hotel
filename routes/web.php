<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

//  Route::get('indexhotel', function () {
//     return view('indexhotel');
// });
Route::get('indexhotel','hotelController@index');



// Route::get('/indexhotel', function () {
//     return view('indexhotel');
// });

//  Route::get('/detel', function () {
//    return view('detel');
// });

Route::get('/addmin', function () {
    return view('addmins');
});
Route::get('/','hotelController@index');
Route::get('logout','hotelController@index');

Route::get('/tes1', function () {
    return view('tes1');
});

Route::post('/createhotel','hotelController@createHotel');
Route::post('/addimghoteldata','hotelController@addimghoteldata');
Route::post('/readmore','deteilController@index');

Route::get('add-img','hotelController@addimage');


// Route::get('/admin-indexhotel', function () {
//     return view('admin-indexhotel');
// });

