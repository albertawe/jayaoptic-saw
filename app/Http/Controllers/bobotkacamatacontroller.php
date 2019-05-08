<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\warnakc;
use App\ktblnkc;
use App\hargakc;
use App\sizekc;
use App\modelkc;

class bobotkacamatacontroller extends Controller
{
    public function index()
    {
        return view('addbobotkacamata');
    }

    public function warna(Request $request){
        $kacamata = new warnakc;
        $kacamata->name = $request->name;
        $kacamata->bobot = $request->bobot;
        $kacamata->sifat = $request->sifat;
        $kacamata->save();
        return redirect()->back();
    }

    public function ketebalan(Request $request){
        $kacamata = new ktblnkc;
        $kacamata->name = $request->name;
        $kacamata->bobot = $request->bobot;
        $kacamata->sifat = $request->sifat;
        $kacamata->save();
        return redirect()->back();
    }
    public function harga(Request $request){
        $kacamata = new hargakc;
        $kacamata->name = $request->name;
        $kacamata->bobot = $request->bobot;
        $kacamata->sifat = $request->sifat;
        $kacamata->save();
        return redirect()->back();
    }
    public function ukuran(Request $request){
        $kacamata = new sizekc;
        $kacamata->name = $request->name;
        $kacamata->bobot = $request->bobot;
        $kacamata->sifat = $request->sifat;
        $kacamata->save();
        return redirect()->back();
    }
    public function model(Request $request){
        $kacamata = new modelkc;
        $kacamata->name = $request->name;
        $kacamata->bobot = $request->bobot;
        $kacamata->sifat = $request->sifat;
        $kacamata->save();
        return redirect()->back();
    }
}
