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
				</div>
			</div>
		</div>
	</section>
    @endsection
