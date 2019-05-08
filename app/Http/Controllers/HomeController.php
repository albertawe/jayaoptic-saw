<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\kacamata;
class HomeController extends Controller
{
    public function index()
    {
        $kas = kacamata::get();
        return view('home',compact('kas'));
    }
}
