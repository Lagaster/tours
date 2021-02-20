<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TraveltourController extends Controller
{
    //
    public function adventure(){
        return view('client.travelstyles.adventure');
    }
    public function day(){
        return view('client.travelstyles.day');
    }
    public function family(){
        return view('client.travelstyles.family');
    }
    public function luxury_safari(){
        return view('client.travelstyles.luxury-safari');
    }
    public function cultural_historical(){
        return view('client.travelstyles.cultural-historical');
    }
    public function mice(){
        return view('client.travelstyles.mice');
    }
}
