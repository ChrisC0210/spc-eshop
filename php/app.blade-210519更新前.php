<!DOCTYPE html>
<html lang="en">

<head>
    
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>SPC eShop</title>
  {{-- {{ $title?$title:'St. Paul’s College Foundation Limited – eShop' }} --}}
  <link rel="shortcut icon" type="image/x-icon" href="<?=asset('assets/icon/spc.ico')?>">
	<link rel="stylesheet" href="<?=asset('dist/css/all.min.css')?>">
	<link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css" />
	<link rel="stylesheet" href="<?=asset('dist/css/owl.carousel.min.css')?>" />
	<link rel="stylesheet" href="<?=asset('dist/css/owl.theme.default.min.css')?>" />
  <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
</head>
<style>
	#nav-icon3 {
		top: 10px;
	}
		/* menu */
		.dropdown-menu a:hover {
		color: #274778;
		background: #d5d5d5;
	}

	.dropdown-sub a:hover {
		color: #274778;
		background: #ffffff;
	}

	.dropdown-menu li.dropdown-sub {
		min-width: 100%;
		/* Set width of the dropdown */
		background: #f7f7f7;
		display: none;
		position: absolute;
		z-index: 999;
		left: 0;
	}

	ul li:hover li.dropdown-sub {
		display: block;
		/* Display the dropdown */
	}

	.dropdown-menu {
		background-color: #fcfcfc;
		border: 0px solid rgba(0, 0, 0, 0.3) !important;
		box-shadow: 0px 2px 2px #00000049;
		-webkit-box-shadow: 0px 2px 2px #00000049;
	}
	.show.show-dropdown {
			display: block ;
			/* position: fixed ; */
			top: 0px ;
			left: 178px ;
		}
	@media screen and (max-width: 1300px) {
		.nav-left ul {
			padding-top: 0px;
		}

	}
	.nav-link.dropdown-toggle.dropdown-sub::after {
  border: none;
  content: " ";
  vertical-align: 0;
}
</style>
<body>
  @include('frontend.layouts.top_bar')

  {{-- start  --}}
  {{-- <div class="text-center pt-2 header-promotion white text-h-1-4-1">Free Shipping Now!</div> --}}
	<div class="sticky-top spc-nav-all">
		<a href="http://spceshop.vela.hk/">
			<img class="spc-logo" src="<?=asset('assets/icon/esf-logo.svg')?>" alt="spc-logo">
		</a>
		<nav class=" text-h-1-4-1 gray-800">
			<div id="nav-icon3">
				<span></span>
				<span></span>
				<span></span>
				<span></span>
			</div>
			<div class="nav-left">
				<ul class="d-flex ">
					<li class="nav-item ">
						<a class="nav-link" href="{!! route('shopping::newItemPage') !!}">New Items</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="#">Pre-orders</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="{!! route('shopping::limitedEditionPage') !!}">Limited Edition</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="{!! route('shopping::promotionPage') !!}">Promotion</a>
					</li>
					<!-- <li class="nav-item dropdown">
						<a class="nav-link dropdown-toggle" href="#" id="dropdown03" data-toggle="dropdown" aria-haspopup="true"
							aria-expanded="false">Categories</a>
						<div class="dropdown-menu text-h-1-4-1" aria-labelledby="dropdown03" >
							{{-- lv2--}}
							<?
								$productCats = \App\ProductCat::where('parent_id',0)->get();	
							?>
							@foreach($productCats as $productCat)
							<a class="nav-link dropdown-toggle" href="#" id="dropdown04" data-toggle="dropdown" aria-haspopup="true"
							aria-expanded="false">{{ $productCat->label_eng }}</a>
							<div class="dropdown-menu text-h-1-5-1" aria-labelledby="dropdown04" >
								<?
									$productCat2s = \App\ProductCat::where('parent_id', $productCat->product_cat_id)->get();	

								?>
								@if(isset($productCat2s))
									@foreach($productCat2s as $productCat2)
									<a class="dropdown-item" href="{!! route('shopping::collectionPage', ['product_cat_id'=> $productCat2->product_cat_id]) !!}">{{ $productCat2->label_eng }}</a>
									@endforeach
								@endif
								
							</div>
							@endforeach
							
						</div>
					</li> -->

					<li class="nav-item dropdown">
						<a class="nav-link dropdown-toggle" href="#" id="dropdown04" data-toggle="dropdown" aria-haspopup="true"
							aria-expanded="false">Categories</a>
						<div class="dropdown-menu text-h-1-4-1" aria-labelledby="dropdown04" >
							{{-- lv2--}}



							<ul>

							<?
								$productCats = \App\ProductCat::where('parent_id',0)->get();	
							?>
							@foreach($productCats as $productCat)
							<li class="nav-item dropdown">
							<a class="nav-link dropdown-toggle dropdown-sub" href="#" id="dropdown05" data-toggle="dropdown" aria-haspopup="true"
							aria-expanded="false">{{ $productCat->label_eng }}
							<svg xmlns="http://www.w3.org/2000/svg" width="10" height="10" fill="currentColor" class="bi bi-caret-right-fill" viewBox="0 0 16 16">
											<path d="m12.14 8.753-5.482 4.796c-.646.566-1.658.106-1.658-.753V3.204a1 1 0 0 1 1.659-.753l5.48 4.796a1 1 0 0 1 0 1.506z"/>
										</svg></a>
							<div class="dropdown-menu text-h-1-4-1 show-dropdown" aria-labelledby="dropdown05" >
								<?
									$productCat2s = \App\ProductCat::where('parent_id', $productCat->product_cat_id)->get();	

								?>
								@if(isset($productCat2s))
									@foreach($productCat2s as $productCat2)
									<a class="nav-link" href="{!! route('shopping::collectionPage', ['product_cat_id'=> $productCat2->product_cat_id]) !!}">{{ $productCat2->label_eng }}</a>
									@endforeach
								@endif
								
							</div>
							</li>
							@endforeach

							</ul>
							
						</div>
					</li>

				</ul>
			</div>
			<div class="nav-right d-flex">
				<li class="nav-item dropdown" style="margin-top: -14px;">
					<a class=" nav-link dropdown-toggle mb-4" href="#" id="dropdown0" data-toggle="dropdown" aria-haspopup="true"
						aria-expanded="false">
						<svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" viewBox="0 0 50 50">
							<g id="Group_1072" data-name="Group 1072" transform="translate(-197 -210)">
								<path id="Path_873" data-name="Path 873" d="M0,0H50V50H0Z" transform="translate(197 210)" fill="#fff" />
								<g id="Group_1071" data-name="Group 1071" transform="translate(-14.182 -4.5)">
									<ellipse id="Ellipse_98" data-name="Ellipse 98" cx="11.234" cy="11" rx="11.234" ry="11"
										transform="translate(224.682 222.5)" fill="none" stroke="#707070" stroke-width="1" />
									<path id="Path_870" data-name="Path 870"
										d="M6894.073,3102.459s3.363-9.085,15.189-9.085,16.264,9.085,16.264,9.085"
										transform="translate(-6673.392 -2846.459)" fill="none" stroke="#707070" stroke-width="1" />
								</g>
							</g>
						</svg>
						@if(Auth::guard('member')->check())
							<? $login_user = Auth::guard('member')->user() ?>
							<span class="text-none"><?= 'hi '.$login_user->first_name_eng?></span></a>
							<div class="dropdown-menu text-h-1-4-1" aria-labelledby="dropdown04">
								<a class="dropdown-item" href="{!! route('member::profile') !!}">My Profile</a>
								<a class="dropdown-item" href="{!! route('member::frontOrderHistory') !!}">Order History</a>
								<a class="dropdown-item" href="{!! route('member::logout') !!}">log out</a>
							</div>
						@else
						<span class="text-none">Login / Register </span></a>
					<div class="dropdown-menu text-h-1-4-1" aria-labelledby="dropdown04">
						<a class="dropdown-item" href="{!!route('member::showLoginForm') !!}">Login / Register</a>
					</div>
					@endif
				</li>
				<!-- <a class="mr-4" href="./login.html">
					<svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" viewBox="0 0 50 50">
						<g id="Group_1072" data-name="Group 1072" transform="translate(-197 -210)">
							<path id="Path_873" data-name="Path 873" d="M0,0H50V50H0Z" transform="translate(197 210)" fill="#fff" />
							<g id="Group_1071" data-name="Group 1071" transform="translate(-14.182 -4.5)">
								<ellipse id="Ellipse_98" data-name="Ellipse 98" cx="11.234" cy="11" rx="11.234" ry="11"
									transform="translate(224.682 222.5)" fill="none" stroke="#707070" stroke-width="1" />
								<path id="Path_870" data-name="Path 870"
									d="M6894.073,3102.459s3.363-9.085,15.189-9.085,16.264,9.085,16.264,9.085"
									transform="translate(-6673.392 -2846.459)" fill="none" stroke="#707070" stroke-width="1" />
							</g>
						</g>
					</svg>
					<span class="text-none dropdown">Login / Register</span>
				</a> -->

      
        {{-- ..... --}}
        <a href="{!! route('shoppingCart::frontShowCartListing') !!}">
          <span class="cart spc-blue icon-basket"><span><?=Cart::content()->count()?></span></span>
          {{-- class="total-count" --}}
          <svg id="icon-basket" xmlns="http://www.w3.org/2000/svg" width="30" height="30" viewBox="0 0 50 50">
						<rect id="Rectangle_434" data-name="Rectangle 434" width="50" height="50" fill="none" />
						<g id="Group_1001" data-name="Group 1001" transform="translate(-6882.778 -3087.228)">
							<path id="Path_804" data-name="Path 804" d="M6895.929,3096.4h24.382l4.486,23.751h-34.035Z"
								transform="translate(-0.001 6.984)" fill="none" stroke="#707070" stroke-width="1" />
							<path id="Path_805" data-name="Path 805"
								d="M6894.073,3103.771s1.877-10.4,8.476-10.4,9.074,10.4,9.074,10.4" transform="translate(4.931 3.949)"
								fill="none" stroke="#707070" stroke-width="1" />
						</g>
					</svg>
          <span class="text-none">Basket</span>
        </a>
        {{-- ..... --}}

			</div>
		</nav>
	</div>
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
        <a href="{!! route('shoppingCart::frontShowCartListing') !!}" type="button" class="btn btn-primary">check out</a>
      </div>
    </div>
  </div>
</div> 
<!-- cart -->

  {{-- end --}}

  
  <!-- search box -->
  @yield('content')
  <!-- content end -->
  <!-- footer start -->
  <footer class="mt-4 mb-4 pt-4 border-top">
    <div class="container">
      <div class="row">
        <div class="col-6 col-md mb-4 text-h-1-4-1">
          <h5 class="text-h-2-5-2">Product</h5>
          <ul class="list-unstyled text-small">
            <li><a class="text-muted" href="#">Apparel</a></li>
            <li><a class="text-muted" href="#">Accessories</a></li>
            <li><a class="text-muted" href="#">Glassware</a></li>
            <li><a class="text-muted" href="#">Electronics</a></li>
            <li><a class="text-muted" href="#">Gift vouchers</a></li>
          </ul>
        </div>
        <div class="col-6 col-md mb-4 text-h-1-4-1">
          <h5 class="text-h-2-5-2">FAQ</h5>
          <ul class="list-unstyled text-small">
            <li><a class="text-muted" href="#">Help</a></li>
            <li><a class="text-muted" href="#">Track Order</a></li>
            <li><a class="text-muted" href="#">Delivery & Returns</a></li>
          </ul>
        </div>
        <div class="col-6 col-md mb-4 text-h-1-4-1">
          <h5 class="text-h-2-5-2">More From SPC</h5>
          <ul class="list-unstyled text-small">
            <li><a class="text-muted" href="#">Facebook</a></li>
            <li><a class="text-muted" href="#">instagram</a></li>
          </ul>
        </div>
        <div class="col-6 col-md mb-4 text-h-1-4-1">
          <h5 class="text-h-2-5-2">Contact</h5>
          <ul class="list-unstyled text-small">
            <li><a class="text-muted" href="#">69 Bonham Road, Hong Kong.</a></li>
            <li><a class="text-muted" href="#">Tel: (852) 2546 2241</a></li>
            <li><a class="text-muted" href="#">Email: mail@spc.edu.hk</a></li>
            <li><a class="text-muted" href="#">Terms</a></li>
          </ul>
        </div>
      </div>
    </div>
  
  </footer>
  <div class="text-center pt-2 footer-end white text-h-1-4-1 pt-4">Copyright © 2021 St. Paul’s College. All rights reserved.</div>
  <!-- footer end -->
  <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js "></script>
	<script type="text/javascript" src="<?=asset('./dist/js/popper.min.js')?>"></script>
	<script type="text/javascript" src="<?=asset('./dist/js/bootstrap.min.js')?>"></script>
	<script src="<?=asset('./dist/js/swiper-bundle.min.js')?>"></script>
	<script src="<?=asset('./dist/js/aos.js')?>"></script>
	<script src="<?=asset('./dist/js/owl.carousel.min.js')?>"></script>
		<!-- //shopping-cart -->
		<script src="<?=asset('./dist/js/shopping-cart.js')?>"></script>
	<script>
	$(document).ready(function(){
		//nav
		//$(".nav-left").hide();
		$('#nav-icon3').click(function(){
			$(this).toggleClass('open');
			if ($(this).hasClass('open')) {
				$(".nav-left").show();
				$(".nav-left").css("display", "block");

			} else {
				$(".nav-left").hide();
				$(".nav-left").css("display", "none");

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
		// $('.owl-carousel').owlCarousel({
		// 	nav:true,
		// 	dots: false,
		// 	margin:20,
		// 	items:1,
		// 	responsive:{
		// 		900:{
		// 			items:4,
		// 		},
		// 		800:{
		// 			items:1,
		// 		},
		// 		500:{
		// 			items:1,
		// 		},
		// 	}
		// });
				//owl
				$('.owl-carousel-1').owlCarousel({
			nav: true,
			dots: false,
			loop: true,
			autoplay:true,
			autoplayTimeout:3000,
			autoplayHoverPause:true,
			margin: 20,
			items: 4,
			responsive: {
				780: {
					items: 4,
				},
				300: {
					items: 2,
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
			//menu
			$('.dropdown-menu a.dropdown-toggle').on('click', function (e) {
			if (!$(this).next().hasClass('show')) {
				$(this).parents('.dropdown-menu').first().find('.show').removeClass('show');
			}
			var $subMenu = $(this).next('.dropdown-menu');
			$subMenu.toggleClass('show');


			$(this).parents('li.nav-item.dropdown.show').on('hidden.bs.dropdown', function (e) {
				$('.dropdown-submenu .show').removeClass('show');
			});


			return false;
		});
		AOS.init();
		//dropdown toggle
		if (document.documentElement.clientWidth < 950) {
			$('.bi-caret-right-fill').addClass('none');
			$('.dropdown-sub').addClass('add-toggle');
		}
		else {
			$('.bi-caret-right-fill').removeClass('none');
		}
	
	});

	</script>

@yield('scripts')
</html>

