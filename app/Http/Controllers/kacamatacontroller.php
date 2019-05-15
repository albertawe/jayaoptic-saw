<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Kacamata;
use App\warnakc;
use App\ktblnkc;
use App\hargakc;
use App\sizekc;
use App\modelkc;

class kacamatacontroller extends Controller
{
    public function index()
    {
        $warnas = warnakc::get();
        $ketebalans = ktblnkc::get();
        $hargas = hargakc::get();
        $sizes = sizekc::get();
        $models = modelkc::get();
        $kacamatas = kacamata::get();
        return view('addkacamata',compact('warnas','ketebalans','hargas','sizes','models','kacamatas'));
    }

    public function delete($id)
    {
        $kacamata = kacamata::findOrFail($id);

        $kacamata->delete();

        return redirect()->back();
    }

    public function viewkacamata($id)
    {
        $ka = kacamata::where('id',$id)->first();
        return view('viewkacamata',compact('ka'));
    }

    public function indexgen()
    {
        $warnas = warnakc::get();
        $ketebalans = ktblnkc::get();
        $hargas = hargakc::get();
        $sizes = sizekc::get();
        $models = modelkc::get();
        return view('choosespec',compact('warnas','ketebalans','hargas','sizes','models'));
    }

    public function gen(Request $request)
    {
        $kacamatas = kacamata::all();
        $bobotwarna = $request->bobotwarna/100;
        $bobotketebalan = $request->bobotketebalan/100;
        $bobotharga = $request->bobotharga/100;
        $bobotukuran = $request->bobotukuran/100;
        $bobotmodel = $request->bobotmodel/100;
        $warnaP=array();
        $ketebalanP=array();
        $hargaP=array();
        $ukuranP=array();
        $modelP=array();

        foreach ($kacamatas as $kacamata) {
          $warna = warnakc::where('name',$kacamata->warna)->first();
          $ketebalan = ktblnkc::where('name',$kacamata->ketebalan)->first();
          $harga = hargakc::where('name',$kacamata->kriharga)->first();
          $ukuran = sizekc::where('name',$kacamata->ukuran)->first();
          $model = modelkc::where('name',$kacamata->model)->first();
          array_push($warnaP,$warna->bobot);
          array_push($ketebalanP,$ketebalan->bobot);
          array_push($hargaP,$harga->bobot);
          array_push($ukuranP,$ukuran->bobot);
          array_push($modelP,$model->bobot);
        }
        $i=0;
          foreach ($kacamatas as $kacamata) {
            $nama[$i] = $kacamata->nama;
            $id[$i] = $kacamata->id;
            $warna = warnakc::where('name',$kacamata->warna)->first();
            $ketebalan = ktblnkc::where('name',$kacamata->ketebalan)->first();
            $harga = hargakc::where('name',$kacamata->kriharga)->first();
            $ukuran = sizekc::where('name',$kacamata->ukuran)->first();
            $model = modelkc::where('name',$kacamata->model)->first();
                if($request->warna = "pos"){
                    $max_warna = max($warnaP);
                    $warna_hitung[$i] = ($warna->bobot / $max_warna) * $bobotwarna;
                }
                else{
                    $min_warna = min($warnaP);
                    $warna_hitung[$i] =($min_warna / $warna->bobot) * $bobotwarna;
                }
                if($request->ketebalan = "pos"){
                    $max_ketebalan = max($ketebalanP);
                    $ketebalan_hitung[$i] = ($ketebalan->bobot / $max_ketebalan) * $bobotketebalan;
                }
                else{
                    $min_ketebalan = min($ketebalanP);
                    $ketebalan_hitung[$i] =($min_ketebalan / $ketebalan->bobot) * $bobotketebalan;
                }
                if($request->ketebalan = "pos"){
                    $max_harga = max($hargaP);
                    $harga_hitung[$i] = ($harga->bobot / $max_harga) * $bobotharga;
                }
                else{
                    $min_harga = min($hargaP);
                    $harga_hitung[$i] =($min_harga / $harga->bobot) * $bobotharga;
                }
                if($request->ukuran = "pos"){
                    $max_ukuran = max($ukuranP);
                    $ukuran_hitung[$i] = ($ukuran->bobot / $max_ukuran) * $bobotketebalan;
                }
                else{
                    $min_ukuran = min($ukuranP);
                    $ukuran_hitung[$i] =($min_ukuran / $ukuran->bobot) * $bobotukuran;
                }
                if($request->model = "pos"){
                    $max_model = max($modelP);
                    $model_hitung[$i] = ($model->bobot / $max_model) * $bobotmodel;
                }
                else{
                    $min_model = min($modelP);
                    $model_hitung[$i] =($min_model / $model->bobot) * $bobotmodel;
                }
              $jumlah[$i] = $warna_hitung[$i] + $ketebalan_hitung[$i] + $harga_hitung[$i] + $ukuran_hitung[$i] + $model_hitung[$i];
              $i+=1;
          }
           array_multisort($jumlah, SORT_DESC,$nama, $id, $warna_hitung, $ketebalan_hitung, $harga_hitung, $ukuran_hitung, $model_hitung, $jumlah);
           return view('hasilseleksi')->with('id', $id)->with('nama', $nama)->with('warna', $warna_hitung)->with('ketebalan', $ketebalan_hitung)->with('harga', $harga_hitung)->with('ukuran', $ukuran_hitung)->with('model', $model_hitung)->with('jumlah', $jumlah);
    }

    public function store(Request $request)
    {
        // $this->validate($request, [
        //     'name' => 'required|min:5',
        //     'warna' => 'required',
        //     'ketebalan' => 'required',
        //     'harga' => 'required|date|after:today',
        //     'ukuran' => 'required',
        //     'model' => 'required|min:10',
        //     'description' => 'required|min:20',
        //     'filename.*' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048'
        // ]);
        $kacamata = new kacamata;
        $kacamata->nama = $request->name;
        $kacamata->warna = $request->warna;
        $kacamata->ketebalan = $request->ketebalan;
        $kacamata->harga = $request->harga;
        $kacamata->kriharga = $request->kriharga;
        $kacamata->ukuran = $request->ukuran;
        $kacamata->model = $request->model;
        $kacamata->description = $request->description;
        if($request->image != null){
            $name=$request->image->getClientOriginalName();
            if(\File::exists(public_path().'/images'.$name)){
                $name = str_random(5).$id.".jpg";
            }
            $request->image->move(public_path().'/images', $name);
            $kacamata->image = $name;
        }
        $kacamata->save();
        return redirect()->back();
    }

    public function indexupdate($id)
    {
        $warnas = warnakc::get();
        $ketebalans = ktblnkc::get();
        $hargas = hargakc::get();
        $sizes = sizekc::get();
        $models = modelkc::get();
        $spec = kacamata::where('id',$id)->first();
        return view('editkacamata',compact('id','spec','warnas','ketebalans','hargas','sizes','models'));
    }

    public function update(Request $request, $id)
    {
        $kacamata = kacamata::where('id',$id)->first();
        $kacamata->nama = $request->name;
        $kacamata->warna = $request->warna;
        $kacamata->ketebalan = $request->ketebalan;
        $kacamata->harga = $request->harga;
        $kacamata->kriharga = $request->kriharga;
        $kacamata->ukuran = $request->ukuran;
        $kacamata->model = $request->model;
        $kacamata->description = $request->description;
        if($request->image != null){
            $name=$request->image->getClientOriginalName();
            if(\File::exists(public_path().'/images'.$name)){
                $name = str_random(5).$id.".jpg";
            }
            $request->image->move(public_path().'/images', $name);
            $kacamata->image = $name;
        }
        $kacamata->save();
        return redirect()->back();
    }
}
