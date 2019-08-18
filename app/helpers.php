<?php

//no public jast function
function flash($message){
//    \Session::flash('flash_message',$message);//tmp
    session()->flash('flash_message',$message);
//    $flash = app('App\Http\Flash');//bind in eloquent
//    return $flash->info($message);


}

