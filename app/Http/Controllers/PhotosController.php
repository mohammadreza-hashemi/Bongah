<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Photo;

class PhotosController extends Controller
{
    public function store($zip,$strite,Request $request) {
        
        $this->validate($request,[
           'photo' => 'required|mimes:jpg,jpeg,gif,png', 
        ]);
        
        
        
        $file=$request->file('photo');
        
        $name=time().'_'.$file->getClientOriginalName();//amir.jpj uniqe
        $file->move('imags/photos',$name);
        $banner= Banner::locatedAt($zip,$strite)->first() ;
        
        //gurd
//        if($banner->user_id !== auth()->id())//auth()->id() ===== id karbari ke login ast
//        {
//            if($request->ajax()){
//                return response(['message' => 'nope!'],403);
//            }
//            return 'nope!!!';
//            
//            
//        }
//        
        
        $banner->photos()->create(['path' => "/imags/photos/{$name}"]);
        
        
//        return 'working on it ..';
    }
    public function destroy(){
        $photo= Photo::findOrFail();
        $photo->delete();
        return back();
    }
}
