<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\warnasl;
use App\kdrsl;
use App\hargasl;
use App\sizesl;
use App\mspksl;

class bobotsoftlenscontroller extends Controller
{
    public function index()
    {
        $warnas = warnasl::get();
        $kadars = kdrsl::get();
        $hargas = hargasl::get();
        $ukurans = sizesl::get();
        $masas = mspksl::get();
        return view('addbobotsoftlen',compact('warnas','kadars','hargas','ukurans','masas'));
    }

    public function warna(Request $request){
        $softlen = new warnasl;
        $softlen->name = $request->name;
        $softlen->bobot = $request->bobot;
        $softlen->sifat = $request->sifat;
        $softlen->save();
        return redirect()->back();
    }

    public function deletewarna($id)
    {
        $softlen = warnasl::findOrFail($id);

        $softlen->delete();

        return redirect()->back();
    }

    public function indexwarna($id)
    {
        $softlen = warnasl::where('id',$id)->first();
        return view('editwarnasl',compact('softlen'));
    }

    public function editwarna(Request $request, $id){
        $softlen = warnasl::where('id',$id)->first();
        $softlen->name = $request->name;
        $softlen->bobot = $request->bobot;
        $softlen->sifat = $request->sifat;
        $softlen->save();
        return redirect()->back();
    }

    public function kadar(Request $request){
        $softlen = new kdrsl;
        $softlen->name = $request->name;
        $softlen->bobot = $request->bobot;
        $softlen->sifat = $request->sifat;
        $softlen->save();
        return redirect()->back();
    }

    public function deletekadar($id)
    {
        $softlen = kdrsl::findOrFail($id);

        $softlen->delete();

        return redirect()->back();
    }

    public function indexkadar($id)
    {
        $softlen = kdrsl::where('id',$id)->first();
        return view('editkadar',compact('softlen'));
    }

    public function editkadar(Request $request, $id){
        $softlen = kdrsl::where('id',$id)->first();
        $softlen->name = $request->name;
        $softlen->bobot = $request->bobot;
        $softlen->sifat = $request->sifat;
        $softlen->save();
        return redirect()->back();
    }

    public function harga(Request $request){
        $softlen = new hargasl;
        $softlen->name = $request->name;
        $softlen->bobot = $request->bobot;
        $softlen->sifat = $request->sifat;
        $softlen->save();
        return redirect()->back();
    }

    public function deleteharga($id)
    {
        $softlen = hargasl::findOrFail($id);

        $softlen->delete();

        return redirect()->back();
    }

    public function indexharga($id)
    {
        $softlen = hargasl::where('id',$id)->first();
        return view('edithargasl',compact('softlen'));
    }

    public function editharga(Request $request, $id){
        $softlen = hargasl::where('id',$id)->first();
        $softlen->name = $request->name;
        $softlen->bobot = $request->bobot;
        $softlen->sifat = $request->sifat;
        $softlen->save();
        return redirect()->back();
    }

    public function ukuran(Request $request){
        $softlen = new sizesl;
        $softlen->name = $request->name;
        $softlen->bobot = $request->bobot;
        $softlen->sifat = $request->sifat;
        $softlen->save();
        return redirect()->back();
    }

    public function deleteukuran($id)
    {
        $softlen = sizesl::findOrFail($id);

        $softlen->delete();

        return redirect()->back();
    }

    public function indexukuran($id)
    {
        $softlen = sizesl::where('id',$id)->first();
        return view('editukuransl',compact('softlen'));
    }

    public function editukuran(Request $request, $id){
        $softlen = sizesl::where('id',$id)->first();
        $softlen->name = $request->name;
        $softlen->bobot = $request->bobot;
        $softlen->sifat = $request->sifat;
        $softlen->save();
        return redirect()->back();
    }

    public function masa(Request $request){
        $softlen = new mspksl;
        $softlen->name = $request->name;
        $softlen->bobot = $request->bobot;
        $softlen->sifat = $request->sifat;
        $softlen->save();
        return redirect()->back();
    }

    public function deletemasa($id)
    {
        $softlen = mspksl::findOrFail($id);

        $softlen->delete();

        return redirect()->back();
    }

    public function indexmasa($id)
    {
        $softlen = mspksl::where('id',$id)->first();
        return view('editmasa',compact('softlen'));
    }

    public function editmasa(Request $request, $id){
        $softlen = mspksl::where('id',$id)->first();
        $softlen->name = $request->name;
        $softlen->bobot = $request->bobot;
        $softlen->sifat = $request->sifat;
        $softlen->save();
        return redirect()->back();
    }

}
