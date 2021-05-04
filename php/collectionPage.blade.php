@extends('frontend.layouts.app', ['title' => 'SPC eshop'])

@section('content')
<style>
  @media screen and (max-width: 500px) {
    .product-box-img img{
    width: 120px;
  }
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
    <div class="d-flex justify-content-center">
      <div class="row col-12 mb-4 text-r-1-3-1 product-all-box">
          <? foreach($productCat->Product()->orderBy('product.label_eng')->get() as $product){?>
          <!-- card start -->
        <div class="col col-lg-3 col-md-6 col-sm-6 d-flex justify-content-center product-all ">
          <div class="product-box-img">
              <a href="{!! route('shopping::productPage', ['product_cat_id'=>$product->product_cat_id, 'product_id'=>$product->product_id]) !!}">
                  {{-- <img class="mb-4" src="{!! asset($product->image_1) !!}" alt=""> --}}
                  <img class="mb-4" src="<?= asset('assets/img/spc-product-'.$product->product_id.'.png')?>" alt="">
              </a>
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