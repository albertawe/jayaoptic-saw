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
        $warnas = warnakc::get();
        $ketebalans = ktblnkc::get();
        $hargas = hargakc::get();
        $ukurans = sizekc::get();
        $models = modelkc::get();
        return view('addbobotkacamata',compact('warnas','ketebalans','hargas','ukurans','models'));
    }

    public function warna(Request $request){
        $kacamata = new warnakc;
        $kacamata->name = $request->name;
        $kacamata->bobot = $request->bobot;
        $kacamata->sifat = $request->sifat;
        $kacamata->save();
        return redirect()->back();
    }

    public function deletewarna($id)
    {
        $kacamata = warnakc::findOrFail($id);

        $kacamata->delete();

        return redirect()->back();
    }

    public function indexwarna($id)
    {
        $kacamata = warnakc::where('id',$id)->first();
        return view('editwarna',compact('kacamata'));
    }

    public function editwarna(Request $request, $id){
        $kacamata = warnakc::where('id',$id)->first();
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

    public function deleteketebalan($id)
    {
        $kacamata = ktblnkc::findOrFail($id);

        $kacamata->delete();

        return redirect()->back();
    }

    public function indexketebalan($id)
    {
        $kacamata = ktblnkc::where('id',$id)->first();
        return view('editketebalan',compact('kacamata'));
    }

    public function editketebalan(Request $request, $id){
        $kacamata = ktblnkc::where('id',$id)->first();
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

    public function deleteharga($id)
    {
        $kacamata = hargakc::findOrFail($id);

        $kacamata->delete();

        return redirect()->back();
    }

    public function indexharga($id)
    {
        $kacamata = hargakc::where('id',$id)->first();
        return view('editharga',compact('kacamata'));
    }

    public function editharga(Request $request, $id){
        $kacamata = hargakc::where('id',$id)->first();
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

    public function deleteukuran($id)
    {
        $kacamata = sizekc::findOrFail($id);

        $kacamata->delete();

        return redirect()->back();
    }

    public function indexukuran($id)
    {
        $kacamata = sizekc::where('id',$id)->first();
        return view('editukuran',compact('kacamata'));
    }

    public function editukuran(Request $request, $id){
        $kacamata = sizekc::where('id',$id)->first();
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

    public function deletemodel($id)
    {
        $kacamata = modelkc::findOrFail($id);

        $kacamata->delete();

        return redirect()->back();
    }

    public function indexmodel($id)
    {
        $kacamata = modelkc::where('id',$id)->first();
        return view('editmodel',compact('kacamata'));
    }

    public function editmodel(Request $request, $id){
        $kacamata = modelkc::where('id',$id)->first();
        $kacamata->name = $request->name;
        $kacamata->bobot = $request->bobot;
        $kacamata->sifat = $request->sifat;
        $kacamata->save();
        return redirect()->back();
    }

}
