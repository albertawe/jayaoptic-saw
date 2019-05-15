@extends('template/template')
@section('content')
<section class="banner-bottom-wthreelayouts py-lg-5 py-3">
		<div class="container">
        <h3 class="tittle-w3layouts text-center my-lg-4 my-4" style="color:gray;margin-bottom:20px;"><strong>KACAMATA</strong> </h3>
			<div class="inner_sec">
				<h4 style="color:gray;" class="sub text-center mb-lg-5 mb-3">Masukkan informasi kacamata baru</h4>
				<div class="contact_grid_right">
					<form method="post" action="/addk" enctype="multipart/form-data">
                    @csrf
						<div class="row contact_left_grid">
							<div class="col-md-6 con-left">
								<div class="form-group">
									<h4 style="color:gray;" class="my-2">Name</h4>
									<input class="form-control" type="text" name="name" placeholder="" required="">
								</div>
                                <div class="form-group">
									<h4 style="color:gray;" class="my-2">warna</h4>
									<select name="warna" >
											@foreach($warnas as $warna)
											<option value="{{$warna->name}}">{{$warna->name}}</option>
											@endforeach
									</select>
								</div>
                                <div class="form-group">
									<h4 style="color:gray;" class="my-2">ketebalan</h4>
									<select name="ketebalan" >
											@foreach($ketebalans as $ketebalan)
											<option value="{{$ketebalan->name}}">{{$ketebalan->name}}</option>
											@endforeach
									</select>
								</div>
                                <div class="form-group">
									<h4 style="color:gray;" class="my-2">harga</h4>
									<input class="form-control" type="number" name="harga" placeholder="" required="">
								</div>
                                <div class="form-group">
									<h4 style="color:gray;" class="my-2">kategori harga</h4>
									<select name="kriharga" >
											@foreach($hargas as $harga)
											<option value="{{$harga->name}}">{{$harga->name}}</option>
											@endforeach
									</select>
								</div>
                                <div class="form-group">
									<h4 style="color:gray;" class="my-2">ukuran</h4>
									<select name="ukuran" >
											@foreach($sizes as $size)
											<option value="{{$size->name}}">{{$size->name}}</option>
											@endforeach
									</select>
								</div>
                                <div class="form-group">
									<h4 style="color:gray;" class="my-2">model</h4>
									<select name="model" >
											@foreach($models as $model)
											<option value="{{$model->name}}">{{$model->name}}</option>
											@endforeach
									</select>
								</div>
                                <div class="form-group">
                                    <h4 style="color:gray;" class="my-2">upload image</h4>
									<input type="file" name="image" class="form-control">
								</div>
							</div>
							<div class="col-md-6 con-right">
								<div class="form-group">
									<h4 style="color:gray;">Description</h4><br>
									<textarea id="textarea" name="description" placeholder="" required="" style="width:400px;height:400px"></textarea>
								</div>
								<input type="submit" class="form-control" value="Submit">
							</div>
						</div>
					</form>
				</div>
                <div class="contact_grid_right">
                    <table>
                        <tr>
                        <th>nama</th>
                        <th>warna</th>
                        <th>ketebalan</th>
                        <th>harga</th>
                        <th>kriharga</th>
                        <th>ukuran</th>
                        <th>model</th>
                        <th>description</th>
                        <th>image</th>
                        <th>action</th>
                        </tr>
                        @foreach($kacamatas as $kacamata)
                            <tr>
                                <td>{{$kacamata->nama}}</td>
                                <td>{{$kacamata->warna}}</td>
                                <td>{{$kacamata->ketebalan}}</td>
                                <td>{{$kacamata->harga}}</td>
                                <td>{{$kacamata->kriharga}}</td>
                                <td>{{$kacamata->ukuran}}</td>
                                <td>{{$kacamata->model}}</td>
                                <td>{{$kacamata->description}}</td>
                                <td><img src="/images/{{$kacamata->image}}" class="img-fluid" alt=""></td>
                                <td><a href="/editkacamata/{{$kacamata->id}}">edit</a>
                                <form method="POST" action="/deletekacamata/{{$kacamata->id}}">
                                    {{ csrf_field() }}
                                    {{ method_field('DELETE') }}
                                    <button type="submit">Delete</button>
                                </form>
                                </td>
                            </tr>
                        @endforeach
                        </table>
                </div>
			</div>
		</div>
	</section>
    @endsection
