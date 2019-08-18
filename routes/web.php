<?php

Auth::routes();//authentication


//Route::get('/', function () {//if you use the parrent::in construct use must be use as controller to all routes
//    return view('pages.home');
//});
Route::get('/','PagesController@home');


 
Route::resource('banners',  'BannersController');//resource hamishe aval bashe braye in ke ghati nakone
Route::get('{zip}/{strite}','BannersController@show');

//Route::post('{zip}/{strite}/photos','BannersController@addPhotos')->name('addPhotos');
Route::post('{zip}/{strite}/photos','PhotosController@store')->name('store');
Route::delete('photo/{id}','PhotosController@destroy')->name('delete');
Auth::routes();





