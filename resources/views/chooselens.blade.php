@extends('template/template')
@section('content')
<section class="banner-bottom-wthreelayouts py-lg-5 py-3">
		<div class="container">
			<h3 class="tittle-w3layouts text-center my-lg-4 my-4">softlen yang paling sesuai dengan anda</h3>
			<div class="inner_sec">
				<p class="sub text-center mb-lg-5 mb-3">Kami memilih untuk anda menggunakan metode saw</p>
				<div class="contact_grid_right">
					<form method="post" action="/gensl" enctype="multipart/form-data" name="genkc">
                    @csrf
						<div class="row contact_left_grid">
							<div class="col-md-6 con-left">
                                <div class="form-group">
									<label class="my-2">warna</label>
									<select name="warna" >
											@foreach($warnas as $warna)
											<option value="{{$warna->sifat}}">{{$warna->name}}</option>
											@endforeach
									</select>
								</div>
                                <div class="form-group">
                                <input type="range" name="bobotwarna" min="0" max="100" value="0" oninput="this.form.Input.value=this.value" />
                                <input type="number" name="Input" min="0" max="100" value="0" oninput="this.form.bobotwarna.value=this.value" />
                                </div>
                                <div class="form-group">
									<label class="my-2">kadar</label>
									<select name="kadar" >
											@foreach($kadars as $kadar)
											<option value="{{$kadar->sifat}}">{{$kadar->name}}</option>
											@endforeach
									</select>
								</div>
                                <div class="form-group">
                                <input type="range" name="bobotkadar" min="0" max="100" value="0" oninput="this.form.kadarInput.value=this.value" />
                                <input type="number" name="kadarInput" min="0" max="100" value="0" oninput="this.form.bobotkadar.value=this.value" />
                                </div>
                                <div class="form-group">
									<label class="my-2">kategori harga</label>
									<select name="harga" >
											@foreach($hargas as $harga)
											<option value="{{$harga->sifat}}">{{$harga->name}}</option>
											@endforeach
									</select>
								</div>
                                <div class="form-group">
                                <input type="range" name="bobotharga" min="0" max="100" value="0" oninput="this.form.hargaInput.value=this.value" />
                                <input type="number" name="hargaInput" min="0" max="100" value="0" oninput="this.form.bobotharga.value=this.value" />
                                 </div>
                                <div class="form-group">
									<label class="my-2">ukuran</label>
									<select name="ukuran" >
											@foreach($sizes as $size)
											<option value="{{$size->sifat}}">{{$size->name}}</option>
											@endforeach
									</select>
								</div>
                                <div class="form-group">
                                <input type="range" name="bobotukuran" min="0" max="100" value="0" oninput="this.form.ukuranInput.value=this.value" />
                                <input type="number" name="ukuranInput" min="0" max="100" value="0" oninput="this.form.bobotukuran.value=this.value" />
                                </div>
                                <div class="form-group">
									<label class="my-2">masa</label>
									<select name="masa" >
											@foreach($masas as $masa)
											<option value="{{$masa->sifat}}">{{$masa->name}}</option>
											@endforeach
									</select>
								</div>
                                <div class="form-group">
                                <input type="range" name="bobotmasa" min="0" max="100" value="0" oninput="this.form.masaInput.value=this.value" />
                                <input type="number" name="masaInput" min="0" max="100" value="0" oninput="this.form.bobotmasa.value=this.value" />
                                </div>
							</div>
								<input type="submit" class="form-control" value="Submit">
						</div>
					</form>
				</div>
			</div>
		</div>
	</section>
    @endsection
