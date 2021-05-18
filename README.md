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
      <a class="owl-carousel-card mb-4 mt-4 col col-lg-3 col-sm-6" href="{!! route('shopping::productPage', ['product_cat_id'=>$product->product_cat_id, 'product_id'=>$product->product_id]) !!}">
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
    width: 160px;
  }
  }
</style>
>>> 2021/05/04
>>> limitedEditionPage.blade.php
===>>> newItemPage.blade.php
>>> promotionPage.blade.php
===>>> newItemPage.blade.php

>>>app.blade.php
/client/www.spc-foundation.org.hk/resources/views/frontend/layouts
fixed nav rwd
<style>
	#nav-icon3 {
		top: 10px;
	}
</style>

>>> login.blade.php
change text:Privacy Policy popup
eshop@spc-foundation.org.hk



>>> 2021/05/06
>>>/client/www.spc-foundation.org.hk/resources/views/frontend/shopping
>>> collectionPage.blade.php

>>>index_test.blade.php

>>>find assets path
>>>https://stackoverflow.com/questions/32705709/laravel-5-assets-links
>>>/client/www.spc-foundation.org.hk/public

//
<?php
                $product = 12 / $numOfCols;
                //Setting the counter variable
                $counter = 0;
                foreach ($results as $product) { 
                    //Checking the value of counter variable and then implementing the corresponding code
                    if($counter == 6){
                        $counter=0;
            ?>
>>>index_test.blade.php
>>>index.html
(1)Edit html cards:
border-radius
hover effect

===
>>>210507
/client/www.spc-foundation.org.hk/resources/views/frontend/shopping

>>>collectionPage.blade.php
commit ca8e2dd255ad758b1155a4d96acc9541034e41bf (HEAD -> main, origin/main)
Author: Chris Chen <chiandeye@gmail.com>
Date:   Mon May 10 14:57:12 2021 +0800

    (1)change html:
    index.html
    priduct.tml
    (2)change php:
    collectionPage.blade.php
    index_test.blade.php

>>>210510
add product-2.html

/client/www.spc-foundation.org.hk/resources/views/frontend/shopping

>>210513
>>css
>>>/client/www.spc-foundation.org.hk/public/dist/css
Fixed RWD style

>>>productPage-chris.blade.php
Fixed RWD style
owl-carousel:.owl-nav button.owl-prev
