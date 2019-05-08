@extends('template/template')
@section('content')
<section class="banner-bottom-wthreelayouts py-lg-5 py-3">
		<div class="container">
			<h3 class="tittle-w3layouts text-center my-lg-4 my-4">Kacamata</h3>
			<div class="inner_sec">
				<p class="sub text-center mb-lg-5 mb-3">Masukkan informasi kacamata baru</p>
				<div class="contact_grid_right">
					<form method="post" action="/addk" enctype="multipart/form-data">
                    @csrf
						<div class="row contact_left_grid">
							<div class="col-md-6 con-left">
								<div class="form-group">
									<label class="my-2">Name</label>
									<input class="form-control" type="text" name="name" placeholder="" required="">
								</div>
                                <div class="form-group">
									<label class="my-2">warna</label>
									<select name="warna" >
											@foreach($warnas as $warna)
											<option value="{{$warna->name}}">{{$warna->name}}</option>
											@endforeach
									</select>
								</div>
                                <div class="form-group">
									<label class="my-2">ketebalan</label>
									<select name="ketebalan" >
											@foreach($ketebalans as $ketebalan)
											<option value="{{$ketebalan->name}}">{{$ketebalan->name}}</option>
											@endforeach
									</select>
								</div>
                                <div class="form-group">
									<label class="my-2">harga</label>
									<input class="form-control" type="number" name="harga" placeholder="" required="">
								</div>
                                <div class="form-group">
									<label class="my-2">kategori harga</label>
									<select name="kriharga" >
											@foreach($hargas as $harga)
											<option value="{{$harga->name}}">{{$harga->name}}</option>
											@endforeach
									</select>
								</div>
                                <div class="form-group">
									<label class="my-2">ukuran</label>
									<select name="ukuran" >
											@foreach($sizes as $size)
											<option value="{{$size->name}}">{{$size->name}}</option>
											@endforeach
									</select>
								</div>
                                <div class="form-group">
									<label class="my-2">model</label>
									<select name="model" >
											@foreach($models as $model)
											<option value="{{$model->name}}">{{$model->name}}</option>
											@endforeach
									</select>
								</div>
                                <div class="form-group">
                                    <label class="my-2">upload image</label>
									<input type="file" name="image" class="form-control">
								</div>
							</div>
							<div class="col-md-6 con-right">
								<div class="form-group">
									<label>Description</label><br>
									<textarea id="textarea" name="description" placeholder="" required="" style="width:400px;height:400px"></textarea>
								</div>
								<input type="submit" class="form-control" value="Submit">
							</div>
						</div>
					</form>
				</div>
			</div>
		</div>
	</section>
    @endsection
