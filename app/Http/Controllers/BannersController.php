<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Banner;
use Session;


class BannersController extends Controller
{
//public function __construct() {
////    parent::__consruct();// in Http/Auth/Controller.php
////    $this->middleware('auth');
////    $user= auth()->user();  //for this controller methods
//}
    
    
    
    
    
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
       
        $countries=\App\Http\Utilities\country::all();
        return view('images.create',['c'=>$countries]);
        
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(\App\Http\Requests\BannerRequest $request)
    {
        
        
//        \App\Banner::create($request->all());
       $banner= new Banner;
       $banner->strite = $request->input(['strite']);
       $banner->user_id = 1;
       $banner->city = $request->input(['city']);
       $banner->country = $request->input(['country']);
       $banner->zip = $request->input(['zip']);
       $banner->state = $request->input(['state']);
       $banner->description = $request->input(['description']);
       $banner->price = $request->input(['price']);
       
       $banner->save();
        \Session::flash('flash_message','خانه شما ثبت شد');
//        flash('message');
        //store to db
        //redirect back
        return back();
       
        
    }

   
   
    public function show($zip ,$strite)
    {
//        $strite= str_replace('-',' ', $strite);
//      return Banner::where(compact('zip','strite'))->first() ; ///****
      $banner= Banner::locatedAt($zip,$strite)->first() ; ///****
      return view('images.show',['banner'=>$banner]);
//      return Banner::where('id',24)->get();  ///****
    }

   
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
    public function destroy($zip,$strite,$id)
    {
        //
    }
    public function addphotos($zip,$strite,Request $request) {
        
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
}
