@extends('frontend.layouts.app', ['title' => 'SPC eshop'])

@section('content')
<style>
  @media screen and (max-width: 500px) {
    .owl-carousel-card .card{
    width: 160px;
  }
  }
</style>
  <!-- content start -->
  <div class="container text-h-1-4-1">
    <nav class=" " aria-label="breadcrumb">
      <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="#">Home</a></li>
        <li class="breadcrumb-item active" aria-current="page">Limited Edition</li>
      </ol>
    </nav>
    <div class="card">
      <img src="<?=asset('assets/img/limited-edition.png')?>" class="card-img" alt="New Items">
      <div class="mt-4 mb-4 card-img-overlay"></div>
    </div>
  
  </div>
  <!-- card -->
<div class="container">
	<!-- <div class="mt-4 mb-4 text-h-1-4-1">
		<h4 class=" mt-4 mb-4 text-m-6-7-6 spc-blue">New Items</h4>
	</div> -->
	<div class="row">
    @foreach($limited_edition_products as $product)
      <a class="owl-carousel-card mb-4 mt-4 col col-lg-3 col-sm-6" href="{!! route('shopping::productPage', ['product_cat_id'=>$product->product_cat_id, 'product_id'=>$product->product_id]) !!}">
        <div class="card">
          <span class="badge badge-warning" style="position: absolute; left:4px;top:4px;z-index: 999;">limited</span>
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