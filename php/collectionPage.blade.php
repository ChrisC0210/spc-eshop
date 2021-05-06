@extends('frontend.layouts.app', ['title' => 'SPC eshop'])

@section('content')
<style>
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
    <!-- product start -->
    <div class="container">
      <div class="row mb-4 text-r-1-3-1 product-all-box">
          <? foreach($productCat->Product()->orderBy('product.label_eng')->get() as $product){?>
          <!-- card start -->
        <div class="col-6 col-lg-3 col-md-6 col-sm-6  owl-carousel-card mb-4">
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
        </div>
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