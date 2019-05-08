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
        return view('addkacamata',compact('warnas','ketebalans','hargas','sizes','models'));
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
        $bobotwarna = $request->bobotwarna/10;
        $bobotketebalan = $request->bobotketebalan/10;
        $bobotharga = $request->bobotharga/10;
        $bobotukuran = $request->bobotukuran/10;
        $bobotmodel = $request->bobotmodel/10;
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
           array_multisort($jumlah, SORT_DESC,$nama, $warna_hitung, $ketebalan_hitung, $harga_hitung, $ukuran_hitung, $model_hitung, $jumlah);
           return view('hasilseleksi')->with('nama', $nama)->with('warna', $warna_hitung)->with('ketebalan', $ketebalan_hitung)->with('harga', $harga_hitung)->with('ukuran', $ukuran_hitung)->with('model', $model_hitung)->with('jumlah', $jumlah);
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

    public function uploadpic(Request $request, $id)
    {
        $this->validate($request, [
            'pic' => 'required',
            'pic.*' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048'
        ]);

        $uid = Auth::user()->id;
        $job_post = JobPost::where('id',$id)->first();
        if($request->hasfile('pic'))
        {
           foreach($request->file('pic') as $image)
           {
               $name=$image->getClientOriginalName();
               if(\File::exists(public_path().'/images/'.$name)){
                $name = str_random(5).$job_post->id.".jpg";
               }
               $image->move(public_path().'/images/', $name);
               $data[] = $name;
           }
        }
        if($job_post->images){
        foreach (json_decode($job_post->images) as $img){
        array_push($data,$img);
        }
        $job_post->images = json_encode($data);
        }
        else {
        $job_post->images = json_encode($data);
        }
        $job_post->save();
        return redirect()->back()->with('alert-success','Berhasil upload gambar baru');
    }

    public function updatetask(Request $request, $id)
    {
        $this->validate($request, [
            'title' => 'required|min:5',
            'type' => 'required',
            'category' => 'required',
            'duedate' => 'required|date|after:today',
            'price' => 'required',
            'address' => 'required|min:10',
            'jobdescription' => 'required|min:20',
        ]);

        $uid = Auth::user()->id;
        $job_post = JobPost::where('id',$id)->first();
        $job_post->title = $request->title;
        $job_post->posted_by_id = $uid;
        $job_post->job_type = $request->type;
        $job_post->job_category = $request->category;
        $job_post->due_date = $request->duedate;
        $job_post->price = $request->price;
        $job_post->address = $request->address;
        $job_post->job_description = $request->jobdescription;
            if($request->has('image')){
                $job_post->images = json_encode($request->image);
            }
            else {
                $job_post->images = null;
            }
        $job_post->save();
        return redirect('mytask')->with('alert-success','Berhasil Edit pekerjaan');
    }
}
