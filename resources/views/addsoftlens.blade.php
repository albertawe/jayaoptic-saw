@extends('template/template')
@section('content')
<section class="banner-bottom-wthreelayouts py-lg-5 py-3">
		<div class="container">
			<h3 class="tittle-w3layouts text-center my-lg-4 my-4">Kacamata</h3>
			<div class="inner_sec">
				<p class="sub text-center mb-lg-5 mb-3">Masukkan informasi kacamata baru</p>
				<div class="contact_grid_right">
					<form action="#" method="post">
						<div class="row contact_left_grid">
							<div class="col-md-6 con-left">
								<div class="form-group">
									<label class="my-2">Name</label>
									<input class="form-control" type="text" name="Name" placeholder="" required="">
								</div>
                                <div class="form-group">
									<label class="my-2">masapakai</label>
									<input class="form-control" type="text" name="masapakai" placeholder="" required="">
								</div>
                                <div class="form-group">
									<label class="my-2">kadarair</label>
									<input class="form-control" type="text" name="kadarair" placeholder="" required="">
								</div>
                                <div class="form-group">
									<label class="my-2">harga</label>
									<input class="form-control" type="number" name="harga" placeholder="" required="">
								</div>
                                <div class="form-group">
									<label class="my-2">ukuran</label>
									<input class="form-control" type="text" name="ukuran" placeholder="" required="">
								</div>
                                <div class="form-group">
									<label class="my-2">warna</label>
									<input class="form-control" type="text" name="warna" placeholder="" required="">
								</div>
							</div>
							<div class="col-md-6 con-right">
								<div class="form-group">
									<label>Description</label>
									<textarea id="textarea" name="description" placeholder="" required=""></textarea>
								</div>
								<input class="form-control" type="submit" value="Submit">

							</div>
						</div>
					</form>
				</div>
			</div>
		</div>
	</section>
    @endsection
