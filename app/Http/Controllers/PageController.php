<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function index()
    {
        return view('client.index');
    }
    public function maraFlight(){
        return view('client.packages.masai-mara-flight');
    }
    public function pictorials(){
        return view('client.pictorials');
    }
    public function theark(){
        return view('client.pictorios.theark');
    }
    public function maraleisurecamp(){
        return view('client.pictorios.maraleisurecamp');
    }
    public function theaberdareclub(){
        return view('client.pictorios.theaberdarecountryclub');
    }
}
