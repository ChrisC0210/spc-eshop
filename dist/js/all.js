$(document).ready(function () {
	//
	$('.dropdown-toggle').dropdown()
	//
	var zindex = 10;

	$("div.card").click(function (e) {
		e.preventDefault();

		var isShowing = false;

		if ($(this).hasClass("show")) {
			isShowing = true
		}

		if ($("div.cards").hasClass("showing")) {
			// a card is already in view
			$("div.card.show")
				.removeClass("show");

			if (isShowing) {
				// this card was showing - reset the grid
				$("div.cards")
					.removeClass("showing");
			} else {
				// this card isn't showing - get in with it
				$(this)
					.css({
						zIndex: zindex
					})
					.addClass("show");

			}

			zindex++;

		} else {
			// no cards in view
			$("div.cards")
				.addClass("showing");
			$(this)
				.css({
					zIndex: zindex
				})
				.addClass("show");

			zindex++;
		}

	});
	//
	//cards
	$("ul li:has(ul)").addClass("has-submenu");
	$("ul li ul").addClass("sub-menu");
	$("ul.dropdown li").hover(function () {
		$(this).addClass("hover")
	}, function () {
		$(this).removeClass("hover")
	});
	var $menu = $("#menu"),
		$menulink = $("#spinner-form"),
		$search = $("#search"),
		$search_box = $(".search_box"),
		$menuTrigger = $(".has-submenu>a");
	$menulink.click(function (e) {
		$menulink.toggleClass("active");
		$menu.toggleClass("active");
		if ($search.hasClass("active")) {
			$(".menu.active").css("padding-top", "50px")
		}
	});
	$search.click(function (e) {
		e.preventDefault();
		$search_box.toggleClass("active")
	});
	$menuTrigger.click(function (e) {
		e.preventDefault();
		var t = $(this);
		t.toggleClass("active").next("ul").toggleClass("active")
	});
	$("ul li:has(ul)");
	$(function () {
		var e = $(document).scrollTop();
		var t = $(".nav_wrapper").outerHeight();
		$(window).scroll(function () {
			var n = $(document).scrollTop();
			if ($(document).scrollTop() >= 50) {
				$(".nav_wrapper").css("position", "fixed")
			} else {
				$(".nav_wrapper").css("position", "fixed")
			}
			if (n > t) {
				$(".nav_wrapper").addClass("scroll")
			} else {
				$(".nav_wrapper").removeClass("scroll")
			}
			if (n > e) {
				$(".nav_wrapper").removeClass("no-scroll")
			} else {
				$(".nav_wrapper").addClass("no-scroll")
			}
			e = $(document).scrollTop()
		})
	});
	//js slider
// 	window.onload = function() {
// 		$('.slider1').jdSlider();
// 		$('.slider2').jdSlider({
// 				wrap: '.slide-inner',
// 				isAuto: true,
// 				isLoop: true
// 		});
// 		$('.slider3').jdSlider({
// 				wrap: '.slide-inner',
// 				slideShow: 2,
// 				slideToScroll: 2,
// 				isLoop: false,
// 				responsive: [{
// 						viewSize: 768,
// 						settings: {
// 								slideShow: 1,
// 								slideToScroll: 1
// 						}
// 				}]
// 		});
// 		$('.slider3-2').jdSlider({
// 				wrap: '.slide-inner',
// 				slideShow: 2,
// 				slideToScroll: 1,
// 				isLoop: true,
// 				responsive: [{
// 						viewSize: 768,
// 						settings: {
// 								slideShow: 1
// 						}
// 				}]
// 		});
// 		$('.slider3-3').jdSlider({
// 				wrap: '.slide-inner',
// 				slideShow: 2,
// 				slideToScroll: 2,
// 				isLoop: true,
// 				responsive: [{
// 						viewSize: 768,
// 						settings: {
// 								slideShow: 1,
// 								slideToScroll: 1
// 						}
// 				}]
// 		});
// 		$('.slider4').jdSlider({
// 				wrap: '.slide-inner',
// 				isSliding: false,
// 				isAuto: true,
// 				isLoop: true,
// 				isDrag: false
// 		});
// };
	//
	//swiper
	// var swiper = new Swiper('.swiper-container', {
	// 	speed: 600,
	// 	parallax: true,
	// 	loop: true,
	// 	pagination: {
	// 		el: '.swiper-pagination',
	// 		clickable: true,
	// 	},
	// 	navigation: {
	// 		nextEl: '.swiper-button-next',
	// 		prevEl: '.swiper-button-prev',
	// 	},
	// });
	//

	var swiper = new Swiper('.swiper-container-1', {
		effect: 'coverflow',
		grabCursor: true,
		centeredSlides: true,
		slidesPerView: 'auto',
		//
		//
		coverflowEffect: {
				rotate: 50,
				stretch: 0,
				depth: 100,
				modifier: 1,
				slideShadows: true,
		},
		pagination: {
				el: '.swiper-pagination',
				clickable: true,
		},
		navigation: {
			nextEl: '.swiper-button-next',
			prevEl: '.swiper-button-prev',
		},
		autoplay: true,
	});
	//
	$('.swiper-slide-1').click(function() {
    var $this = $(this);
    if ($this.hasClass('swiper-slide-active')) {
        $this.removeClass('swiper-slide-active');
    } else if ($this.hasClass('swiper-slide-next')) {
        $this.removeClass('swiper-slide-next').addClass('swiper-slide-active');
    } else if ($this.hasClass('swiper-slide-prev')){
			//$this.removeClass('swiper-slide-prev').addClass('swiper-slide-active');
    }
});
	//
	//2 Initialize Swiper -->
    // var swiper2 = new Swiper('.swiper-container-2', {
    //   pagination: {
    //     el: '.swiper-pagination',
		// 		dynamicBullets: true,
		// 		clickable: true,
		// 	},
		// 	autoplay: {
		// 		delay: 1000,
		// 		stopOnLastSlide: false,
		// 		disableOnInteraction: true,
		// 		waitForTransition: false, 
		// 	},
		// 	loop: true,
		// 	navigation: {
    //     nextEl: '.swiper-button-next',
    //     prevEl: '.swiper-button-prev',
    //   },
		// });
		//
var swiper = new Swiper('.swiper-container-2', {
	loop: true,
	// autoplay: {
	// 	delay: 5000,
	// },
	autoplay: true,
	spaceBetween: 30,
	effect: 'fade',
	freeMode: true,
  pagination: {
		el: '.swiper-pagination',
		dynamicBullets: true,
    clickable: true,
  },
  navigation: {
    nextEl: '.swiper-button-next',
    prevEl: '.swiper-button-prev',
  },

  /* ON INIT AUTOPLAY THE FIRST VIDEO */
  on: {
    init: function () {
      console.log('swiper initialized');
      var currentVideo =  $("[data-swiper-slide-index=" + this.realIndex + "]").find("video");
      currentVideo.trigger('play');
    },
  },
});

/* GET ALL VIDEOS */
var sliderVideos = $(".swiper-slide video");

/* SWIPER API - Event will be fired after animation to other slide (next or previous) */
swiper.on('slideChange', function () {
  console.log('slide changed');
  /* stop all videos (currentTime buggy without this loop idea) */
  sliderVideos.each(function( index ) {
    this.currentTime = 0;
  });

  /* SWIPER GET CURRENT AND PREV SLIDE (AND VIDEO INSIDE) */
  var prevVideo =  $("[data-swiper-slide-index=" + this.previousIndex + "]").find("video");
  var currentVideo =  $("[data-swiper-slide-index=" + this.realIndex + "]").find("video");
  prevVideo.trigger('stop');
  currentVideo.trigger('play');
});
		//
		//
		//Get the button
var mybutton = document.getElementById("myBtn");

// When the user scrolls down 20px from the top of the document, show the button
window.onscroll = function() {scrollFunction()};

function scrollFunction() {
  if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
    mybutton.style.display = "block";
  } else {
    mybutton.style.display = "none";
  }
}

// When the user clicks on the button, scroll to the top of the document
function topFunction() {
  document.body.scrollTop = 0;
  document.documentElement.scrollTop = 0;
}		
});