<!-- <h2 class='m-4 text-center'>Old Nav</h2> -->
<!-- @extends('frontend.layouts.app', ['title' => 'SPC eshop']) -->

@section('content')
<h2 class='m-4 text-center'>New Nav</h2>
		<!-- test -->
	<nav class="text-h-1-4-1 gray-800 sticky-top smart-bg" style="font-size: 14px;" role="navigation">
		<!-- Mobile menu toggle button (hamburger/x icon) -->
		<input id="main-menu-state" type="checkbox" />
		<label class="main-menu-btn" for="main-menu-state">
			<span class="main-menu-btn-icon"></span> Toggle main menu visibility
		</label>
		<a href="/"  style="z-index: 99999;">
		<img class="spc-logo" src="<?=asset('assets/icon/esf-logo.svg')?>" alt="spc-logo">
		</a>
		<!-- Sample menu definition -->
		<ul id="main-menu" class="sm sm-clean mt-lg-4">
		<li><a href="{!! route('shopping::newItemPage') !!}">New Items</a></li>
			<li><a href="#">Pre-orders</a></li>
			<li><a href="{!! route('shopping::limitedEditionPage') !!}">Limited Edition</a></li>
			<li><a href="{!! route('shopping::promotionPage') !!}">Promotion</a></li>


			<li><a href="#">Categories</a>
			{{-- lv2--}}
						<ul>

						<?
							$productCats = \App\ProductCat::where('parent_id',0)->get();	
						?>
						@foreach($productCats as $productCat)
						<li>
						<a href="{!! route('shopping::collectionPage', ['product_cat_id'=> $productCat]) !!}">{{ $productCat->label_eng }}
						<!-- <a href="#">{{ $productCat->label_eng }} -->
						<!-- <svg xmlns="http://www.w3.org/2000/svg" width="10" height="10" fill="currentColor" class="bi bi-caret-right-fill" viewBox="0 0 16 16">
										<path d="m12.14 8.753-5.482 4.796c-.646.566-1.658.106-1.658-.753V3.204a1 1 0 0 1 1.659-.753l5.48 4.796a1 1 0 0 1 0 1.506z"/>
									</svg> -->
								</a>
								<ul><li>
							<?
								$productCat2s = \App\ProductCat::where('parent_id', $productCat->product_cat_id)->get();	

							?>
							@if(isset($productCat2s))
								@foreach($productCat2s as $productCat2)
								<a href="{!! route('shopping::collectionPage', ['product_cat_id'=> $productCat2->product_cat_id]) !!}">{{ $productCat2->label_eng }}</a>
								@endforeach
							@endif
							</li>
							</ul>
						</li>
						@endforeach

						</ul>
						
			</li>
		<li><a href="#">&nbsp</a></li>

		</ul>
		<!-- left -->
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
	<!-- test -->
	<section class="container" style=" margin: 3em 22px;">
	<div>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Quos sit delectus quis dicta accusantium, dignissimos quia? Modi nulla rem ex placeat, rerum magnam. Qui ad voluptates natus deleniti iste illum.</div>
	</section>
<!-- old menu 210520-->
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
	<!-- old menu 210520-->
	
	<script>
// SmartMenus init
$(function() {
  $('#main-menu').smartmenus({
    mainMenuSubOffsetX: -1,
    mainMenuSubOffsetY: 4,
    subMenusSubOffsetX: 6,
    subMenusSubOffsetY: -6
  });
});

// SmartMenus mobile menu toggle button
$(function() {
  var $mainMenuState = $('#main-menu-state');
  if ($mainMenuState.length) {
    // animate mobile menu
    $mainMenuState.change(function(e) {
      var $menu = $('#main-menu');
      if (this.checked) {
        $menu.hide().slideDown(250, function() { $menu.css('display', ''); });
      } else {
        $menu.show().slideUp(250, function() { $menu.css('display', ''); });
      }
    });
    // hide mobile menu beforeunload
    $(window).bind('beforeunload unload', function() {
      if ($mainMenuState[0].checked) {
        $mainMenuState[0].click();
      }
    });
  }
});
	</script>
@endsection


@push('script')


@endpush