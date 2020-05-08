//GET ORDER ID
var getUrl = window.location;
var baseUrl = getUrl.protocol + '//' + getUrl.host + '/' + getUrl.pathname.split('/')[1];

(function($) {
	'use strict';
	var nav_offset_top = $('header').height() + 50;
	function navbarFixed() {
		if ($('.header_area').length) {
			$(window).scroll(function() {
				var scroll = $(window).scrollTop();
				if (scroll >= nav_offset_top) {
					$('.header_area').addClass('navbar_fixed');
					$('#navbar-images').attr('src', baseUrl + '/assets/img/logo_dark.png');
					$('#category-image').attr('src', baseUrl + '/assets/img/ico-resiet_dark.png');
					$('#navbar-images').css('padding-top', '1rem');
					$('.menu_nav').css('padding-top', '0.5rem');
					$('#shopping-cart-separator').css('border-left', 'black solid 1px');
					$('#shopping-cart-separator').css('color', 'black');
					$('#navbar-signup a').css('color', ' rgb(95, 95, 95)');
					$('#categoryDropdown').css('color', 'rgb(95, 95, 95)');
					$('#header-articles a').css('color', 'rgb(95, 95, 95)');
					$('#header-prakerja a').css('color', 'rgb(95, 95, 95)');
					$('#header-categories').css('padding-top', '0.5rem');
					$('#header-articles').css('padding-top', '0.5rem');
					$('#header-signup').css('padding-top', '0.5rem');
					$('#header-prakerja').css('padding-top', '0.5rem');
				} else {
					$('.header_area').removeClass('navbar_fixed');
					$('#navbar-images').attr('src', baseUrl + '/assets/img/logo.png');
					$('#category-image').attr('src', baseUrl + '/assets/img/ico-resiet.png');
					$('#navbar-images').css('padding-top', '0rem');
					$('.menu_nav').css('padding-top', '0rem');
					$('#shopping-cart-separator').css('color', 'white');
					$('#navbar-signup a').css('color', '#00c5dd');
					$('#categoryDropdown').css('color', 'white');
					$('#header-articles a').css('color', 'white');
					$('#header-prakerja a').css('color', 'white');
					$('#shopping-cart-separator').css('border-left', 'white solid 1px');
					$('#header-categories').css('padding-top', '0rem');
					$('#header-articles').css('padding-top', '0rem');
					$('#header-signup').css('padding-top', '0rem');
					$('#header-prakerja').css('padding-top', '0rem');
				}
			});
		}
	}
	navbarFixed();
	$('#search_input_box').hide();
	$('#search').on('click', function() {
		$('#search_input_box').slideToggle('slow');
		$('#search_input').focus();
	});
	$('#close_search').on('click', function() {
		$('#search_input_box').slideUp('slow');
	});
	function active_course() {
		let prevUrl = baseUrl + '/assets/img/prev.png';
		let nextUrl = baseUrl + '/assets/img/next.png';

		if ($('.active_course').length) {
			$('.active_course').owlCarousel({
				loop: true,
				margin: 20,
				items: 3,
				nav: true,
				autoplay: 2500,
				smartSpeed: 1500,
				dots: false,
				responsiveClass: true,
				thumbs: true,
				thumbsPrerendered: true,
				navText: [ "<img src='" + prevUrl + "'>", "<img src='" + nextUrl + "'>" ],
				responsive: {
					0: { items: 1, margin: 0 },
					991: { items: 2, margin: 30 },
					1200: { items: 3, margin: 30 }
				}
			});
		}
	}
	active_course();
	function active_event() {
		if ($('.active_event').length) {
			$('.active_event').owlCarousel({
				loop: true,
				margin: 30,
				items: 2,
				nav: false,
				autoplay: 2500,
				smartSpeed: 1500,
				dots: false,
				responsiveClass: true,
				thumbs: true,
				thumbsPrerendered: true
			});
		}
	}
	active_event();
	function testimonials_slider() {
		if ($('.testi_slider').length) {
			$('.testi_slider').owlCarousel({
				loop: true,
				margin: 30,
				items: 2,
				autoplay: 2500,
				smartSpeed: 2500,
				dots: true,
				responsiveClass: true,
				responsive: { 0: { items: 1 }, 991: { items: 2 } }
			});
		}
	}
	testimonials_slider();
	function mailChimp() {
		$('#mc_embed_signup').find('form').ajaxChimp();
	}
	mailChimp();
	$('select').niceSelect();
	if ($('#mapBox').length) {
		var $lat = $('#mapBox').data('lat');
		var $lon = $('#mapBox').data('lon');
		var $zoom = $('#mapBox').data('zoom');
		var $marker = $('#mapBox').data('marker');
		var $info = $('#mapBox').data('info');
		var $markerLat = $('#mapBox').data('mlat');
		var $markerLon = $('#mapBox').data('mlon');
		var map = new GMaps({
			el: '#mapBox',
			lat: $lat,
			lng: $lon,
			scrollwheel: false,
			scaleControl: true,
			streetViewControl: false,
			panControl: true,
			disableDoubleClickZoom: true,
			mapTypeControl: false,
			zoom: $zoom,
			styles: [
				{ featureType: 'water', elementType: 'geometry.fill', stylers: [ { color: '#dcdfe6' } ] },
				{ featureType: 'transit', stylers: [ { color: '#808080' }, { visibility: 'off' } ] },
				{
					featureType: 'road.highway',
					elementType: 'geometry.stroke',
					stylers: [ { visibility: 'on' }, { color: '#dcdfe6' } ]
				},
				{ featureType: 'road.highway', elementType: 'geometry.fill', stylers: [ { color: '#ffffff' } ] },
				{
					featureType: 'road.local',
					elementType: 'geometry.fill',
					stylers: [ { visibility: 'on' }, { color: '#ffffff' }, { weight: 1.8 } ]
				},
				{ featureType: 'road.local', elementType: 'geometry.stroke', stylers: [ { color: '#d7d7d7' } ] },
				{
					featureType: 'poi',
					elementType: 'geometry.fill',
					stylers: [ { visibility: 'on' }, { color: '#ebebeb' } ]
				},
				{ featureType: 'administrative', elementType: 'geometry', stylers: [ { color: '#a7a7a7' } ] },
				{ featureType: 'road.arterial', elementType: 'geometry.fill', stylers: [ { color: '#ffffff' } ] },
				{ featureType: 'road.arterial', elementType: 'geometry.fill', stylers: [ { color: '#ffffff' } ] },
				{
					featureType: 'landscape',
					elementType: 'geometry.fill',
					stylers: [ { visibility: 'on' }, { color: '#efefef' } ]
				},
				{ featureType: 'road', elementType: 'labels.text.fill', stylers: [ { color: '#696969' } ] },
				{
					featureType: 'administrative',
					elementType: 'labels.text.fill',
					stylers: [ { visibility: 'on' }, { color: '#737373' } ]
				},
				{ featureType: 'poi', elementType: 'labels.icon', stylers: [ { visibility: 'off' } ] },
				{ featureType: 'poi', elementType: 'labels', stylers: [ { visibility: 'off' } ] },
				{ featureType: 'road.arterial', elementType: 'geometry.stroke', stylers: [ { color: '#d6d6d6' } ] },
				{ featureType: 'road', elementType: 'labels.icon', stylers: [ { visibility: 'off' } ] },
				{},
				{ featureType: 'poi', elementType: 'geometry.fill', stylers: [ { color: '#dadada' } ] }
			]
		});
	}
})(jQuery);
