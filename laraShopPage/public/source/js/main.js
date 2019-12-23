jQuery(document).ready(function() {
"use strict";


/******************************************
   Newsletter popup
******************************************/

    jQuery('#myModal').appendTo("body");
          function show_modal(){
            jQuery('#myModal').modal('show');
          }

            jQuery('#myModal').modal({
            keyboard: false,
           backdrop:false
          }); 


/******************************************
   Featured slider
******************************************/

jQuery("#featured-slider .slider-items").owlCarousel({
		items: 3,
		itemsDesktop: [1024, 3],
		itemsDesktopSmall: [900, 2],
		itemsTablet: [640, 2],
		itemsMobile: [390, 1],
		navigation: !0,
		navigationText: ['<a class="flex-prev"></a>', '<a class="flex-next"></a>'],
		slideSpeed: 500,
		pagination: !1,
		autoPlay: false
	}),


/******************************************
	Top sellers slider
******************************************/

	jQuery("#top-sellers-slider .slider-items").owlCarousel({
		items: 3,
		itemsDesktop: [1024, 3],
		itemsDesktopSmall: [900, 2],
		itemsTablet: [640, 2],
		itemsMobile: [390, 1],
		navigation: !0,
		navigationText: ['<a class="flex-prev"></a>', '<a class="flex-next"></a>'],
		slideSpeed: 500,
		pagination: !1,
		autoPlay: true
	}),

/******************************************
	Special products slider
******************************************/

	jQuery("#special-products-slider .slider-items").owlCarousel({
		items: 4,
		itemsDesktop: [1024, 4],
		itemsDesktopSmall: [900, 3],
		itemsTablet: [640, 2],
		itemsMobile: [390, 1],
		navigation: !0,
		navigationText: ['<a class="flex-prev"></a>', '<a class="flex-next"></a>'],
		slideSpeed: 500,
		pagination: !1,
		autoPlay: false
	}),




/******************************************
	Our clients slider
******************************************/

	jQuery("#our-clients-slider .slider-items").owlCarousel({
		items: 2,
		itemsDesktop: [1024, 2],
		itemsDesktopSmall: [900, 2],
		itemsTablet: [640, 2],
		itemsMobile: [480, 1],
		navigation: false,
		navigationText: ['<a class="flex-prev"></a>', '<a class="flex-next"></a>'],
		slideSpeed: 500,
		pagination: false,
		autoPlay: true
	}),

/******************************************
	Latest news slider
******************************************/

	jQuery("#latest-news-slider .slider-items").owlCarousel({
		autoplay: !0,
		items: 3,
		itemsDesktop: [1024, 3],
		itemsDesktopSmall: [900, 2],
		itemsTablet: [640, 2],
		itemsMobile: [480, 1],
		navigation: !0,
		navigationText: ['<a class="flex-prev"></a>', '<a class="flex-next"></a>'],
		slideSpeed: 500,
		pagination: !1
	}),


/******************************************
	Mobile menu
******************************************/

	jQuery("#mobile-menu").mobileMenu({
		MenuWidth: 250,
		SlideSpeed: 300,
		WindowsMaxWidth: 767,
		PagePush: !0,
		FromLeft: !0,
		Overlay: !0,
		CollapseMenu: !0,
		ClassName: "mobile-menu"

	}),

/******************************************
	Mega Menu
******************************************/

	jQuery('.mega-menu-title').on('click', function() {
		if (jQuery('.mega-menu-category').is(':visible')) {
			jQuery('.mega-menu-category').slideUp();
		} else {
			jQuery('.mega-menu-category').slideDown();
		}
	});

	$(document).mouseup(function(event){
		console.log(event.target);

		if (!$(".mega-menu-title").is(event.target) && $(".mega-menu-title").has(event.target).length === 0) {
			$(".mega-menu-category").hide();
		}
	});


jQuery('.mega-menu-category .nav > li').hover(function() {
	jQuery(this).addClass("active");
	jQuery(this).find('.popup').stop(true, true).fadeIn('slow');
}, function() {
	jQuery(this).removeClass("active");
	jQuery(this).find('.popup').stop(true, true).fadeOut('slow');
});


jQuery('.mega-menu-category .nav > li.view-more').on('click', function(e) {
	if (jQuery('.mega-menu-category .nav > li.more-menu').is(':visible')) {
		jQuery('.mega-menu-category .nav > li.more-menu').stop().slideUp();
		jQuery(this).find('a').text('More category');
	} else {
		jQuery('.mega-menu-category .nav > li.more-menu').stop().slideDown();
		jQuery(this).find('a').text('Close menu');
	}
	e.preventDefault();
});

/******************************************
   Category desc slider
******************************************/

jQuery("#category-desc-slider .slider-items").owlCarousel({
	autoPlay: true,
	items: 1, //10 items above 1000px browser width
	itemsDesktop: [1024, 1], //5 items between 1024px and 901px
	itemsDesktopSmall: [900, 1], // 3 items betweem 900px and 601px
	itemsTablet: [600, 1], //2 items between 600 and 0;
	itemsMobile: [320, 1],
	navigation: true,
	navigationText: ["<a class=\"flex-prev\"></a>", "<a class=\"flex-next\"></a>"],
	slideSpeed: 500,
	pagination: false
});

/******************************************
   Upsell product slider
******************************************/

jQuery("#upsell-product-slider .slider-items").owlCarousel({
		items: 4,
		itemsDesktop: [1024, 4],
		itemsDesktopSmall: [900, 3],
		itemsTablet: [640, 2],
		itemsMobile: [390, 1],
		navigation: !0,
		navigationText: ['<a class="flex-prev"></a>', '<a class="flex-next"></a>'],
		slideSpeed: 500,
		pagination: !1,
		autoPlay: false
	}),

/******************************************
	Related product slider
******************************************/

	jQuery("#related-product-slider .slider-items").owlCarousel({
		items: 4,
		itemsDesktop: [1024, 4],
		itemsDesktopSmall: [900, 3],
		itemsTablet: [640, 2],
		itemsMobile: [390, 1],
		navigation: !0,
		navigationText: ['<a class="flex-prev"></a>', '<a class="flex-next"></a>'],
		slideSpeed: 500,
		pagination: !1,
		autoPlay: true
	}),

/******************************************
	Related posts
******************************************/

	jQuery("#related-posts .slider-items").owlCarousel({
		items: 3,
		itemsDesktop: [1024, 3],
		itemsDesktopSmall: [900, 3],
		itemsTablet: [640, 2],
		itemsMobile: [390, 1],
		navigation: !0,
		navigationText: ['<a class="flex-prev"></a>', '<a class="flex-next"></a>'],
		slideSpeed: 500,
		pagination: !1,
		autoPlay: true
	}),


/******************************************
	testimonials slider
******************************************/

	jQuery("#testimonials-slider .slider-items").owlCarousel({
		items: 1,
		itemsDesktop: [1024, 1],
		itemsDesktopSmall: [900, 1],
		itemsTablet: [640, 1],
		itemsMobile: [390, 1],
		navigation: false,
		navigationText: ['<a class="flex-prev"></a>', '<a class="flex-next"></a>'],
		slideSpeed: 500,
		pagination: false,
		autoPlay: true,
		singleItem: true,
        transitionStyle: "goDown"
	}),

/******************************************
	Home testimonials slider
******************************************/

	jQuery(".subDropdown")[0] && jQuery(".subDropdown").on("click", function() {
		jQuery(this).toggleClass("plus"), jQuery(this).toggleClass("minus"), jQuery(this).parent().find("ul").slideToggle()
	})
if (jQuery('#home-testimonials-slider').length) {
	jQuery('#home-testimonials-slider').bxSlider({
		auto: true,
		infiniteLoop: true,
		hideControlOnEnd: true
	});
}

/******************************************
    PRICE FILTER
******************************************/

jQuery('.slider-range-price').each(function() {
	var min = jQuery(this).data('min');
	var max = jQuery(this).data('max');
	var unit = jQuery(this).data('unit');
	var value_min = jQuery(this).data('value-min');
	var value_max = jQuery(this).data('value-max');
	var label_reasult = jQuery(this).data('label-reasult');
	var t = jQuery(this);
	jQuery(this).slider({
		range: true,
		min: min,
		max: max,
		values: [value_min, value_max],
		slide: function(event, ui) {
			var result = label_reasult + " " + unit + ui.values[0] + ' - ' + unit + ui.values[1];
			console.log(t);
			t.closest('.slider-range').find('.amount-range-price').html(result);
		}
	});
})

/******************************************
    Footer expander
******************************************/

jQuery(".collapsed-block .expander").on("click", function(e) {
	var collapse_content_selector = jQuery(this).attr("href");
	var expander = jQuery(this);
	if (!jQuery(collapse_content_selector).hasClass("open")) expander.addClass("open").html("&minus;");
	else expander.removeClass("open").html("+");
	if (!jQuery(collapse_content_selector).hasClass("open")) jQuery(collapse_content_selector).addClass("open").slideDown("normal");
	else jQuery(collapse_content_selector).removeClass("open").slideUp("normal");
	e.preventDefault()
});

/******************************************
    Category sidebar
******************************************/

jQuery(function() {
	jQuery(".category-sidebar ul > li.cat-item.cat-parent > ul").hide();
	jQuery(".category-sidebar ul > li.cat-item.cat-parent.current-cat-parent > ul").show();
	jQuery(".category-sidebar ul > li.cat-item.cat-parent.current-cat.cat-parent > ul").show();
	jQuery(".category-sidebar ul > li.cat-item.cat-parent").on("click", function() {
		if (jQuery(this).hasClass('current-cat-parent')) {
			var li = jQuery(this).closest('li');
			li.find(' > ul').slideToggle('fast');
			jQuery(this).toggleClass("close-cat");
		} else {
			var li = jQuery(this).closest('li');
			li.find(' > ul').slideToggle('fast');
			jQuery(this).toggleClass("cat-item.cat-parent open-cat");
		}
	});
	jQuery(".category-sidebar ul.children li.cat-item,ul.children li.cat-item > a").on("click", function(e) {
		e.stopPropagation();
	});
});

/******************************************
    colosebut
******************************************/

jQuery("#colosebut1").on("click", function() {
	jQuery("#div1").fadeOut("slow");
});
jQuery("#colosebut2").on("click", function() {
	jQuery("#div2").fadeOut("slow");
});
jQuery("#colosebut3").on("click", function() {
	jQuery("#div3").fadeOut("slow");
});
jQuery("#colosebut4").on("click", function() {
	jQuery("#div4").fadeOut("slow");
});


/******************************************
    totop
******************************************/
// browser window scroll (in pixels) after which the "back to top" link is shown
var offset = 300,
	//browser window scroll (in pixels) after which the "back to top" link opacity is reduced
	offset_opacity = 1200,
	//duration of the top scrolling animation (in ms)
	scroll_top_duration = 700,
	//grab the "back to top" link
	jQueryback_to_top = jQuery('.totop');

//hide or show the "back to top" link
jQuery(window).scroll(function() {
	(jQuery(this).scrollTop() > offset) ? jQueryback_to_top.addClass('totop-is-visible'): jQueryback_to_top.removeClass('totop-is-visible totop-fade-out');
	if (jQuery(this).scrollTop() > offset_opacity) {
		jQueryback_to_top.addClass('totop-fade-out');
	}
});

//smooth scroll to top
jQueryback_to_top.on('click', function(event) {
	event.preventDefault();
	jQuery('body,html').animate({
		scrollTop: 0,
	}, scroll_top_duration);
});

/******************************************
    tooltip
******************************************/


jQuery('[data-toggle="tooltip"]').tooltip();


/* ---------------------------------------------
    slider typist
--------------------------------------------- */
if (typeof Typist == 'function') {
	new Typist(document.querySelector('.typist-element'), {
		letterInterval: 60,
		textInterval: 3000
	});
}
	$(document).ready(function(){
		
		function refreshPage(totalQty, totalPrice){
			$('.cart-totalQty').text(totalQty);
			$('.cart-totalPrice').text(totalPrice);
		}
		
		function formatNumber(a){
			let x = a/1000000;
			let y = a%1000000/1000;
			let z = a%1000000%1000;

			function formatNo(x){
				if(!x){
					return '000';
				}else if(x/100){ 	//abc a # 0
					return x;
				}						
				else if( x/10 ){	//abc a = 0 && b # 0
					return '0'+x;
				}
				else {
					return '00'+x;
				}
			}
			x = parseInt(formatNo(x));
			y = parseInt(formatNo(y));
			z = parseInt(formatNo(z));
			if(!x){
				x = '';
			}else{
				x +='.';
			}
			if(!x && !y && !z){
				y = '';
				z = 0;
			}else if (x || y && !z){
				y+='.';
				z = '000'
			}
			return (x+y+z)
		}
		
		$('.add-to-cart-mt,.pro-add-to-cart,.button-cart').click(function(){
			let addCartId = $(this).attr('id');
			$.ajax({
				url : 'http://localhost:8000/apple.store.vn/cart.html',
				type : 'POST',
				dataType : 'JSON',
				data : {
					'addCartId' : addCartId,
					'action' : 'addToCart'
				},
				success: function(msg){
					console.log(msg.id);
					$('.modal').modal('show');
					$('.modal-content-text').find('b').text(msg.name);
					refreshPage(msg.totalQty,formatNumber(msg.totalPromtPrice))
				},
				error: function(){
					alert('error');
				}				
			});

		})


		$('.icon-close').click(function(){
			let idItem = $(this).attr('id');
			// console.log(idItem)
			$.ajax({
				url: 'http://localhost:8000/apple.store.vn/cart.html/deleteItem',
				type : 'POST',
				dataType: 'JSON',
				data: ({
					'delItemId': idItem,
					'action' : 'deleteAnItem',
				}),
				success: function(success){
					console.log('id: '+success.id);
					$('#productRow-'+success.id).remove();					
					let totalPrice = formatNumber(success.totalPrice);
					let totalPromtPrice = formatNumber(success.totalPrice);
					$('.totalPrice').text(totalPrice+'₫');
					$('.totalPromtPrice').text(totalPromtPrice+'₫');					
					refreshPage(success.totalQty,formatNumber(success.totalPromtPrice));
				},
				error: function(){
					alert('484'+'deleteAnItem');
				}
			});
		})

		$('.fa-trash-o').click(function(){
			$.ajax({
				url: "http://localhost:8000/apple.store.vn/cart.html/deleteAllItem",
				type :'POST',
				dataType: 'JSON',
				data : ({
					'action' : 'deleteAllItem'
				}),
				success: function(success){
					if(success){
						$('.allCart').remove();
						$('.totalPrice').text(0+'₫');
						$('.totalPromtPrice').text(0+'₫');					
						refreshPage(0,0);
					}
				},
				error: function(){
					alert('508'+'deleteAllItem');
				},
			})
		})

		$('.fa-edit').click(function(){
			let id_edit = $(this).attr('id');
			let qty = $(this).siblings()[0].value
			console.log( 'id: '+id_edit)
			console.log(qty)
			$.ajax({
				url: 'http://localhost:8000/apple.store.vn/cart.html/updateItems',
				type: 'POST',
				dataType: 'JSON',
				data: ({
					'id' : id_edit,
					'qty' : qty,
				}),
				success: function(success){
					if(success){
						// alert('success');
						let price = formatNumber(success.price);
						let promtPrice = formatNumber(success.promtPrice);
						let totalPrice = formatNumber(success.totalPrice);
						let totalPromtPrice = formatNumber(success.totalPrice);
						$('#product-price-'+id_edit).text(price+'₫');
						$('#product-promotionPrice-'+id_edit).text(promtPrice+'₫');
						$('.totalPrice').text(totalPrice+'₫');
						$('.totalPromtPrice').text(totalPromtPrice+'₫');					
						refreshPage(success.totalQty,formatNumber(success.totalPromtPrice));
					}
				},
				error: function(){
					alert('error');
				}

			})
		})

	})

	$.ajaxSetup({
		headers: {
			'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
		}


	});

	
})


