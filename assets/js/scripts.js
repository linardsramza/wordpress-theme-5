(function ($) {

	'use strict';

	$(document).ready(function() {

		// Comments

		$('.commentlist li').addClass('card');
		$('.comment-reply-link').addClass('btn btn-secondary');

		// Forms

		$('select, input[type=text], input[type=email], input[type=password], textarea').addClass('form-control');
		$('input[type=submit]').addClass('btn btn-primary');

		// Pagination fix for ellipsis

		$('.pagination .dots').addClass('page-link').parent().addClass('disabled');

		//Show Navbar Dropdown menu on hover

		if ($(window).width() > 767) {
	    $('.navbar .dropdown').hover(function() {
	      $(this).find('.dropdown-menu').stop(true, true).slideDown(200);
	    }, function() {
	      $(this).find('.dropdown-menu').stop(true, true).delay(100).slideUp(200);
	    });
		  $('.navbar .dropdown > a').click(function() {
		    location.href = this.href;
		  });
		}

	});

}(jQuery));

//Hero Case Results Swiper

var heroCaseResultsSwiper = new Swiper ('.swiper-hero-case-results', {
	loop: true,
	speed: 2000,
  autoplay: {
    delay: 3000,
  },
})

//Verdicts & Settlements swiper-testimonials

var verdictsSwiper = new Swiper ('.swiper-verdicts-settlements', {
	speed: 0,
	loop: true,
	simulateTouch: false,
	navigation: {
		nextEl: '.verdict-next',
		prevEl: '.verdict-prev',
	},
  slidesPerView: 4,
	breakpoints: {
    991: {
      slidesPerView: 2,
    },
		768: {
			slidesPerView: 1,
		}
  }
})

//Testimonials Swiper

var testimonialsSwiper = new Swiper ('.swiper-testimonials', {
	loop: true,
	autoHeight: true,
  autoplay: {
    delay: 30000,
  },
	navigation: {
		nextEl: '.testi-next',
		prevEl: '.testi-prev',
	},
})

function getQueryVariable(variable)
{
	var query = window.location.search.substring(1);
	var vars = query.split("&");
	for (var i=0;i<vars.length;i++) {
		var pair = vars[i].split("=");
		if(pair[0] == variable){return pair[1];}
	}
	return(false);
}

//Open the right FAQ accordion based on the URL
if(window.location.href.indexOf("answer") > -1) { //If the URL contains the string "answer"
	var answerNum = getQueryVariable("answer") //Get the number of the "answer" query string
  $('#answer-' + answerNum).addClass('show'); //Add the class "show" to the right accordion
}
