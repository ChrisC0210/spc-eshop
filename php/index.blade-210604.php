@extends('frontend.layouts.app', ['title' => 'SPC eshop'])

@section('content')
<style>
		.btn-primary{
		-webkit-appearance: none;
	}
	.swiper-container {
		width: 100%;
		height: 100%;
	}

	.swiper-slide {
		background-position: center;
		background-size: cover;
	}

	.swiper-slide img {
		display: block;
		width: 100%;
	}

	.card-img-top {
		object-fit: contain;
	}
	a:hover{
		text-decoration: none;
	}
	.img-hover-zoom {
		height: auto;
		overflow: hidden;
		position: relative;
		border-radius: 4px;
		max-height: 300px;
		object-fit: cover; 
	}

	.img-hover-zoom img {
		transition: transform .5s ease;

	}

	.img-hover-zoom:hover img {
		transform: scale(1.1);

	}

	.img-hover-zoom .text {
		position: absolute;
		padding-top: 15px;
		padding-bottom: 15px;
		bottom: 0;
		text-align: center;
		background: rgba(0, 0, 0, 0.2);
		color: #fff;
		width: 100%;
		height: 100%;

	}
	.text-1{
		position: absolute;
		bottom: 30px;
		left:8px; 
	}
	.text-2{
		position: absolute;
		bottom: 10px;
		left:8px; 
	}
	.btn-card{
		position: absolute;
		bottom: 10px;
		right:8px; 
	}
	.btn-card-box :hover{
		background: rgba(0, 0, 0, 0.5);
		color: #fff;
		width: 100%;
		height: 100%;
		z-index: 9;
	}
	.btn-card-box button{
		color: rgba(255, 255, 255, 0);
		position: absolute;
		top: 0;
		right: 0;
		bottom: 0;
		left: 0;
		margin: auto;
		z-index: 9;
		height: 40px;
		width: 100%;
			height: 100%;
	}
	.img-hover-zoom img{
		display: table;
	}
	.slide-box{
		position: absolute; 
		top:80px; 
		right: 40px;
	}
	@media screen and (max-width: 600px) {
		.btn-card{
			display: none;
		}
		.slide-box{
			position: absolute; 
			top: 10px;
			right: 0;
			bottom: 0;
			left: 0;
			margin: auto;
		}
		.news-input {
			width: 300px !important;
		}
		.text-m-6-7-6{
			font-size:20px;
		}
	}
	.card-text {
		position: relative;
		top: -18px;
	}
</style>
	<!-- slider -->

	<div class="swiper-container">
		<div class="swiper-wrapper" style="position: relative;">
			@if(isset($index_banners))
				@foreach($index_banners as $index_banner)
				<div class="swiper-slide">
					{{-- <img src="{{ asset('assets/img/spc-slider-1.jpg') }}"/> --}}
					<img src="{{ route('shopping::showBannerImg', ['banner_id'=>$index_banner->banner_id]) }}"/>
					<div class="col-xl-5 col-lg-5 col-sm-8 text-center slide-box">
						<div class="col-12">
							<div class="card-body" style="background-color: rgba(255, 255, 255, 0.6);" data-aos="fade-left" data-aos-duration="1500">
								<h4 class="mt-lg-4 text-m-6-7-6 spc-blue">{{ $index_banner->banner_title }}</h4>
								<div class="text-h-2-4-2">{{ $index_banner->banner_desc }}</div>
								<div class="mt-lg-4 mb-4 text-h-1-4-1 d-flex justify-content-center">
									<a type="button" class="col-lg-12 col-sm-12 btn btn-primary btn-block" href="{{ $index_banner->banner_url }}">
										<svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-cart2" viewBox="0 0 16 16">
											<path d="M0 2.5A.5.5 0 0 1 .5 2H2a.5.5 0 0 1 .485.379L2.89 4H14.5a.5.5 0 0 1 .485.621l-1.5 6A.5.5 0 0 1 13 11H4a.5.5 0 0 1-.485-.379L1.61 3H.5a.5.5 0 0 1-.5-.5zM3.14 5l1.25 5h8.22l1.25-5H3.14zM5 13a1 1 0 1 0 0 2 1 1 0 0 0 0-2zm-2 1a2 2 0 1 1 4 0 2 2 0 0 1-4 0zm9-1a1 1 0 1 0 0 2 1 1 0 0 0 0-2zm-2 1a2 2 0 1 1 4 0 2 2 0 0 1-4 0z"/>
										</svg>
									Shop Now</a>
								</div>
							</div>

						</div>
					</div>
				</div>
				@endforeach
			{{-- @else
				<div class="swiper-slide">
					<img src="{{ asset('assets/img/spc-slider-1.jpg') }}"/>
					<!-- text -->
					<div class="col-xl-5 col-lg-5 col-sm-8 text-center slide-box">
						<div class="col-12">
							<div class="card-body" style="background-color: rgba(255, 255, 255, 0.6);" data-aos="fade-left" data-aos-duration="1500">
								<h4 class="mt-lg-4 text-m-6-7-6 spc-blue">Discover spring 2021</h4>
								<div class="text-h-2-4-2">Lorem ipsum dolor sit ametjdh</div>
								<div class="mt-lg-4 mb-4 text-h-1-4-1 d-flex justify-content-center">
									<a type="button" class="col-lg-12 col-sm-12 btn btn-primary btn-block" href="{!! route('shopping::collectionPage', ['product_cat_id'=> 1]) !!}">
										<svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-cart2" viewBox="0 0 16 16">
											<path d="M0 2.5A.5.5 0 0 1 .5 2H2a.5.5 0 0 1 .485.379L2.89 4H14.5a.5.5 0 0 1 .485.621l-1.5 6A.5.5 0 0 1 13 11H4a.5.5 0 0 1-.485-.379L1.61 3H.5a.5.5 0 0 1-.5-.5zM3.14 5l1.25 5h8.22l1.25-5H3.14zM5 13a1 1 0 1 0 0 2 1 1 0 0 0 0-2zm-2 1a2 2 0 1 1 4 0 2 2 0 0 1-4 0zm9-1a1 1 0 1 0 0 2 1 1 0 0 0 0-2zm-2 1a2 2 0 1 1 4 0 2 2 0 0 1-4 0z"/>
										</svg>
									Shop Now</a>
								</div>
							</div>
							<!-- card-body -->
						</div>
					</div>
					<!-- text -->
				</div> --}}
			@endif
		</div>
		<!-- <div class="swiper-button-next"></div>
		<div class="swiper-button-prev"></div> -->
		<div class="swiper-pagination"></div>
	</div>
	<!-- slider -->

<!-- test -->
<div class="album py-5">
	<div class="row mt-4 mb-4 text-center  d-flex justify-content-center">
			@include('frontend.layouts.pop_msg')
			<h4 class="col-12 text-center mt-4 text-m-2-7-2 spc-blue">PRODUCTS</h4>
			<h4 class="col-12 text-center mb-4 text-h-3-4-3 spc-red">Best Sellers</h4>
		</div>
		<div class="container text-h-1-4-1">
			<div class="row" data-aos="fade-up" data-aos-duration="500">
			@foreach(\App\Product::where('is_show_index',1)->get() as $product)
				<a href="{!! route('shopping::productPage', ['product_cat_id'=>$product->product_cat_id, 'product_id'=>$product->product_id]) !!}" class="card-box-2 col-6 col-md-4 col-lg-4 col-sm-6">
					<div class="card mb-4 shadow-sm img-hover-zoom">
					<div class="btn-card-box">
							<button class="text-h-2-4-2">View</button>
						</div>
						<img src="{{ $product->indexImage() }}" class="bd-placeholder-img card-img-top" alt="..." width="100%" height="225">
						<div class="card-body">
							<h5 class="card-title text-h-2-4-2 d-inline-block text-truncate" style="max-width: 100%;">{{ $product->label_eng }}</h5>
							@if(isset($product->ProductOption[0]))
								<p class="card-text">${{ $product->ProductOption[0]->price }}</p>
								{{-- <p style="color: white;">{{"opt: ".$product->ProductOption}}</p> --}}
							@else
								<p class="card-text">${{ $product->unit_price }}</p>
							@endif

						</div>
					</div>
				</a>
				@endforeach
			</div>
		</div>
	</div>
<!-- test -->



<!-- card -->
<div class="album py-5">
		<div class="row mt-4 mb-4 text-center  d-flex justify-content-center">
			<h4 class="col-12 text-center mt-4 text-m-2-7-2 spc-blue">SHOP</h4>
			<h4 class="col-12 text-center mb-4 text-h-3-4-3 spc-red">Collections</h4>
		</div>
		<div class="container text-h-1-4-1">
			<div class="d-flex justify-content-between"> 
				<div class="row" data-aos="fade-up" data-aos-duration="500">
					{{-- <p>{{ print_r($product_cats) }}</p> --}}
					<a href="{!! route('shopping::collectionPage', ['product_cat_id'=> $product_cat1->product_cat_id]) !!}" class="mb-4 card-box col-12 col-lg-6 col-sm-12">
						<div class="img-hover-zoom">
							<img src="{{ route('shopping::showProductCatImg', ['product_cat_id'=>$product_cat1->product_cat_id]) }}" alt="spc-be-1.png" style="width:100%;">
							<p class="text"> </p>
							<p class="text-1 white text-m-2-4-2">Collection</p>
							<p class="text-2 white text-h-1-4-1">{{ $product_cat1->label_eng }}</p>
							<button class="btn-card btn btn-primary">View</button>
						</div>
					</a>
					<a href="{!! route('shopping::collectionPage', ['product_cat_id'=> $product_cat2->product_cat_id]) !!}" class="mb-4 card-box col-6 col-lg-6 col-sm-6">
						<div class="img-hover-zoom">
							<img src="{{ route('shopping::showProductCatImg', ['product_cat_id'=>$product_cat2->product_cat_id]) }}" alt="spc-be-3.png" style="width:100%;">
							<p class="text"> </p>
							<p class="text-1 white text-m-2-4-2">Collection</p>
							<p class="text-2 white text-h-1-4-1">{{ $product_cat2->label_eng }}</p>
							<button class="btn-card btn btn-primary">View</button>
						</div>
					</a>
					<a href="{!! route('shopping::collectionPage', ['product_cat_id'=> $product_cat3->product_cat_id]) !!}" class="mb-4 card-box col-6 col-lg-4 col-sm-6">
						<div class="img-hover-zoom">
							<img src="{{ route('shopping::showProductCatImg', ['product_cat_id'=>$product_cat3->product_cat_id]) }}" alt="spc-be-2.png" style="width:100%;">
							<p class="text"> </p>
							<p class="text-1 white text-m-2-4-2">Collection</p>
							<p class="text-2 white text-h-1-4-1">{{ $product_cat3->label_eng }}</p>
							<button class="btn-card btn btn-primary">View</button>
						</div>
					</a>
					@foreach( $product_cats as $productCat) 
						<a href="{!! route('shopping::collectionPage', ['product_cat_id'=> $productCat->product_cat_id]) !!}" class="mb-4 card-box col-6 col-lg-4 col-sm-6">
							<div class="img-hover-zoom">
								<img src="{{ route('shopping::showProductCatImg', ['product_cat_id'=>$productCat->product_cat_id]) }}" alt="spc-be-4.png" style="width:100%;">
								<p class="text"> </p>
								<p class="text-1 white text-m-2-4-2">Collection</p>
								<p class="text-2 white text-h-1-4-1">{{ $productCat->label_eng }}</p>
								<button class="btn-card btn btn-primary">View</button>
							</div>
						</a>
					@endforeach

					{{-- <a href="#" class="mb-4 card-box col-6 col-lg-4 col-sm-6">
						<div class="img-hover-zoom">
							<img src="{{ asset('assets/img/spc-be-5.png') }}" alt="spc-be-5.png" style="width:100%;">
							<p class="text"> </p>
							<p class="text-1 white text-m-2-4-2">Collection</p>
							<p class="text-2 white text-h-1-4-1">Electronics</p>
							<button class="btn-card btn btn-primary">View</button>
					</div>
					</a> --}}
				</div>
			</div>

		</div>
	</div>
</div>
<!-- card -->
<!-- newsletter -->

<section class="container p-4 white text-h-2-4-2 gray-800 news-box" style="background-image:url({{asset('assets/img/spc-banner-1.png')}});" data-aos="fade-up" data-aos-duration="500">
	<div class="col-lg-8 col-sm-12">
		<h3 class="mb-4 text-m-5-7-5">Sign up our newsletter</h3>
		<div class="mb-4">Sign up for our newsletter to follow our stories, receive product news, offers, updates and special invites.</div>
		<form class="form-inline d-flex justify-content-between" action="{!! route('shopping::newsletterSignUp') !!}">
			<div class="form-group">
				<!-- <label for="exampleFormControlInput1">Email address</label> -->
				<input type="email" class="form-control mr-4 mb-4 news-input" id="newsletter_email" name="email" placeholder="Your email address">
				<button type="submit" class="mb-4 btn btn-white">
				<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-envelope" viewBox="0 0 16 16">
					<path d="M0 4a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v8a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V4zm2-1a1 1 0 0 0-1 1v.217l7 4.2 7-4.2V4a1 1 0 0 0-1-1H2zm13 2.383-4.758 2.855L15 11.114v-5.73zm-.034 6.878L9.271 8.82 8 9.583 6.728 8.82l-5.694 3.44A1 1 0 0 0 2 13h12a1 1 0 0 0 .966-.739zM1 11.114l4.758-2.876L1 5.383v5.73z"/>
				</svg>	
				Sign me Up</button>
			</div>
		</form>
	</div>
</section>
<!-- newsletter -->
<script src="<?=asset('./dist/js/aos.js')?>"></script>
<script>
		$(document).ready(function(){
			AOS.init();
	});
</script>
@endsection
@push('script')

@endpush
