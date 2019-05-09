@extends('template/template')
@section('content')
<section class="banner-bottom-wthreelayouts py-lg-5 py-3">
		<div class="container">
			<h3 class="tittle-w3layouts text-center my-lg-4 my-4">softlen</h3>
			<div class="inner_sec">
				<p class="sub text-center mb-lg-5 mb-3">Masukkan informasi kriteria softlen yang benar</p>
				<div class="contact_grid_right">
					<form method="post" action="/editukuransl/{{$softlen->id}}" enctype="multipart/form-data">
                    @csrf
						<div class="row contact_left_grid">
							<div class="col-md-6 con-left">
								<div class="form-group">
									<label class="my-2">Name</label>
									<input class="form-control" value="{{$softlen->name}}" type="text" name="name" placeholder="" required="">
								</div>
                                <div class="form-group">
									<label class="my-2">bobot</label>
									<input class="form-control" value="{{$softlen->bobot}}" type="number" name="bobot" placeholder="" required="">
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
					</form>
				</div>
			</div>
		</div>
	</section>
    @endsection
