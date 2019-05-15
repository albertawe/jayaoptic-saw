@extends('template/template')
@section('content')
<section class="banner-bottom-wthreelayouts py-lg-5 py-3">
		<div class="container">
        <h3 class="tittle-w3layouts text-center my-lg-4 my-4" style="color:gray;margin-bottom:20px;"><strong>KACAMATA YANG PALING SESUAI DENGAN ANDA</strong></h3>
			<div class="inner_sec">
				<h4 style="color:gray;" class="sub text-center mb-lg-5 mb-3">Kami memilih untuk anda menggunakan metode saw</h4>
                <h4 style="color:red;" class="sub text-center mb-lg-5 mb-3" style="color:red">Total nilai kepentingan seluruh kriteria harus 100</h4>

					<form method="post" action="/genk" enctype="multipart/form-data" name="genkc">
                    @csrf

                                <div class="form-group">
									<h4 style="color:gray;">Warna</h4>
                                    <br>
									<select name="warna" style="width:150px;font-size:2em;">
											@foreach($warnas as $warna)
											<option value="{{$warna->sifat}}">{{$warna->name}}</option>
											@endforeach
									</select>
								</div>
                                <div class="form-group">
                                <h4 style="color:gray;">nilai kepentingan</h4>
                                <input type="range" style="margin-bottom:25px;" name="bobotwarna" min="1" max="100" value="0" oninput="this.form.Input.value=this.value" />
                                <input type="number" style="width:75px;font-size:2em;" name="Input"  id="value1" min="1" max="100" value="0" oninput="this.form.bobotwarna.value=this.value" />
                                </div>
                                <hr>
                                <div class="form-group">
									<h4 style="color:gray;">Ketebalan</h4>
                                    <br>
									<select name="ketebalan" style="width:150px;font-size:2em;">
											@foreach($ketebalans as $ketebalan)
											<option value="{{$ketebalan->sifat}}">{{$ketebalan->name}}</option>
											@endforeach
									</select>
								</div>
                                <div class="form-group">
                                <h4 style="color:gray;">nilai kepentingan</h4>
                                <input type="range" style="margin-bottom:25px;" name="bobotketebalan" min="1" max="100" value="0" oninput="this.form.ketebalanInput.value=this.value" />
                                <input type="number" style="width:75px;font-size:2em;" name="ketebalanInput"  id="value2" min="1" max="100" value="0" oninput="this.form.bobotketebalan.value=this.value" />
                                </div>
                                <hr>
                                <div class="form-group">
									<h4 style="color:gray;">Kategori harga</h4>
                                    <br>
									<select name="harga" style="width:350px;font-size:2em;">
											@foreach($hargas as $harga)
											<option value="{{$harga->sifat}}">{{$harga->name}}</option>
											@endforeach
									</select>
								</div>
                                <div class="form-group">
                                <h4 style="color:gray;">nilai kepentingan</h4>
                                <input type="range" style="margin-bottom:25px;" name="bobotharga" min="1" max="100" value="0" oninput="this.form.hargaInput.value=this.value" />
                                <input type="number" style="width:75px;font-size:2em;" name="hargaInput"  id="value3" min="1" max="100" value="0" oninput="this.form.bobotharga.value=this.value" />
                                 </div>
                                 <hr>
                                <div class="form-group">
									<h4 style="color:gray;">Ukuran</h4>
                                    <br>
									<select name="ukuran" style="width:150px;font-size:2em;">
											@foreach($sizes as $size)
											<option value="{{$size->sifat}}">{{$size->name}}</option>
											@endforeach
									</select>
								</div>
                                <div class="form-group">
                                <h4 style="color:gray;">nilai kepentingan</h4>
                                <input type="range" style="margin-bottom:25px;" onblur="findTotal() name="bobotukuran" min="1" max="100" value="0" oninput="this.form.ukuranInput.value=this.value" />
                                <input type="number" style="width:75px;font-size:2em;" name="ukuranInput" id="value4" min="1" max="100" value="0" oninput="this.form.bobotukuran.value=this.value" />
                                </div>
                                <hr>
                                <div class="form-group">
									<h4 style="color:gray;">Model</h4>
                                    <br>
									<select name="model" style="width:150px;font-size:2em;">
											@foreach($models as $model)
											<option value="{{$model->sifat}}">{{$model->name}}</option>
											@endforeach
									</select>
								</div>
                                <div class="form-group">
                                <h4 style="color:gray;">nilai kepentingan</h4>
                                <input type="range"  style="margin-bottom:25px;"    onblur="findTotal() name="bobotmodel" min="1" max="100" value="0" oninput="this.form.modelInput.value=this.value" />
                                <input type="number" style="width:75px;font-size:2em;" name="modelInput" id="value5" min="1" max="100" value="0" oninput="this.form.bobotmodel.value=this.value" />
                                </div>
                                <hr>

								<input type="submit" onclick="return calcSum()" class="form-control" value="Submit">

					</form>

			</div>
		</div>
	</section>
    <script>
    function calcSum() {
        let num1 = document.getElementById('value1').value;
        let num2 = document.getElementById('value2').value;
        let num3 = document.getElementById('value3').value;
        let num4 = document.getElementById('value4').value;
        let num5 = document.getElementById('value5').value;
        let sum = Number(num1) + Number(num2) + Number(num3)+ Number(num4)+ Number(num5);
        if (sum != 100){
            alert('total nilai bukan 100');
            return false;
        }
    }
    </script>
    @endsection

