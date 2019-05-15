@extends('template/template')
@section('content')
<section class="banner-bottom-wthreelayouts py-lg-5 py-3">
		<div class="container">
        <h3 class="tittle-w3layouts text-center my-lg-4 my-4" style="color:gray;margin-bottom:20px;"><strong>SOFTLEN</strong> </h3>
		<div class="inner_sec">
				<h4 style="color:gray;" class="sub text-center mb-lg-5 mb-3">Masukkan informasi softlen baru</h4>
				<div class="contact_grid_right">
					<form method="post" action="/addsl" enctype="multipart/form-data">
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
									<h4 style="color:gray;" class="my-2">kadar</h4>
									<select name="kadar" >
											@foreach($kadars as $kadar)
											<option value="{{$kadar->name}}">{{$kadar->name}}</option>
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
									<h4 style="color:gray;" class="my-2">masa</h4>
									<select name="masa" >
											@foreach($masas as $masa)
											<option value="{{$masa->name}}">{{$masa->name}}</option>
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
                        <th>masa pakai</th>
                        <th>harga</th>
                        <th>kriharga</th>
                        <th>ukuran</th>
                        <th>kadar air</th>
                        <th>description</th>
                        <th>image</th>
                        <th>action</th>
                        </tr>
                        @foreach($softlens as $softlen)
                            <tr>
                                <td>{{$softlen->nama}}</td>
                                <td>{{$softlen->warna}}</td>
                                <td>{{$softlen->masapakai}}</td>
                                <td>{{$softlen->harga}}</td>
                                <td>{{$softlen->kriharga}}</td>
                                <td>{{$softlen->ukuran}}</td>
                                <td>{{$softlen->kadarair}}</td>
                                <td>{{$softlen->description}}</td>
                                <td><img src="/images/{{$softlen->image}}" class="img-fluid" alt=""></td>
                                <td><a href="/editsoftlen/{{$softlen->id}}">edit</a>
                                <form method="POST" action="/deletesoftlen/{{$softlen->id}}">
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
