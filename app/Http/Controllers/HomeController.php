<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\kacamata;
use App\softlen;

class HomeController extends Controller
{
    public function index()
    {
        $kas = kacamata::get();
        $les = softlen::get();
        return view('home',compact('kas','les'));
    }
}
