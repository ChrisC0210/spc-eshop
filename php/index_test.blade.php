@extends('frontend.layouts.app', ['title' => 'SPC eshop'])

@section('content')
<style>
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
    background: rgba(0, 0, 0, 0.5);
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
  top: 20px;
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
</style>
	<!-- slider -->

	<div class="swiper-container">
		<div class="swiper-wrapper" style="position: relative;">
			<div class="swiper-slide">
				<img src="{{ asset('assets/img/spc-slider-1.jpg') }}"/>
				<!-- text -->
				<div class="col-xl-5 col-lg-5 col-sm-8 text-center slide-box">
					<div class="col-12">
						<div class="card-body" style="background-color: rgba(255, 255, 255, 0.6);">
							<h4 class="mt-lg-4 text-m-6-7-6 spc-blue">Discover spring 2021</h4>
							<div class="text-h-2-4-2">Lorem ipsum dolor sit amet</div>
							<div class="mt-lg-4 mb-4 text-h-1-4-1 d-flex justify-content-center">
								<button type="submit" class="col-lg-6 col-sm-12 btn btn-primary btn-block">Shop Now</button>
							</div>
						</div>
						<!-- card-body -->
					</div>
				</div>
				<!-- text -->
			</div>
		</div>
		<div class="swiper-button-next"></div>
		<div class="swiper-button-prev"></div>
		<div class="swiper-pagination"></div>
	</div>
	<!-- slider -->

<!-- test -->
<div class="album py-5">
		<div class="row mt-4 mb-4 text-center  d-flex justify-content-center">
			<h4 class="col-12 text-center mt-4 text-m-2-7-2 spc-blue">PRODUCTS</h4>
			<h4 class="col-12 text-center mb-4 text-h-3-4-3 spc-red">Best Sellers</h4>
		</div>
		<div class="container text-h-1-4-1">
			<div class="row">
			@foreach(\App\Product::all() as $product)
				<a href="#" class="card-box col-6 col-md-4 col-lg-4 col-sm-6">
					<div class="card mb-4 shadow-sm img-hover-zoom">
						<img src="{{ asset($product->image_1) }}" class="bd-placeholder-img card-img-top" alt="..." width="100%"
							height="225">
						<div class="card-body">
							<h5 class="card-title text-h-2-4-2">{{ $product->label_eng }}</h5>
							<p class="card-text">${{ $product->unit_price }}</p>
							<div class="d-flex justify-content-between align-items-center">
								<div class="btn-group">
								</div>
							</div>
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
				<div class="row">
					<a href="#" class="mb-4 card-box col-12 col-lg-6 col-sm-12">
						<div class="img-hover-zoom">
							<img src="{{ asset('assets/img/spc-be-1.png') }}" alt="spc-be-1.png" style="width:100%;">
							<p class="text"> </p>
							<p class="text-1 white text-m-2-4-2">Collection</p>
							<p class="text-2 white text-h-1-4-1">Apparel</p>
							<button class="btn-card btn btn-primary">View</button>
					</div>
					</a>
					<a href="#" class="mb-4 card-box col-6 col-lg-6 col-sm-6">
						<div class="img-hover-zoom">
							<img src="{{ asset('assets/img/spc-be-3.png') }}" alt="spc-be-3.png" style="width:100%;">
							<p class="text"> </p>
							<p class="text-1 white text-m-2-4-2">Collection</p>
							<p class="text-2 white text-h-1-4-1">Accessories</p>
							<button class="btn-card btn btn-primary">View</button>
					</div>
					</a>
					<a href="#" class="mb-4 card-box col-6 col-lg-4 col-sm-6">
						<div class="img-hover-zoom">
							<img src="{{ asset('assets/img/spc-be-2.png') }}" alt="spc-be-2.png" style="width:100%;">
							<p class="text"> </p>
							<p class="text-1 white text-m-2-4-2">Collection</p>
							<p class="text-2 white text-h-1-4-1">Glassware</p>
							<button class="btn-card btn btn-primary">View</button>
					</div>
					</a>
					<a href="#" class="mb-4 card-box col col-lg-4 col-sm-6">
						<div class="img-hover-zoom">
							<img src="{{ asset('assets/img/spc-be-4.png') }}" alt="spc-be-4.png" style="width:100%;">
							<p class="text"> </p>
							<p class="text-1 white text-m-2-4-2">Collection</p>
							<p class="text-2 white text-h-1-4-1">Education</p>
							<button class="btn-card btn btn-primary">View</button>
					</div>
					</a>
					<a href="#" class="mb-4 card-box col col-lg-4 col-sm-6">
						<div class="img-hover-zoom">
							<img src="{{ asset('assets/img/spc-be-5.png') }}" alt="spc-be-5.png" style="width:100%;">
							<p class="text"> </p>
							<p class="text-1 white text-m-2-4-2">Collection</p>
							<p class="text-2 white text-h-1-4-1">Electronics</p>
							<button class="btn-card btn btn-primary">View</button>
					</div>
					</a>
				</div>
			</div>

		</div>
	</div>
</div>
<!-- card -->
<!-- newsletter -->
<section class="container p-4 white text-h-2-4-2 gray-800 news-box" style="background-image:url({{asset('assets/img/spc-banner-1.png')}});">
	<div class="col-lg-8 col-sm-12">
		<h3 class="mb-4 text-m-5-7-5">Sign up our newsletter</h3>
		<div class="mb-4">Sign up for our newsletter to follow our stories, receive product news, offers, updates and special invites.</div>
		<form class="form-inline d-flex justify-content-between" action="">
			<div class="form-group">
				<!-- <label for="exampleFormControlInput1">Email address</label> -->
				<input type="email" class="form-control mr-4 mb-4 news-input" id="exampleFormControlInput1" placeholder="Your email address">
				<button type="submit" class="mb-4 btn btn-white">Sign me Up</button>
			</div>
		</form>
	</div>
</section>
<!-- newsletter -->

@endsection
@push('script')

<script>


</script>
@endpush
