@extends('template/template')
@section('content')
<section class="banner-bottom-wthreelayouts py-lg-5 py-3">
		<div class="container">
			<h3 class="tittle-w3layouts text-center my-lg-4 my-4">Kacamata</h3>
			<div class="inner_sec">
				<p class="sub text-center mb-lg-5 mb-3">Masukkan bobot kriteria kacamata</p>
				<div class="contact_grid_right">
					<form method="post" action="/warna" enctype="multipart/form-data">
                    @csrf
						<div class="row contact_left_grid">
							<div class="col-md-6 con-left">
                                <h3>warna</h3>
								<div class="form-group">
									<label class="my-2">warna</label>
									<input class="form-control" type="text" name="name" placeholder="" required="">
								</div>
                                <div class="form-group">
									<label class="my-2">bobot</label>
									<input class="form-control" type="number" name="bobot" placeholder="" required="">
								</div>
                                <div class="form-group">
									<label class="my-2">sifat</label>
									<select name="sifat" >
											<option value="pos">positif</option>
                                            <option value="neg">negatif</option>
									</select>
								</div>
								<input type="submit" class="form-control" value="Submit">
							</div>
						</div>
					</form>
                    <table>
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
                            <td><a href="/editwarna/{{$warna->id}}">edit</a>
                            <form method="POST" action="/deletewarna/{{$warna->id}}">
                                {{ csrf_field() }}
                                {{ method_field('DELETE') }}
                                <button type="submit">Delete</button>
                            </form>
                            </td>
                        </tr>
                    @endforeach
                    </table>
				</div>
                <div class="contact_grid_right">
					<form method="post" action="/ketebalan" enctype="multipart/form-data">
                    @csrf
						<div class="row contact_left_grid">
							<div class="col-md-6 con-left">
                                <h3>ketebalan</h3>
								<div class="form-group">
									<label class="my-2">ketebalan</label>
									<input class="form-control" type="text" name="name" placeholder="" required="">
								</div>
                                <div class="form-group">
									<label class="my-2">bobot</label>
									<input class="form-control" type="number" name="bobot" placeholder="" required="">
								</div>
                                <div class="form-group">
									<label class="my-2">sifat</label>
									<select name="sifat" >
											<option value="pos">positif</option>
                                            <option value="neg">negatif</option>
									</select>
								</div>
								<input type="submit" class="form-control" value="Submit">
							</div>
						</div>
					</form>
                    <table>
                    <tr>
                    <th>nama</th>
                    <th>bobot nilai</th>
                    <th>sifat</th>
                    <th>action</th>
                    </tr>
                    @foreach($ketebalans as $ketebalan)
                        <tr>
                            <td>{{$ketebalan->name}}</td>
                            <td>{{$ketebalan->bobot}}</td>
                            <td>{{$ketebalan->sifat}}</td>
                            <td><a href="/editketebalan/{{$ketebalan->id}}">edit</a>
                            <form method="POST" action="/deleteketebalan/{{$ketebalan->id}}">
                                {{ csrf_field() }}
                                {{ method_field('DELETE') }}
                                <button type="submit">Delete</button>
                            </form>
                             </td>
                        </tr>
                    @endforeach
                    </table>
				</div>
                <div class="contact_grid_right">
					<form method="post" action="/harga" enctype="multipart/form-data">
                    @csrf
						<div class="row contact_left_grid">
							<div class="col-md-6 con-left">
                                <h3>harga</h3>
								<div class="form-group">
									<label class="my-2">harga</label>
									<input class="form-control" type="text" name="name" placeholder="" required="">
								</div>
                                <div class="form-group">
									<label class="my-2">bobot</label>
									<input class="form-control" type="number" name="bobot" placeholder="" required="">
								</div>
                                <div class="form-group">
									<label class="my-2">sifat</label>
									<select name="sifat" >
											<option value="pos">positif</option>
                                            <option value="neg">negatif</option>
									</select>
								</div>
								<input type="submit" class="form-control" value="Submit">
							</div>
						</div>
					</form>
                    <table>
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
                            <td><a href="/editharga/{{$harga->id}}">edit</a>
                            <form method="POST" action="/deleteharga/{{$harga->id}}">
                                {{ csrf_field() }}
                                {{ method_field('DELETE') }}
                                <button type="submit">Delete</button>
                            </form>
                             </td>
                        </tr>
                    @endforeach
                    </table>
				</div>
                <div class="contact_grid_right">
					<form method="post" action="/ukuran" enctype="multipart/form-data">
                    @csrf
						<div class="row contact_left_grid">
							<div class="col-md-6 con-left">
                                <h3>ukuran</h3>
								<div class="form-group">
									<label class="my-2">ukuran</label>
									<input class="form-control" type="text" name="name" placeholder="" required="">
								</div>
                                <div class="form-group">
									<label class="my-2">bobot</label>
									<input class="form-control" type="number" name="bobot" placeholder="" required="">
								</div>
                                <div class="form-group">
									<label class="my-2">sifat</label>
									<select name="sifat" >
											<option value="pos">positif</option>
                                            <option value="neg">negatif</option>
									</select>
								</div>
								<input type="submit" class="form-control" value="Submit">
							</div>
						</div>
					</form>
                    <table>
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
                            <td><a href="/editukuran/{{$ukuran->id}}">edit</a>
                            <form method="POST" action="/deleteukuran/{{$ukuran->id}}">
                                {{ csrf_field() }}
                                {{ method_field('DELETE') }}
                                <button type="submit">Delete</button>
                            </form>
                            </td>
                        </tr>
                    @endforeach
                    </table>
				</div>
                <div class="contact_grid_right">
					<form method="post" action="/model" enctype="multipart/form-data">
                    @csrf
						<div class="row contact_left_grid">
							<div class="col-md-6 con-left">
                                <h3>model</h3>
								<div class="form-group">
									<label class="my-2">model</label>
									<input class="form-control" type="text" name="name" placeholder="" required="">
								</div>
                                <div class="form-group">
									<label class="my-2">bobot</label>
									<input class="form-control" type="number" name="bobot" placeholder="" required="">
								</div>
                                <div class="form-group">
									<label class="my-2">sifat</label>
									<select name="sifat" >
											<option value="pos">positif</option>
                                            <option value="neg">negatif</option>
									</select>
								</div>
								<input type="submit" class="form-control" value="Submit">
							</div>
						</div>
					</form>
                    <table>
                    <tr>
                    <th>nama</th>
                    <th>bobot nilai</th>
                    <th>sifat</th>
                    <th>action</th>
                    </tr>
                    @foreach($models as $model)
                        <tr>
                            <td>{{$model->name}}</td>
                            <td>{{$model->bobot}}</td>
                            <td>{{$model->sifat}}</td>
                            <td><a href="/editmodel/{{$model->id}}">edit</a>
                            <form method="POST" action="/deletemodel/{{$model->id}}">
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
