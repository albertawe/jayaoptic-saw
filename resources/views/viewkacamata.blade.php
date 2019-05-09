@extends('template/template')
@section('content')
<section class="banner-bottom-wthreelayouts py-lg-5 py-3">
			<div class="container">
				<div class="inner-sec-shop pt-lg-4 pt-3">
					<div class="row">
							<div class="col-lg-4 single-right-left ">
									<div class="grid images_3_of_2">
										<div class="flexslider1">
											<ul class="slides">
												<li data-thumb="/images/{{$ka->image}}">
													<div class="thumb-image"> <img src="/images/{{$ka->image}}" data-imagezoom="true" class="img-fluid" alt=" "> </div>
												</li>
											</ul>
											<div class="clearfix"></div>
										</div>
									</div>
								</div>
								<div class="col-lg-8 single-right-left simpleCart_shelfItem">
									<h3>{{$ka->nama}}</h3>
									<p><span class="item_price">Idr {{$ka->harga}}</span>
									</p>
									<div class="description">
										<h5>{{$ka->description}}}</h5>
									</div>
									<div class="occasional">
										<h5>Warna : {{$ka->warna}}</h5>
                                        <h5>Ketebalan : {{$ka->ketebalan}}</h5>
                                        <h5>ukuran : {{$ka->ukuran}}</h5>
                                        <h5>model : {{$ka->model}}</h5>
										<div class="clearfix"> </div>
									</div>
								</div>
								<div class="clearfix"> </div>
					</div>
				</div>
			</div>
				</div>
		</section>
@endsection
