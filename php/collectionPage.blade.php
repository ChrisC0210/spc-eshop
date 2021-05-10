@extends('frontend.layouts.app', ['title' => 'SPC eshop'])

@section('content')
<style>
  .card-text{
    position: relative;
    top: -10px;
  }
  @media screen and (max-width: 500px) {
    .product-box-img img{
    width: 120px;
  }
  .owl-carousel-card a:hover::after,.owl-carousel-card a :active::after
  {padding:82px 60px 82px 60px;
    opacity:0.4}
  }
  .card{
    border: solid 1px #f5f5f5;
    border-radius: 4px;
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
	bottom: 20px;
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
  <!-- content start -->
  
  <div class="container text-h-1-4-1">
    <!-- breadcrumb start -->
    <nav aria-label="breadcrumb" class="text-r-1-3-1">
      <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="/">Home</a></li>
        <li class="breadcrumb-item">Collections</li>
        <li class="breadcrumb-item active" aria-current="page">{{ $productCat->label_eng }}</li>
      </ol>
    </nav>
    <div class="mt-4 mb-4 text-h-1-4-1">
      <h4 class="col-sm-12 mt-4 mb-4 text-m-6-7-6 spc-blue">{{ $productCat->label_eng }}</h4>
    </div>
    <!-- breadcrumb end -->
    <!-- tab start -->
    <!-- <div class="container">
      <div class=" nav nav-pills" id="v-pills-tab" role="tablist" aria-orientation="vertical" style="flex-wrap: unset !important;overflow: scroll;">
      <a class="nav-link active" id="v-pills-home-tab" data-toggle="pill" href="#v-pills-home" role="tab" aria-controls="v-pills-home" aria-selected="true">
				<div class="media">
					<img style="max-width: 50px; object-fit: contain;" src="{{ asset('assets/img/spc-product-2.png') }}" class="mr-3" alt="...">
					<div class="media-body">
						<h5 class="text-h-1-4-1 mt-lg-3">Cap</h5>
					</div>
				</div>
			</a>
      <a class="nav-link" id="v-pills-profile-tab" data-toggle="pill" href="#v-pills-profile" role="tab" aria-controls="v-pills-profile" aria-selected="false">
				<div class="media">
					<img style="max-width: 50px; object-fit: contain;" src="{{ asset('assets/img/spc-product-5.png') }}" class="mr-3" alt="...">
					<div class="media-body">
						<h5 class="text-h-1-4-1 mt-lg-3">Jacket</h5>
					</div>
				</div>
			</a>
      <a class="nav-link" id="v-pills-messages-tab" data-toggle="pill" href="#v-pills-messages" role="tab" aria-controls="v-pills-messages" aria-selected="false">
				<div class="media">
					<img style="max-width: 50px; object-fit: contain;" src="{{ asset('assets/img/spc-product-5.png') }}" class="mr-3" alt="...">
					<div class="media-body">
						<h5 class="text-h-1-4-1 mt-lg-3">Sweat Shirt</h5>
					</div>
				</div>
			</a>
    </div> -->
    <!-- tab end -->
  <!-- tab content start-->
	<!-- <div class="text-h-1-4-1">
		<div class="row">
			<div class="col-12 mt-4">
				<div class="tab-content" id="v-pills-tabContent">
					<div class="tab-pane fade show active" id="v-pills-home" role="tabpanel" aria-labelledby="v-pills-home-tab"> -->
						<!-- card -->
            <!-- <div class="text-h-1-4-1">
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
            </div> -->
						<!-- card -->
					<!-- </div>
					<div class="tab-pane fade" id="v-pills-profile" role="tabpanel" aria-labelledby="v-pills-profile-tab"> -->
						<!-- card -->
            <!-- <div class="text-h-1-4-1">
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
            </div> -->
						<!-- card -->
					<!-- </div>
					<div class="tab-pane fade" id="v-pills-messages" role="tabpanel" aria-labelledby="v-pills-messages-tab"> -->
						<!-- card -->
            <!-- <div class="text-h-1-4-1">
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
            </div> -->
						<!-- card -->
					<!-- </div>
				</div>
			</div>
		</div>
	</div> -->
	<!-- tab contant end-->
  <!-- card -->
<div class="container text-center text-h-2-5-2 gray-800">
	<div class="row ">
                @foreach(\App\Product::all() as $product)
                  <a href="#" class="d-flex card-box-2 col-6 col-md-4 col-lg-4 col-sm-6">
                    <div class="card mb-4 shadow-sm img-hover-zoom flex-fill">
                    <div class="btn-card-box">
                        <button class="text-h-2-4-2">Shop Now</button>
                      </div>
                      <img src="{{ asset($product->image_1) }}" class="bd-placeholder-img card-img-top" alt="..." width="100%"
                        height="225">
                      <div class="card-body">
                        <h5 class="card-title text-h-2-4-2">{{ $product->label_eng }}</h5>
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
    <!-- product start -->
    <!-- <div class="container">
      <div class="row mb-4 text-r-1-3-1 product-all-box"> -->
          <? foreach($productCat->Product()->orderBy('product.label_eng')->get() as $product){?> 
          <!-- card start -->
          <!-- <div class="col-6 col-lg-3 col-md-6 col-sm-6  owl-carousel-card mb-4">
          <div class="card p-2"> 
          <div class=" ">
              <a href="{!! route('shopping::productPage', ['product_cat_id'=>$product->product_cat_id, 'product_id'=>$product->product_id]) !!}">
                  {{-- <img class="mb-4 card-img-top" src="{!! asset($product->image_1) !!}" alt=""> --}}
                  <img class="mb-4 card-img-top" src="{{ asset($product->image_1) }}" alt="">
              </a>
            </div>

            <div>
              <a href="{!!  route('shopping::productPage', ['product_cat_id'=>$product->product_cat_id, 'product_id'=>$product->product_id]) !!}">{{ $product->label_eng }}</a>
              <? if((new \App\Http\Controllers\CartItemController)->hasDiscount()){?>
              <p><strike><small>{{ moneyFormat($product->unit_price) }}</small></strike> <span style="color:red">{{ moneyFormat($product->unit_price*(100-Auth::guard('member')->user()->MembershipType->discount)/100) }}</span></p>
              <? }else{?>
              <p>{{ moneyFormat($product->unit_price) }}</p>
              <? }?>
            </div>
          </div>
        </div> -->
            <!-- product end -->
          <? }?>
            
      </div>
    </div>
    {{-- content center --}}
  </div>
  {{-- container end --}}
{{-- *********************** --}}

@endsection
@push('script')

<script>


</script>
@endpush