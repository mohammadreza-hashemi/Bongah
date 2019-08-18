<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;
    
//    public function __construct() {
//        view()->share('signedIn', auth()->check());//karbari ke sinding shode//karbar vared sistem shode ya na
//        view()->share('user',auth->user());//karbari ke login shode//for use $user inspect auth::user  in  all views
//    }
}
