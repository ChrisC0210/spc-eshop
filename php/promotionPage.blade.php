@extends('frontend.layouts.app', ['title' => 'SPC eshop'])

@section('content')
<style>
  @media screen and (max-width: 500px) {
    .owl-carousel-card .card{
    width: 170px;
  }
  }
  .owl-carousel-card a:hover::after,.owl-carousel-card a :active::after
  {padding:82px 60px 82px 60px;
    opacity:0.4}
  }
</style>

  <!-- content start -->
  <div class="container text-h-1-4-1">
    <nav class=" " aria-label="breadcrumb">
      <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="#">Home</a></li>
        <li class="breadcrumb-item active" aria-current="page">Promotion</li>
      </ol>
    </nav>
    <div class="card">
      <img src="<?=asset('assets/img/sale.png')?>" class="card-img" alt="New Items">
      <div class="mt-4 mb-4 card-img-overlay">
        <h5 class="spc-red text-h-1-4-1">50% OFF</h5>
        <h4 class="text-m-6-7-6 spc-red">Promotion</h4>
          <!-- <p class="card-text gray-600 text-h-2-4-2">Come by soon and show us this text for 50% off.</p> -->
      </div>
    </div>
  
  </div>
  <!-- card -->
<div class="container">
	<!-- <div class="mt-4 mb-4 text-h-1-4-1">
		<h4 class=" mt-4 mb-4 text-m-6-7-6 spc-blue">New Items</h4>
	</div> -->
	<div class="row">
    @foreach($promotion_products as $product)
      <a class="owl-carousel-card mb-4 mt-4 col col-lg-3 col-sm-6" href="{!! route('shopping::productPage', ['product_cat_id'=>$product->product_cat_id, 'product_id'=>$product->product_id]) !!}">
        <div class="card" style="border-radius: 4px;border: solid 1px #f5f5f5;">
          <span class="badge badge-danger" style="position: absolute; left:4px;top:4px;z-index: 999;">SALE</span>
          <img src="<?= asset('assets/img/spc-product-'.$product->product_id.'.png')?>" class="card-img-top" alt="p1">
          <div class="card-body text-h-1-4-1">
            <h5 class="card-title text-h-1-4-1">{{ $product->label_eng }}</h5>
            <p class="card-text text-h-1-4-1">{{ moneyFormat($product->unit_price) }}</p>
          </div>
        </div>
      </a>
    @endforeach
		

	</div>


</div>
<!-- card -->


@endsection
@push('script')

<script>


</script>
@endpush