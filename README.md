# 123
>>> 2021/05/03
>>> www.spc-foundation.org.hk/resources/views/frontend/shopping
>>> productPage.blade.php
>>> index.blade.php
>>> viewCartPage.blade.php
order info 表格超出畫面

>>> collectionPage.blade.php
<style>
  @media screen and (max-width: 500px) {
    .product-box-img img{
    width: 120px;
  }
  }

</style>

>>> login.blade.php

//
>>> newItemPage.blade.php
	<div class=" row">
    @foreach($new_item_products as $product)
      <a class="owl-carousel-card mb-4 mt-4 col col-lg-3 col-sm-3" href="{!! route('shopping::productPage', ['product_cat_id'=>$product->product_cat_id, 'product_id'=>$product->product_id]) !!}">
        <div class="card">
          <span class="badge badge-info" style="position: absolute; left:4px;top:4px;z-index: 999;">New</span>
          <img src="<?= asset('assets/img/spc-product-'.$product->product_id.'.png')?>" class="card-img-top" alt="p1">
          <div class="card-body text-h-1-4-1">
            <h5 class="card-title text-h-1-4-1">{{ $product->label_eng }}</h5>
            <p class="card-text text-h-1-4-1">{{ moneyFormat($product->unit_price) }}</p>
          </div>
        </div>
      </a>
    @endforeach
		

	</div>

<style>
  @media screen and (max-width: 500px) {
    .owl-carousel-card .card{
    width: 120px;
  }
  }
</style>

>>> 