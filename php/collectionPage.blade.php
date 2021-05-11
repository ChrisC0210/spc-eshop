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
        {{-- <li class="breadcrumb-item"><a href="{!! route('shopping::collectionPage', ['product_cat_id'=> $productCat->product_cat_id]) !!}">Collections</a></li> --}}
        @if($productCat->parent_id!==0)
        <li class="breadcrumb-item active" aria-current="page"><a href="{!! route('shopping::collectionPage', ['product_cat_id'=> $productCat_parent->product_cat_id]) !!}">{{ $productCat_parent->label_eng }}</a></li>
        @endif
        <li class="breadcrumb-item active" aria-current="page"><a href="{!! route('shopping::collectionPage', ['product_cat_id'=> $productCat->product_cat_id]) !!}">{{ $productCat->label_eng }}</a></li>
      </ol>
    </nav>
    <div class="mt-4 mb-4 text-h-1-4-1">
      <h4 class="col-sm-12 mt-4 mb-4 text-m-6-7-6 spc-blue">{{ $productCat->label_eng }}</h4>
    </div>
    <!-- breadcrumb end -->
    
  <!-- card -->
    {{-- product category lv.2 --}}
    <div class="container text-center text-h-2-5-2 gray-800" style="min-height: 30vh;">
      <div class="row ">
        @foreach($productCat2s as $productCat2)
          <a href="{!! route('shopping::collectionPage', ['product_cat_id'=> $productCat2->product_cat_id]) !!}" class="d-flex card-box-2 col-6 col-md-4 col-lg-4 col-sm-6">
            <div class="card mb-4 shadow-sm img-hover-zoom flex-fill">
            <div class="btn-card-box">
                <button class="text-h-2-4-2">Shop Now</button>
              </div>
              <img src="{{ $productCat2->image_1 ? asset($productCat2->image_1):asset('assets/icon/no_image.png') }}" class="bd-placeholder-img card-img-top" alt="..." width="100%"
                height="225">
              <div class="card-body">
                <h5 class="card-title text-h-2-4-2">{{ $productCat2->label_eng }}</h5>
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
    @if($productCat->parent_id==0)
    <hr>
    {{-- <h4 class="col-sm-12 mt-4 mb-4 text-m-6-7-6 spc-blue">Products</h4> --}}
    @endif
    {{-- product category lv.2 end--}}

    <!-- product start -->
    <div class="container">
      {{-- <hr> --}}

      <div class="row mb-4 text-r-1-3-1 product-all-box"> 
        @foreach($productCat->Product()->orderBy('product.label_eng')->get() as $product) 
          <div class="col-6 col-lg-3 col-md-6 col-sm-6  owl-carousel-card mb-4">
            <div class="card p-2"> 
              <div class=" ">
                <a href="{!! route('shopping::productPage', ['product_cat_id'=>$product->product_cat_id, 'product_id'=>$product->product_id]) !!}">
                    {{-- <img class="mb-4 card-img-top" src="{!! asset($product->image_1) !!}" alt=""> --}}
                    <img class="mb-4 card-img-top" src="{{ $product->image_1 ? asset($product->image_1):asset('assets/icon/no_image.png') }}" alt="">
                </a>
              </div>

              <div>
                <a href="{!!  route('shopping::productPage', ['product_cat_id'=>$product->product_cat_id, 'product_id'=>$product->product_id]) !!}">{{ $product->label_eng }}</a>
                @if((new \App\Http\Controllers\CartItemController)->hasDiscount())
                  <p><strike><small>{{ moneyFormat($product->unit_price) }}</small></strike> <span style="color:red">{{ moneyFormat($product->unit_price*(100-Auth::guard('member')->user()->MembershipType->discount)/100) }}</span></p>
                @else
                  <p>{{ moneyFormat($product->unit_price) }}</p>
                @endif
              </div>
            </div>
          </div> 
            <!-- product end -->
          @endforeach
            
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