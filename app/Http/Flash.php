<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace App\Http;

/**
 * Description of Flash
 *
 * @author mohammad
 */
class Flash {
    public function info($message){
        session()->flash('flash-message',$message);
    }
}
