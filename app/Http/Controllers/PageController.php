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
}
