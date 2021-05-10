@extends('frontend.layouts.app', ['title' => 'SPC eshop'])

@section('content')
<style>
	  .card-text{
    position: relative;
    top: -10px;
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
/* /coll */
.nav-pills .nav-link {
  color: #767676;
  padding: 10px 20px;
	margin: 4px;
	border: solid 0.5px;
}
.nav-pills::-webkit-scrollbar {
  display: none;
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
			<div class="swiper-slide">
				<img src="{{ asset('assets/img/spc-slider-2.jpg') }}"/>
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
				<a href="#" class="card-box-2 col-6 col-md-4 col-lg-4 col-sm-6">
					<div class="card mb-4 shadow-sm img-hover-zoom">
					<div class="btn-card-box">
							<button class="text-h-2-4-2">View</button>
						</div>
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
							<p class="text-1 white text-m-2-4-2">Apparel</p>
							<p class="text-2 white text-h-1-4-1">Short description</p>
							<button class="btn-card btn btn-primary">View</button>
					</div>
					</a>
					<a href="#" class="mb-4 card-box col-6 col-lg-6 col-sm-6">
						<div class="img-hover-zoom">
							<img src="{{ asset('assets/img/spc-be-3.png') }}" alt="spc-be-3.png" style="width:100%;">
							<p class="text"> </p>
							<p class="text-1 white text-m-2-4-2">Accessories</p>
							<p class="text-2 white text-h-1-4-1">Short description</p>
							<button class="btn-card btn btn-primary">View</button>
					</div>
					</a>
					<a href="#" class="mb-4 card-box col-6 col-lg-4 col-sm-6">
						<div class="img-hover-zoom">
							<img src="{{ asset('assets/img/spc-be-2.png') }}" alt="spc-be-2.png" style="width:100%;">
							<p class="text"> </p>
							<p class="text-1 white text-m-2-4-2">Glassware</p>
							<p class="text-2 white text-h-1-4-1">Short description</p>
							<button class="btn-card btn btn-primary">View</button>
					</div>
					</a>
					<a href="#" class="mb-4 card-box col col-lg-4 col-sm-6">
						<div class="img-hover-zoom">
							<img src="{{ asset('assets/img/spc-be-4.png') }}" alt="spc-be-4.png" style="width:100%;">
							<p class="text"> </p>
							<p class="text-1 white text-m-2-4-2">Education</p>
							<p class="text-2 white text-h-1-4-1">Short description</p>
							<button class="btn-card btn btn-primary">View</button>
					</div>
					</a>
					<a href="#" class="mb-4 card-box col col-lg-4 col-sm-6">
						<div class="img-hover-zoom">
							<img src="{{ asset('assets/img/spc-be-5.png') }}" alt="spc-be-5.png" style="width:100%;">
							<p class="text"> </p>
							<p class="text-1 white text-m-2-4-2">Electronics</p>
							<p class="text-2 white text-h-1-4-1">Short description</p>
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
<!-- collection page -->
	<!-- cart -->
	<div class="modal fade" id="cart" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
	<div class="modal-dialog modal-lg" role="document">
		<div class="modal-content">
			<div class="modal-header">
				
				<h5 class="modal-title" id="exampleModalLabel">Basket</h5>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>
			<div class="modal-body">
				<table class="show-cart table">
					
				</table>
				<div>Total price: $<span class="total-cart"></span></div>
			</div>
			<div class="modal-footer">
				<button class="clear-cart btn btn-secondary">Clear Cart</button>
				<!-- <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button> -->
				<a href="./basket.html" type="button" class="btn btn-primary">View Basket</a>
			</div>
		</div>
	</div>
	</div> 
	<!-- cart -->
<div class="container text-h-1-4-1">
	<nav class="col-12" aria-label="breadcrumb">
		<ol class="breadcrumb">
			<li class="breadcrumb-item"><a href="#">Home</a></li>
			<li class="breadcrumb-item"><a href="#">Collections</a></li>
			<li class="breadcrumb-item active" aria-current="page">Apparel</li>
		</ol>
	</nav>
	<div class="mt-4 mb-4 text-h-1-4-1">
		<h4 class="col-sm-12 mt-4 mb-4 text-m-6-7-6 spc-blue">Apparel</h4>
	</div>
	<!-- tab -->
<div class="container">
  <div class=" ">
    <div class=" nav nav-pills" id="v-pills-tab" role="tablist" aria-orientation="vertical" style="flex-wrap: unset !important;overflow: scroll;">
      <a class="nav-link active" id="v-pills-home-tab" data-toggle="pill" href="#v-pills-home" role="tab" aria-controls="v-pills-home" aria-selected="true">
				<div class="media">
					<img style="max-width: 50px; object-fit: contain;" src="./assets/img/spc-product-4.png" class="mr-3" alt="...">
					<div class="media-body">
						<h5 class="text-h-1-4-1 mt-3">Cap</h5>
					</div>
				</div>
			</a>
      <a class="nav-link" id="v-pills-profile-tab" data-toggle="pill" href="#v-pills-profile" role="tab" aria-controls="v-pills-profile" aria-selected="false">
				<div class="media">
					<img style="max-width: 50px; object-fit: contain;" src="./assets/img/spc-product-4.png" class="mr-3" alt="...">
					<div class="media-body">
						<h5 class="text-h-1-4-1 mt-3">Jacket</h5>
					</div>
				</div>
			</a>
      <a class="nav-link" id="v-pills-messages-tab" data-toggle="pill" href="#v-pills-messages" role="tab" aria-controls="v-pills-messages" aria-selected="false">
				<div class="media">
					<img style="max-width: 50px; object-fit: contain;" src="./assets/img/spc-product-4.png" class="mr-3" alt="...">
					<div class="media-body">
						<h5 class="text-h-1-4-1 mt-3">Sweat Shirt</h5>
					</div>
				</div>
			</a>
    </div>
  </div>
</div>
<!-- tab -->
</div>

  <!-- tab content start-->
	<div class="text-h-1-4-1">
		<div class="row">
			<div class="col-12 mt-4">
				<div class="tab-content" id="v-pills-tabContent">
					<div class="tab-pane fade show active" id="v-pills-home" role="tabpanel" aria-labelledby="v-pills-home-tab">
						<!-- card -->
            <div class="text-h-1-4-1">
              <!-- <div class="row">
                <? foreach($productCat->Product()->orderBy('product.label_eng')->get() as $product){?> 
                  <a href="{!! route('shopping::productPage', ['product_cat_id'=>$product->product_cat_id, 'product_id'=>$product->product_id]) !!}"  class="card-box-2 col-6 col-md-4 col-lg-4 col-sm-6">
                    <div class="card mb-4 shadow-sm img-hover-zoom">
                      <div class="btn-card-box">
                        <button class="text-h-2-4-2">View</button>
                      </div>
                      <img src="{{ asset($product->image_1) }}" class="bd-placeholder-img card-img-top" alt="..." width="100%"vheight="225">
                      <div class="card-body">
                        <h5 class="card-title text-h-2-4-2">{{ $product->label_eng }}</h5>
                        <? if((new \App\Http\Controllers\CartItemController)->hasDiscount()){?>
                          <p class="card-text"><strike><small>{{ moneyFormat($product->unit_price) }}</small></strike> <span style="color:red">{{ moneyFormat($product->unit_price*(100-Auth::guard('member')->user()->MembershipType->discount)/100) }}</span></p>
                          <? }else{?>
                            <p class="card-text">{{ moneyFormat($product->unit_price) }}</p>
                            <? }?>
                        <div class="d-flex justify-content-between align-items-center">
                          <div class="btn-group">
                          </div>
                        </div>
                      </div>
                    </div>
                  </a>
                </div>
                <? }?>
              </div> -->
            </div>
						<!-- card -->
					</div>
					<div class="tab-pane fade" id="v-pills-profile" role="tabpanel" aria-labelledby="v-pills-profile-tab">
						<!-- card -->
            <div class="text-h-1-4-1">
              <div class="row">
                @foreach(\App\Product::all() as $product)
                  <a href="#" class="card-box-2 col-6 col-md-4 col-lg-4 col-sm-6">
                    <div class="card mb-4 shadow-sm img-hover-zoom">
                    <div class="btn-card-box">
                        <button class="text-h-2-4-2">View</button>
                      </div>
                      <img src="{{ asset($product->image_1) }}" class="bd-placeholder-img card-img-top" alt="..." width="100%"vheight="225">
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
						<!-- card -->
					</div>
					<div class="tab-pane fade" id="v-pills-messages" role="tabpanel" aria-labelledby="v-pills-messages-tab">
						<!-- card -->
            <div class="text-h-1-4-1">
              <div class="row">
                @foreach(\App\Product::all() as $product)
                  <a href="#" class="card-box-2 col-6 col-md-4 col-lg-4 col-sm-6">
                    <div class="card mb-4 shadow-sm img-hover-zoom">
                    <div class="btn-card-box">
                        <button class="text-h-2-4-2">View</button>
                      </div>
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
						<!-- card -->
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- tab contant end-->
<!-- collection page -->
@endsection
@push('script')

<script>


</script>
@endpush
