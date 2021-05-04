@extends('frontend.layouts.app', ['title' => 'SPC eshop'])

@section('content')
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
											<div class="card-body" style="background-color: rgba(255, 255, 255, 0.1);">
												<h4 class="text-m-7-7-7 spc-blue">St. Paul’s College Souvenir</h4>
												<div class="text-h-1-4-1">Lorem ipsum dolor sit amet consectetur adipisicing elit.</div>
												<div class="pr-4 mt-4 mb-2 text-h-1-4-1">
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
										<img src="./assets/img/spc-slide-1-1.png">
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
											<div class="card-body" style="background-color: rgba(255, 255, 255, 0.1);">
												<h4 class="text-m-7-7-7 spc-blue">St. Paul’s College Souvenir</h4>
												<div class="text-h-1-4-1">Lorem ipsum dolor sit amet consectetur adipisicing elit.</div>
												<div class="pr-4 mt-4 mb-2 text-h-1-4-1">
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
										<img src="./assets/img/spc-slide-2-2.png">
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
