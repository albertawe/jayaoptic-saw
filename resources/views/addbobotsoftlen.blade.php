@extends('template/template')
@section('content')
<section class="banner-bottom-wthreelayouts py-lg-5 py-3">
		<div class="container">
        <h3 class="tittle-w3layouts text-center my-lg-4 my-4" style="color:gray;margin-bottom:20px;"><strong>SOFTLEN</strong> </h3>

			<div class="inner_sec">
				<h4 style="color:gray;" class="sub text-center mb-lg-5 mb-3">Masukkan bobot kriteria softlen</h4>
				<div class="contact_grid_right">
					<form method="post" action="/warnasl" enctype="multipart/form-data">
                    @csrf
						<div class="row contact_left_grid">
							<div class="col-md-6 con-left">
                                <h3 style="color:gray;">warna</h3>
								<div class="form-group">
									<h4 style="color:gray;" >nama warna</h4>
									<input class="form-control" type="text" name="name" placeholder="" required="">
								</div>
                                <div class="form-group">
									<h4 style="color:gray;" >bobot</h4>
									<input class="form-control" type="number" name="bobot" placeholder="" required="">
								</div>
                                <div class="form-group">
									<h4 style="color:gray;" >sifat</h4>
									<select name="sifat" >
											<option value="pos">positif</option>
                                            <option value="neg">negatif</option>
									</select>
								</div>
								<input type="submit" class="form-control" value="Submit">
							</div>
						</div>
					</form>
                    <table style="margin-top:15px;margin-bottom:15px;">
                    <tr>
                    <th>nama</th>
                    <th>bobot nilai</th>
                    <th>sifat</th>
                    <th>action</th>
                    </tr>
                    @foreach($warnas as $warna)
                        <tr>
                            <td>{{$warna->name}}</td>
                            <td>{{$warna->bobot}}</td>
                            <td>{{$warna->sifat}}</td>
                            <td><a href="/editwarnasl/{{$warna->id}}">edit</a>
                            <form method="POST" action="/deletewarnasl/{{$warna->id}}">
                                {{ csrf_field() }}
                                {{ method_field('DELETE') }}
                                <button type="submit">Delete</button>
                            </form>
                            </td>
                        </tr>
                    @endforeach
                    </table style="margin-top:15px;margin-bottom:15px;">
				</div>
                <div class="contact_grid_right">
					<form method="post" action="/kadar" enctype="multipart/form-data">
                    @csrf
						<div class="row contact_left_grid">
							<div class="col-md-6 con-left">
                                <h3 style="color:gray;">kadar</h3>
								<div class="form-group">
									<h4 style="color:gray;" >nama kadar</h4>
									<input class="form-control" type="text" name="name" placeholder="" required="">
								</div>
                                <div class="form-group">
									<h4 style="color:gray;" >bobot</h4>
									<input class="form-control" type="number" name="bobot" placeholder="" required="">
								</div>
                                <div class="form-group">
									<h4 style="color:gray;" >sifat</h4>
									<select name="sifat" >
											<option value="pos">positif</option>
                                            <option value="neg">negatif</option>
									</select>
								</div>
								<input type="submit" class="form-control" value="Submit">
							</div>
						</div>
					</form>
                    <table style="margin-top:15px;margin-bottom:15px;">
                    <tr>
                    <th>nama</th>
                    <th>bobot nilai</th>
                    <th>sifat</th>
                    <th>action</th>
                    </tr>
                    @foreach($kadars as $kadar)
                        <tr>
                            <td>{{$kadar->name}}</td>
                            <td>{{$kadar->bobot}}</td>
                            <td>{{$kadar->sifat}}</td>
                            <td><a href="/editkadar/{{$kadar->id}}">edit</a>
                            <form method="POST" action="/deletekadar/{{$kadar->id}}">
                                {{ csrf_field() }}
                                {{ method_field('DELETE') }}
                                <button type="submit">Delete</button>
                            </form>
                             </td>
                        </tr>
                    @endforeach
                    </table style="margin-top:15px;margin-bottom:15px;">
				</div>
                <div class="contact_grid_right">
					<form method="post" action="/hargasl" enctype="multipart/form-data">
                    @csrf
						<div class="row contact_left_grid">
							<div class="col-md-6 con-left">
                                <h3 style="color:gray;">harga</h3>
								<div class="form-group">
									<h4 style="color:gray;" >nama harga</h4>
									<input class="form-control" type="text" name="name" placeholder="" required="">
								</div>
                                <div class="form-group">
									<h4 style="color:gray;" >bobot</h4>
									<input class="form-control" type="number" name="bobot" placeholder="" required="">
								</div>
                                <div class="form-group">
									<h4 style="color:gray;" >sifat</h4>
									<select name="sifat" >
											<option value="pos">positif</option>
                                            <option value="neg">negatif</option>
									</select>
								</div>
								<input type="submit" class="form-control" value="Submit">
							</div>
						</div>
					</form>
                    <table style="margin-top:15px;margin-bottom:15px;">
                    <tr>
                    <th>nama</th>
                    <th>bobot nilai</th>
                    <th>sifat</th>
                    <th>action</th>
                    </tr>
                    @foreach($hargas as $harga)
                        <tr>
                            <td>{{$harga->name}}</td>
                            <td>{{$harga->bobot}}</td>
                            <td>{{$harga->sifat}}</td>
                            <td><a href="/edithargasl/{{$harga->id}}">edit</a>
                            <form method="POST" action="/deletehargasl/{{$harga->id}}">
                                {{ csrf_field() }}
                                {{ method_field('DELETE') }}
                                <button type="submit">Delete</button>
                            </form>
                             </td>
                        </tr>
                    @endforeach
                    </table style="margin-top:15px;margin-bottom:15px;">
				</div>
                <div class="contact_grid_right">
					<form method="post" action="/ukuransl" enctype="multipart/form-data">
                    @csrf
						<div class="row contact_left_grid">
							<div class="col-md-6 con-left">
                                <h3 style="color:gray;">ukuran</h3>
								<div class="form-group">
									<h4 style="color:gray;" >nama ukuran</h4>
									<input class="form-control" type="text" name="name" placeholder="" required="">
								</div>
                                <div class="form-group">
									<h4 style="color:gray;" >bobot</h4>
									<input class="form-control" type="number" name="bobot" placeholder="" required="">
								</div>
                                <div class="form-group">
									<h4 style="color:gray;" >sifat</h4>
									<select name="sifat" >
											<option value="pos">positif</option>
                                            <option value="neg">negatif</option>
									</select>
								</div>
								<input type="submit" class="form-control" value="Submit">
							</div>
						</div>
					</form>
                    <table style="margin-top:15px;margin-bottom:15px;">
                    <tr>
                    <th>nama</th>
                    <th>bobot nilai</th>
                    <th>sifat</th>
                    <th>action</th>
                    </tr>
                    @foreach($ukurans as $ukuran)
                        <tr>
                            <td>{{$ukuran->name}}</td>
                            <td>{{$ukuran->bobot}}</td>
                            <td>{{$ukuran->sifat}}</td>
                            <td><a href="/editukuransl/{{$ukuran->id}}">edit</a>
                            <form method="POST" action="/deleteukuransl/{{$ukuran->id}}">
                                {{ csrf_field() }}
                                {{ method_field('DELETE') }}
                                <button type="submit">Delete</button>
                            </form>
                            </td>
                        </tr>
                    @endforeach
                    </table style="margin-top:15px;margin-bottom:15px;">
				</div>
                <div class="contact_grid_right">
					<form method="post" action="/masa" enctype="multipart/form-data">
                    @csrf
						<div class="row contact_left_grid">
							<div class="col-md-6 con-left">
                                <h3 style="color:gray;">masa</h3>
								<div class="form-group">
									<h4 style="color:gray;" >nama masa</h4>
									<input class="form-control" type="text" name="name" placeholder="" required="">
								</div>
                                <div class="form-group">
									<h4 style="color:gray;" >bobot</h4>
									<input class="form-control" type="number" name="bobot" placeholder="" required="">
								</div>
                                <div class="form-group">
									<h4 style="color:gray;" >sifat</h4>
									<select name="sifat" >
											<option value="pos">positif</option>
                                            <option value="neg">negatif</option>
									</select>
								</div>
								<input type="submit" class="form-control" value="Submit">
							</div>
						</div>
					</form>
                    <table style="margin-top:15px;margin-bottom:15px;">
                    <tr>
                    <th>nama</th>
                    <th>bobot nilai</th>
                    <th>sifat</th>
                    <th>action</th>
                    </tr>
                    @foreach($masas as $masa)
                        <tr>
                            <td>{{$masa->name}}</td>
                            <td>{{$masa->bobot}}</td>
                            <td>{{$masa->sifat}}</td>
                            <td><a href="/editmasa/{{$masa->id}}">edit</a>
                            <form method="POST" action="/deletemasa/{{$masa->id}}">
                                {{ csrf_field() }}
                                {{ method_field('DELETE') }}
                                <button type="submit">Delete</button>
                            </form>
                            </td>
                        </tr>
                    @endforeach
                    </table style="margin-top:15px;margin-bottom:15px;">
				</div>
			</div>
		</div>
	</section>
    @endsection
