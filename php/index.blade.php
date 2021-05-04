@extends('frontend.layouts.app', ['title' => 'SPC eshop'])

@section('content')
<style>
  . {
      text-align: center;
  }
	.btn-primary{
		-webkit-appearance: none;
	}
  .owl-carousel .owl-item img {
    width: 200px;
		margin: auto;
		display: flex;
		justify-content: center;
		align-items: center; 
}
@media screen and (max-width: 500px) {
	.text-m-7-7-7 {
  font-size: 22px;
  line-height: 41px;
}
}
.social-btns .btn {
		color: #C80C30;
		width: 50px;
	}
.social-btns .btn:focus,.social-btns .btn:hover{
  color: #E8CF66;
  transform: scale(1);
}
</style>
  <!-- slider -->
	<div class="col-xl-12">
		<div class="container" style="background-color: rgb(255, 255, 255); padding:20px;">
			<!-- <div class="col-12 border" style="background-color: rgb(255, 255, 255); padding:20px;"> -->
			<!-- Section -->
			<!-- Swiper -->
			<div class="swiper-container">
				<div class="swiper-wrapper" style="height: 100%;">
					<div class="swiper-slide" style="background-color: rgb(255, 255, 255);">
						<div class="row d-flex justify-content-between">
							<div class="col-xl-5 col-lg-5 col-md-12">
								<div class=" py-lg-0">
									<!-- text -->
									<div class="col-xl-12">
										<div class="col-12">
											<div class="card-body text-lg-left text-sm-center" style="background-color: rgba(255, 255, 255, 0.1);">
												<h4 class="text-m-7-7-7 spc-blue">St. Paul’s College Souvenir</h4>
												<div class="text-h-1-4-1">Lorem ipsum dolor sit amet consectetur adipisicing elit.</div>
												<div class="mt-4 mb-2 text-h-1-4-1">
													<a type="button" class="col-lg-12 col-sm-12 btn btn-primary btn-block" href="{!! route('shopping::collectionPage', ['product_cat_id'=> 1]) !!}">Shop Now</a>
												</div>
											</div>
											<!-- card-body -->
										</div>
									</div>
									<!-- text -->
								</div>
							</div>
							<!-- swi -->
							<div class=" col-xl-7 col-lg-7 col-md-12">
								<div class="col-xl-12">
									<!-- Swiper -->

									<div class=" ">
										<img class="col-12"  src="./assets/img/spc-slide-1-1.png">
									</div>
								</div>
							</div>
							<!-- swi -->
						</div>
					</div>
					<!-- 2 -->
					<div class="swiper-slide" style="background-color: rgb(255, 255, 255);">
						<div class="row d-flex">
							<div class="col-xl-5 col-lg-5 col-md-12">
								<div class=" py-lg-0">
									<!-- text -->
									<div class="col-xl-12">
										<div class="col-12">
											<div class="card-body text-lg-left text-sm-center" style="background-color: rgba(255, 255, 255, 0.1);">
												<h4 class="text-m-7-7-7 spc-blue">St. Paul’s College Souvenir</h4>
												<div class="text-h-1-4-1">Lorem ipsum dolor sit amet consectetur adipisicing elit.</div>
												<div class="mt-4 mb-2 text-h-1-4-1">
													<a type="button" class="col-lg-12 col-sm-12 btn btn-primary btn-block" href="{!! route('shopping::collectionPage', ['product_cat_id'=> 2]) !!}">Shop Now</a>
												</div>
											</div>
											<!-- card-body -->
										</div>
									</div>
									<!-- text -->
								</div>
							</div>
							<!-- swi -->
							<div class=" col-xl-7 col-lg-7 col-md-12">
								<div class="col-xl-12">
									<!-- Swiper -->

									<div class=" ">
										<img class="col-12" src="./assets/img/spc-slide-2-2.png">
									</div>
								</div>
							</div>
							<!-- swi -->
						</div>
					</div>
					<!-- 2 -->
				</div>
			<!-- Add Pagination -->
			<div class="swiper-pagination" style="position: inherit; bottom:0;"></div>
			</div>

			<!-- Add Navigation -->
			<!-- <div class="swiper-button-prev"></div>
			<div class="swiper-button-next"></div> -->
		</div>
	</div>
	<!-- slider -->
		<!-- icon -->
		<div class="d-flex justify-content-center">
		<div class="col-lg-8 col-sm-12">
			<div class="row social-btns">
				<a class="col-3 btn " href="#">
					<svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" fill="currentColor" class="bi bi-lightning" viewBox="0 0 16 16">
						<path d="M5.52.359A.5.5 0 0 1 6 0h4a.5.5 0 0 1 .474.658L8.694 6H12.5a.5.5 0 0 1 .395.807l-7 9a.5.5 0 0 1-.873-.454L6.823 9.5H3.5a.5.5 0 0 1-.48-.641l2.5-8.5zM6.374 1 4.168 8.5H7.5a.5.5 0 0 1 .478.647L6.78 13.04 11.478 7H8a.5.5 0 0 1-.474-.658L9.306 1H6.374z"/>
					</svg>
					<p class="text-center">Fast</p>
				</a>
				<a class="col-3 btn" href="#">
					<svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" fill="currentColor" class="bi bi-megaphone" viewBox="0 0 16 16">
						<path d="M13 2.5a1.5 1.5 0 0 1 3 0v11a1.5 1.5 0 0 1-3 0v-.214c-2.162-1.241-4.49-1.843-6.912-2.083l.405 2.712A1 1 0 0 1 5.51 15.1h-.548a1 1 0 0 1-.916-.599l-1.85-3.49a68.14 68.14 0 0 0-.202-.003A2.014 2.014 0 0 1 0 9V7a2.02 2.02 0 0 1 1.992-2.013 74.663 74.663 0 0 0 2.483-.075c3.043-.154 6.148-.849 8.525-2.199V2.5zm1 0v11a.5.5 0 0 0 1 0v-11a.5.5 0 0 0-1 0zm-1 1.35c-2.344 1.205-5.209 1.842-8 2.033v4.233c.18.01.359.022.537.036 2.568.189 5.093.744 7.463 1.993V3.85zm-9 6.215v-4.13a95.09 95.09 0 0 1-1.992.052A1.02 1.02 0 0 0 1 7v2c0 .55.448 1.002 1.006 1.009A60.49 60.49 0 0 1 4 10.065zm-.657.975 1.609 3.037.01.024h.548l-.002-.014-.443-2.966a68.019 68.019 0 0 0-1.722-.082z"/>
					</svg>
					<p class="text-center">News</p>
				</a>
				<a class="col-3 btn" href="#">
					<svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" fill="currentColor" class="bi bi-truck" viewBox="0 0 16 16">
						<path d="M0 3.5A1.5 1.5 0 0 1 1.5 2h9A1.5 1.5 0 0 1 12 3.5V5h1.02a1.5 1.5 0 0 1 1.17.563l1.481 1.85a1.5 1.5 0 0 1 .329.938V10.5a1.5 1.5 0 0 1-1.5 1.5H14a2 2 0 1 1-4 0H5a2 2 0 1 1-3.998-.085A1.5 1.5 0 0 1 0 10.5v-7zm1.294 7.456A1.999 1.999 0 0 1 4.732 11h5.536a2.01 2.01 0 0 1 .732-.732V3.5a.5.5 0 0 0-.5-.5h-9a.5.5 0 0 0-.5.5v7a.5.5 0 0 0 .294.456zM12 10a2 2 0 0 1 1.732 1h.768a.5.5 0 0 0 .5-.5V8.35a.5.5 0 0 0-.11-.312l-1.48-1.85A.5.5 0 0 0 13.02 6H12v4zm-9 1a1 1 0 1 0 0 2 1 1 0 0 0 0-2zm9 0a1 1 0 1 0 0 2 1 1 0 0 0 0-2z"/>
					</svg>
					<p class="text-center">Free Shipping</p>
				</a>
				<a class="col-3 btn" href="#">
					<svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" fill="currentColor" class="bi bi-trophy" viewBox="0 0 16 16">
						<path d="M2.5.5A.5.5 0 0 1 3 0h10a.5.5 0 0 1 .5.5c0 .538-.012 1.05-.034 1.536a3 3 0 1 1-1.133 5.89c-.79 1.865-1.878 2.777-2.833 3.011v2.173l1.425.356c.194.048.377.135.537.255L13.3 15.1a.5.5 0 0 1-.3.9H3a.5.5 0 0 1-.3-.9l1.838-1.379c.16-.12.343-.207.537-.255L6.5 13.11v-2.173c-.955-.234-2.043-1.146-2.833-3.012a3 3 0 1 1-1.132-5.89A33.076 33.076 0 0 1 2.5.5zm.099 2.54a2 2 0 0 0 .72 3.935c-.333-1.05-.588-2.346-.72-3.935zm10.083 3.935a2 2 0 0 0 .72-3.935c-.133 1.59-.388 2.885-.72 3.935zM3.504 1c.007.517.026 1.006.056 1.469.13 2.028.457 3.546.87 4.667C5.294 9.48 6.484 10 7 10a.5.5 0 0 1 .5.5v2.61a1 1 0 0 1-.757.97l-1.426.356a.5.5 0 0 0-.179.085L4.5 15h7l-.638-.479a.501.501 0 0 0-.18-.085l-1.425-.356a1 1 0 0 1-.757-.97V10.5A.5.5 0 0 1 9 10c.516 0 1.706-.52 2.57-2.864.413-1.12.74-2.64.87-4.667.03-.463.049-.952.056-1.469H3.504z"/>
					</svg>
					<p class="text-center">Best Sellers</p>
				</a>
				<a class="col-3 btn" href="#">
					<svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" fill="currentColor" class="bi bi-gift" viewBox="0 0 16 16">
						<path d="M3 2.5a2.5 2.5 0 0 1 5 0 2.5 2.5 0 0 1 5 0v.006c0 .07 0 .27-.038.494H15a1 1 0 0 1 1 1v2a1 1 0 0 1-1 1v7.5a1.5 1.5 0 0 1-1.5 1.5h-11A1.5 1.5 0 0 1 1 14.5V7a1 1 0 0 1-1-1V4a1 1 0 0 1 1-1h2.038A2.968 2.968 0 0 1 3 2.506V2.5zm1.068.5H7v-.5a1.5 1.5 0 1 0-3 0c0 .085.002.274.045.43a.522.522 0 0 0 .023.07zM9 3h2.932a.56.56 0 0 0 .023-.07c.043-.156.045-.345.045-.43a1.5 1.5 0 0 0-3 0V3zM1 4v2h6V4H1zm8 0v2h6V4H9zm5 3H9v8h4.5a.5.5 0 0 0 .5-.5V7zm-7 8V7H2v7.5a.5.5 0 0 0 .5.5H7z"/>
					</svg>
					<p class="text-center">Gift</p>
				</a>
				<a class="col-3 btn" href="#">
					<svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" fill="currentColor" class="bi bi-sunglasses" viewBox="0 0 16 16">
						<path d="M3 5a2 2 0 0 0-2 2v.5H.5a.5.5 0 0 0 0 1H1V9a2 2 0 0 0 2 2h1a3 3 0 0 0 3-3 1 1 0 1 1 2 0 3 3 0 0 0 3 3h1a2 2 0 0 0 2-2v-.5h.5a.5.5 0 0 0 0-1H15V7a2 2 0 0 0-2-2h-2a2 2 0 0 0-1.888 1.338A1.99 1.99 0 0 0 8 6a1.99 1.99 0 0 0-1.112.338A2 2 0 0 0 5 5H3zm0 1h.941c.264 0 .348.356.112.474l-.457.228a2 2 0 0 0-.894.894l-.228.457C2.356 8.289 2 8.205 2 7.94V7a1 1 0 0 1 1-1z"/>
					</svg>
					<p class="text-center">Sunglasses</p>
				</a>
				<a class="col-3 btn" href="#">
					<svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" fill="currentColor" class="bi bi-watch" viewBox="0 0 16 16">
						<path d="M8.5 5a.5.5 0 0 0-1 0v2.5H6a.5.5 0 0 0 0 1h2a.5.5 0 0 0 .5-.5V5z"/>
						<path d="M5.667 16C4.747 16 4 15.254 4 14.333v-1.86A5.985 5.985 0 0 1 2 8c0-1.777.772-3.374 2-4.472V1.667C4 .747 4.746 0 5.667 0h4.666C11.253 0 12 .746 12 1.667v1.86a5.99 5.99 0 0 1 1.918 3.48.502.502 0 0 1 .582.493v1a.5.5 0 0 1-.582.493A5.99 5.99 0 0 1 12 12.473v1.86c0 .92-.746 1.667-1.667 1.667H5.667zM13 8A5 5 0 1 0 3 8a5 5 0 0 0 10 0z"/>
					</svg>
					<p class="text-center">Heading</p>
				</a>
				<a class="col-3 btn" href="#">
					<svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" fill="currentColor" class="bi bi-search" viewBox="0 0 16 16">
						<path d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0z"/>
					</svg>
					<p class="text-center">Search</p>
				</a>
			</div>
		</div>
	</div>
	<!-- icon -->
<div class="row mt-4 mb-4 text-center text-h-1-4-1 d-flex justify-content-center">
	<h4 class="col-lg-3 col-sm-12 mt-4 mb-4 text-m-6-7-6 white spc-title">BE INSPIRED</h4>
	<p class="col-12" >The Coat of Arms is similar to the Coat of Arms of the Hong Kong Sheng Kung Hui.</p>
</div>
<!-- card -->
<div class="container">
	<!-- cards -->
	<!-- <div class="row align-items-center no-gutters mb-4 mt-4"> -->
	<div class="row no-gutters mb-4 mt-4">
		<div class="col-xl-7 col-lg-6 col-md-12 card-bg">
			<img src="./assets/img/spc-be-1.png" alt="" class="img-fluid">
		</div>
		<div class="mt-2 col-xl-5 col-lg-5 col-md-12">
			<div class="py-5 py-lg-0">
				<div class="mb-2 text-h-1-4-1 spc-blue">New Launch</div>
				<h1 class="mb-2 text-h-3-4-3 font-weight-bold">{{ \App\ProductCat::find(1)->label_eng }}</h1>
				<p class="mb-4 lead text-h-1-4-1">
					{{ \App\ProductCat::find(1)->descrip_eng }}
				</p>
				<a href="{!! route('shopping::collectionPage', ['product_cat_id'=> 1]) !!}" class="col-12 btn btn-primary">View</a>
			</div>
		</div>
	</div>
	<!-- cards -->
	<div class="row no-gutters mb-4 mt-4">
			<div class=" col-xl-7 col-lg-6 col-md-12 card-bg">
				<img src="./assets/img/spc-be-2.png" alt="" class="img-fluid">
			</div>
			<div class="mt-2 col-xl-5 col-lg-5 col-md-12">
				<div class="py-5 py-lg-0">
					<div class="mb-2 text-h-1-4-1 spc-blue">Dining & Bar</div>
					<h1 class="mb-2 text-h-3-4-3 font-weight-bold">{{ \App\ProductCat::find(5)->label_eng }}</h1>
					<p class="mb-4 lead text-h-1-4-1">
						{{ \App\ProductCat::find(5)->descrip_eng }}
					</p>
					<a href="{!! route('shopping::collectionPage', ['product_cat_id'=> 5]) !!}" class="col-12 btn btn-primary">View</a>
				</div>
			</div>
	</div>
	<!-- cards -->
	<div class="row no-gutters mb-4 mt-4">
		<div class=" col-xl-7 col-lg-6 col-md-12 card-bg">
			<img src="./assets/img/spc-be-3.png" alt="" class="img-fluid">
		</div>
		<div class="mt-2 col-xl-5 col-lg-5 col-md-12">
			<div class="py-5 py-lg-0">
				<div class="mb-2 text-h-1-4-1 spc-blue">Limited Edition</div>
				<h1 class="mb-2 text-h-3-4-3 font-weight-bold">{{ \App\ProductCat::find(2)->label_eng }}</h1>
				<p class="mb-4 lead text-h-1-4-1">
					{{ \App\ProductCat::find(2)->descrip_eng }}
				</p>
				<a href="{!! route('shopping::collectionPage', ['product_cat_id'=> 2]) !!}" class="col-12 btn btn-primary">View</a>
			</div>
		</div>
</div>
</div>
<!-- card -->
<div class="row mt-4 mb-4 text-center text-h-1-4-1 d-flex justify-content-center">
	<h4 class="col-lg-5 col-sm-12 mt-4 mb-4 text-m-6-7-6 white spc-title">POPULAR PRODUCTS</h4>
</div>
<!-- card -->

<!-- card -->
<div class="container owl-carousel owl-theme owl-carousel-card">
  @foreach(\App\Product::all() as $product)
  <a href="{!! route('shopping::productPage', ['product_cat_id'=>$product->product_cat_id, 'product_id'=>$product->product_id]) !!}">
		<div class="card">
			<img src="<?= asset('assets/img/spc-product-'.$product->product_id.'.png')?>" class="card-img-top" alt="p1">
			<div class="card-body text-h-1-4-1">
				<h5 class="card-title text-h-1-4-1">{{ $product->label_eng }}</h5>
				<p class="card-text text-h-1-4-1">${{ $product->unit_price }}</p>
			</div>
		</div>
	</a>
  @endforeach
</div>
<!-- card -->

<div class="row mt-4 mb-4 text-center text-h-1-4-1 d-flex justify-content-center">
	<h4 class="col-lg-5 col-sm-12 mt-4 mb-4 text-m-6-7-6 white spc-title">Our Collections</h4>
</div>
<!-- card -->
<div class="container owl-carousel owl-theme owl-carousel-collect mb-4">
  @foreach( \App\ProductCat::all() as $productCat) 
  <a href="{!! route('shopping::collectionPage', ['product_cat_id'=> $productCat->product_cat_id]) !!}">
		<div class="card">
			<img src="<?= asset('assets/img/spc-collect-'.$productCat->product_cat_id.'.png')?>" class="card-img-top" alt="p1">
      
		</div>
		<p class="text-m-4-7-4">{{ $productCat->label_eng }}</p>
	</a>
  @endforeach
</div>
<!-- card -->
<!-- newsletter -->
<section class="container p-4 white text-h-2-4-2 gray-800 news-box" style="background-image:url(./assets/img/spc-banner-1.png);">
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
