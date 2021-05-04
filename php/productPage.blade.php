@extends('frontend.layouts.app', ['title' => 'SPC eshop'])

@section('content')
<style>
  . {
      text-align: center;
  }

  .swiper-slide {
		background-position: center;
		background-size: cover;
		width: 100%;
		height: 100%;
	}

	.swiper-container {
		width: 100%;
		height: 100%;
	}
</style>

  <div class="container text-h-1-4-1">
    <!-- breadcrumb start -->
    <nav aria-label="breadcrumb" class="text-r-1-3-1">
      <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="/">Home</a></li>
        <li class="breadcrumb-item"><a href="{!! route('shopping::collectionPage', ['product_cat_id'=> $productCat->product_cat_id]) !!}">Collections</a></li>
        <li class="breadcrumb-item active" aria-current="page">{{ $productCat->label_eng }}</li>
      </ol>
    </nav>
    <!-- breadcrumb end -->
  </div>
  <!-- product -->
	<div class="container">
		<div class="col-12 row d-flex justify-content-between">
			<div class="col-lg-6 col-md-12">
        <div class=" ">
          <img src="#" alt="">
        </div>
        {{-- product pic --}}
				<div class="owl-carousel-2 owl-carousel owl-theme">
					<div class="item" data-hash="spc-product-1">
            <img src="<?= asset($product->image_1)?>" alt="spc-product" style="width:300px;">
          </div>
          
				</div>
        {{-- thumbnail pic --}}
				<div class="d-flex col-6">
					<a class="button secondary url" href="#spc-product-1">
						<img class="card-img-top" src="<?= asset($product->image_1)?>" alt="spc-product">
					</a>
          
				</div>

			</div>
      {{-- product add to cart --}}
      <form id="cartForm" class="row col-lg-6 col-sm-12" action="{!! route('shoppingCart::frontAddCart', ['product_id'=>$product->product_id]) !!}">
        @include('frontend.layouts.pop_msg')
        <div class="mt-2 col-lg-10 col-md-8"> 
          {{-- mt-2 col-lg-10 col-md-8 --}}
          <div class="card-block py-5 py-lg-0">
            <div class="mb-2 text-h-1-4-1 spc-red">NEW!</div>
            <h1 class="card-title mb-2 text-h-3-4-3 font-weight-bold">{{ $product->label_eng }}</h1>
            <p class="mb-2 text-h-1-4-1">
              {{ $product->short_descrip_eng }} 
            </p>
            <p class="card-text mb-4 lead text-h-2-4-2">
              $ {{ $product->unit_price }}
            </p>
            {{-- attr --}}
            {{-- if $is_product_opt == 1 在DB product table加一個欄位? --}}
            @if($product->product_attribute)
              <input type="text" name="product_attribute" value="{{ $product->product_attribute }}" hidden>

              <div class="d-flex col-12 form-group">
                <label class="mt-2" for="product_opt">{{ $product->product_attribute }} : &nbsp;</label>
                <select name="product_opt" id="product_opt" class="col-4 mr-4 form-control">
                  @foreach($productOpts as $productOpt)
                    <option value="{{ $productOpt->product_option_id }}">{{ $productOpt->label_eng }}</option>
                  @endforeach
                </select>
              </div>
            @endif
            {{-- attr --}}
            {{-- qty --}}
            <div class="d-flex col-12 form-group">
              <label class="mt-2" for="qty">Select Quantity: &nbsp;</label>
              <select name="qty" id="qty" class="col-4 mr-4 form-control">
                <option value="1">1</option>
                <option value="2">2</option>
                <option value="3">3</option>
                <option value="4">4</option>
                <option value="5">5</option>
              </select>
            </div>
            {{-- qty --}}

            <button id="changeOption" type="submit" class="add-to-cart col-12 btn btn-primary mb-4">Add To Basket</button>

            {{-- <p class="mt-4 mb-4 col-12 text-h-1-4-1">
              <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-megaphone" viewBox="0 0 16 16">
                <path d="M13 2.5a1.5 1.5 0 0 1 3 0v11a1.5 1.5 0 0 1-3 0v-.214c-2.162-1.241-4.49-1.843-6.912-2.083l.405 2.712A1 1 0 0 1 5.51 15.1h-.548a1 1 0 0 1-.916-.599l-1.85-3.49a68.14 68.14 0 0 0-.202-.003A2.014 2.014 0 0 1 0 9V7a2.02 2.02 0 0 1 1.992-2.013 74.663 74.663 0 0 0 2.483-.075c3.043-.154 6.148-.849 8.525-2.199V2.5zm1 0v11a.5.5 0 0 0 1 0v-11a.5.5 0 0 0-1 0zm-1 1.35c-2.344 1.205-5.209 1.842-8 2.033v4.233c.18.01.359.022.537.036 2.568.189 5.093.744 7.463 1.993V3.85zm-9 6.215v-4.13a95.09 95.09 0 0 1-1.992.052A1.02 1.02 0 0 0 1 7v2c0 .55.448 1.002 1.006 1.009A60.49 60.49 0 0 1 4 10.065zm-.657.975l1.609 3.037.01.024h.548l-.002-.014-.443-2.966a68.019 68.019 0 0 0-1.722-.082z"/>
              </svg>
              Free Shipping on all Orders Over $1000 
            </p> --}}
            <!-- share button -->
            <div class="d-flex share-button">
              <a href="https://www.facebook.com/spceduhk/" target="_blank">
                <img class="icon icon-fb" src="{{ asset('assets/icon/facebook.svg') }}" alt="">
                
              </a>
              <a href="http://www.spc.edu.hk/" target="_blank">
                <img class="icon icon-fb" src="{{ asset('assets/icon/instagram.svg') }}" alt="">
                {{-- <object type="image/svg+xml" data="{{ asset('assets/icon/instagram.svg') }}" class="icon icon-ig">
                </object> --}}
              </a>
              <a href="http://www.spc.edu.hk/" target="_blank">
                {{-- <object type="image/svg+xml" data="{{ asset('assets/icon/youtube.svg') }}" class="icon icon-yt">
                </object> --}}
                <img class="icon icon-fb" src="{{ asset('assets/icon/youtube.svg') }}" alt="">

              </a>
            </div>
            <!-- share button -->
          </div>
        </div>
      </form>
      {{-- product add to cart end--}}
		</div>
		<!-- text -->
		<!-- ABOUT  -->
		{{-- <div class="row mt-4 mb-4 text-center text-h-1-4-1 d-flex justify-content-center" style="padding-bottom: 100px;">
			<h4 class="col-12 mt-4 mb-4 text-m-5-7-5 gray-800">ABOUT THIS PRODUCT</h4>
			<p class="col-12">
				{{ $product->descrip_eng }}
			</p>
		</div> --}}

    {{--  --}}
    <div class="row mt-4 mb-4 text-center text-h-1-4-1" style="padding-bottom: 100px;">
      <!-- tab -->
      <nav class="col-12">
        <div class="nav nav-tabs" id="nav-tab" role="tablist">
          <a class="nav-link active" id="nav-product-tab" data-toggle="tab" href="#nav-product" role="tab"
            aria-controls="nav-product" aria-selected="true">
            Product Details
          </a>
          <a class="nav-link" id="nav-media-tab" data-toggle="tab" href="#nav-media" role="tab" aria-controls="nav-media"
            aria-selected="false">
            Media
          </a>
        </div>
      </nav>
      <div class="col-12 tab-content" id="nav-tabContent">
        <div class="tab-pane fade show active" id="nav-product" role="tabpanel" aria-labelledby="nav-product-tab">
          <h4 class="col-12 mt-4 mb-4 text-m-5-7-5 gray-800">ABOUT THIS PRODUCT</h4>
          <p class="col-12">
            {{ $product->descrip_eng }}
          </p>
          <div class="col-12 mt-4 mb-4">
            <img src="./assets/img/spc-collect-4.png" alt="">
          </div>
        </div>
        <div class="tab-pane fade" id="nav-media" role="tabpanel" aria-labelledby="nav-media-tab">
          <div class="video-container mt-4 mb-4">
            <iframe width="560" height="315" src="https://www.youtube.com/embed/wf-JOATybhM" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
          </div>
        </div>
      </div>
      <!-- tab -->
    </div>
    {{--  --}}
		<!-- ABOUT  -->
	</div>
	<!-- product -->
	<hr>
	<!-- card -->
	<div class="row mt-4 mb-4 text-center text-h-1-4-1 d-flex justify-content-center">
		<h4 class="col-lg-5 col-sm-12 mt-4 mb-4 text-m-6-7-6 white spc-title">You may also like</h4>
	</div>
	<!-- card -->

	<!-- card -->
	<div class="container owl-carousel-1 owl-carousel owl-theme owl-carousel-card">
    @foreach(\App\Product::all() as $product)
    <div class="card">
      <a href="{!! route('shopping::productPage', ['product_cat_id'=>$product->product_cat_id, 'product_id'=>$product->product_id]) !!}">
        <img src="<?= asset($product->image_1)?>" class="card-img-top" alt="p1">
      </a>
      <div class="card-body text-h-1-4-1">
        <h5 class="card-title text-h-1-4-1">{{ $product->label_eng }}</h5>
        <p class="card-text text-h-1-4-1">${{ $product->unit_price }}</p>
      </div>
    </div>
    @endforeach
	</div>
	<!-- card -->
</div>
@endsection

@section('scripts')
  <script>
    $(document).ready(function(){
      $("#changeOption").click(function(){
          if($("#qty").val()<1){
              alert("No product selected");
          }else{
              $("#cartForm").submit();
          }
      });   

      var swiper = new Swiper('.swiper-container', {
			zoom: true,
			effect: 'fade',
			pagination: {
				el: '.swiper-pagination',
				clickable: true,
			},
			navigation: {
				nextEl: '.swiper-button-next',
				prevEl: '.swiper-button-prev',
			},
			autoplay: {
				delay: 5000,
				disableOnInteraction: false,
			},
		});
		//owl
		$('.owl-carousel-1').owlCarousel({
			nav: true,
			dots: false,
			margin: 20,
			items: 4,
			responsive: {
				780: {
					items: 4,
				},
				400: {
					items: 4,
				},
			}
		});
		$('.owl-carousel-2').owlCarousel({
			nav: true,
			dots: false,
			margin: 20,
			items: 1,
			center: true,
			loop: true,
			URLhashListener: true,
			startPosition: 'URLHash',
			responsive: {
				780: {
					items: 1,
				},
				480: {
					items: 1,
				},
			}
		});



    });
  </script>
@endSection