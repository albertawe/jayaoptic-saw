<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\softlen;
use App\kdrsl;
use App\hargasl;
use App\mspksl;
use App\sizesl;
use App\warnasl;

class softlenscontroller extends Controller
{
    public function index()
    {
        $warnas = warnasl::get();
        $kadars = kdrsl::get();
        $hargas = hargasl::get();
        $sizes = sizesl::get();
        $masas = mspksl::get();
        $softlens = softlen::get();
        return view('addsoftlens',compact('warnas','kadars','hargas','sizes','masas','softlens'));
    }

    public function viewsoftlen($id)
    {
        $ka = softlen::where('id',$id)->first();
        return view('viewsoftlen',compact('ka'));
    }

    public function delete($id)
    {
        $softlen = softlen::findOrFail($id);

        $softlen->delete();

        return redirect()->back();
    }

    public function indexgen()
    {
        $warnas = warnasl::get();
        $kadars = kdrsl::get();
        $hargas = hargasl::get();
        $sizes = sizesl::get();
        $masas = mspksl::get();
        return view('chooselens',compact('warnas','kadars','hargas','sizes','masas'));
    }

    public function gen(Request $request)
    {
        $softlens = softlen::all();
        $bobotwarna = $request->bobotwarna/100;
        $bobotkadar = $request->bobotkadar/100;
        $bobotharga = $request->bobotharga/100;
        $bobotukuran = $request->bobotukuran/100;
        $bobotmasa = $request->bobotmasa/100;
        $warnaP=array();
        $kadarP=array();
        $hargaP=array();
        $ukuranP=array();
        $masaP=array();

        foreach ($softlens as $softlen) {
          $warna = warnasl::where('name',$softlen->warna)->first();
          $kadar = kdrsl::where('name',$softlen->kadarair)->first();
          $harga = hargasl::where('name',$softlen->kriharga)->first();
          $ukuran = sizesl::where('name',$softlen->ukuran)->first();
          $masa = mspksl::where('name',$softlen->masapakai)->first();
          array_push($warnaP,$warna->bobot);
          array_push($kadarP,$kadar->bobot);
          array_push($hargaP,$harga->bobot);
          array_push($ukuranP,$ukuran->bobot);
          array_push($masaP,$masa->bobot);
        }
        $i=0;
          foreach ($softlens as $softlen) {
            $nama[$i] = $softlen->nama;
            $id[$i] = $softlen->id;
            $warna = warnasl::where('name',$softlen->warna)->first();
            $kadar = kdrsl::where('name',$softlen->kadarair)->first();
            $harga = hargasl::where('name',$softlen->kriharga)->first();
            $ukuran = sizesl::where('name',$softlen->ukuran)->first();
            $masa = mspksl::where('name',$softlen->masapakai)->first();
                if($request->warna == "pos"){
                    $max_warna = max($warnaP);
                    $warna_hitung[$i] = ($warna->bobot / $max_warna) * $bobotwarna;
                }
                else{
                    $min_warna = min($warnaP);
                    $warna_hitung[$i] =($min_warna / $warna->bobot) * $bobotwarna;
                }
                if($request->kadar == "pos"){
                    $max_kadar = max($kadarP);
                    $kadar_hitung[$i] = ($kadar->bobot / $max_kadar) * $bobotkadar;
                }
                else{
                    $min_kadar = min($kadarP);
                    $kadar_hitung[$i] =($min_kadar / $kadar->bobot) * $bobotkadar;
                }
                if($request->harga == "pos"){
                    $max_harga = max($hargaP);
                    $harga_hitung[$i] = ($harga->bobot / $max_harga) * $bobotharga;
                }
                else{
                    $min_harga = min($hargaP);
                    $harga_hitung[$i] =($min_harga / $harga->bobot) * $bobotharga;
                }
                if($request->ukuran == "pos"){
                    $max_ukuran = max($ukuranP);
                    $ukuran_hitung[$i] = ($ukuran->bobot / $max_ukuran) * $bobotkadar;
                }
                else{
                    $min_ukuran = min($ukuranP);
                    $ukuran_hitung[$i] =($min_ukuran / $ukuran->bobot) * $bobotukuran;
                }
                if($request->masa == "pos"){
                    $max_masa = max($masaP);
                    $masa_hitung[$i] = ($masa->bobot / $max_masa) * $bobotmasa;
                }
                else{
                    $min_masa = min($masaP);
                    $masa_hitung[$i] =($min_masa / $masa->bobot) * $bobotmasa;
                }
              $jumlah[$i] = $warna_hitung[$i] + $kadar_hitung[$i] + $harga_hitung[$i] + $ukuran_hitung[$i] + $masa_hitung[$i];
              $i+=1;
          }
           array_multisort($jumlah, SORT_DESC,$nama, $id, $warna_hitung, $kadar_hitung, $harga_hitung, $ukuran_hitung, $masa_hitung, $jumlah);
           return view('hasilseleksisoftlen')->with('id', $id)->with('nama', $nama)->with('warna', $warna_hitung)->with('kadar', $kadar_hitung)->with('harga', $harga_hitung)->with('ukuran', $ukuran_hitung)->with('masa', $masa_hitung)->with('jumlah', $jumlah);
    }

    public function store(Request $request)
    {
        // $this->validate($request, [
        //     'name' => 'required|min:5',
        //     'warna' => 'required',
        //     'kadar' => 'required',
        //     'harga' => 'required|date|after:today',
        //     'ukuran' => 'required',
        //     'masa' => 'required|min:10',
        //     'description' => 'required|min:20',
        //     'filename.*' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048'
        // ]);
        $softlen = new softlen;
        $softlen->nama = $request->name;
        $softlen->warna = $request->warna;
        $softlen->kadarair = $request->kadar;
        $softlen->harga = $request->harga;
        $softlen->kriharga = $request->kriharga;
        $softlen->ukuran = $request->ukuran;
        $softlen->masapakai = $request->masa;
        $softlen->description = $request->description;
        if($request->image != null){
            $name=$request->image->getClientOriginalName();
            if(\File::exists(public_path().'/images'.$name)){
                $name = str_random(5).$id.".jpg";
            }
            $request->image->move(public_path().'/images', $name);
            $softlen->image = $name;
        }
        $softlen->save();
        return redirect()->back();
    }

    public function indexupdate($id)
    {
        $warnas = warnasl::get();
        $kadars = kdrsl::get();
        $hargas = hargasl::get();
        $sizes = sizesl::get();
        $masas = mspksl::get();
        $lens = softlen::where('id',$id)->first();
        return view('editsoftlen',compact('id','lens','sizes','masas','hargas','kadars','warnas'));
    }

    public function update(Request $request, $id)
    {
        $softlen = softlen::where('id',$id)->first();
        $softlen->nama = $request->name;
        $softlen->warna = $request->warna;
        $softlen->kadarair = $request->kadar;
        $softlen->harga = $request->harga;
        $softlen->kriharga = $request->kriharga;
        $softlen->ukuran = $request->ukuran;
        $softlen->masapakai = $request->masa;
        $softlen->description = $request->description;
        if($request->image != null){
            $name=$request->image->getClientOriginalName();
            if(\File::exists(public_path().'/images'.$name)){
                $name = str_random(5).$id.".jpg";
            }
            $request->image->move(public_path().'/images', $name);
            $softlen->image = $name;
        }
        $softlen->save();
        return redirect()->back();
    }
}
