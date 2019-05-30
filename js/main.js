(function ($) {
	//Accordeon
	$(document).ready(function () {
		if ($(window).width() >= '768') {
			$('.accordeon>.bottomAccordeon').not(':first').hide();

		} else {
			$('.accordeon>.bottomAccordeon').hide();
		}


		$(window).resize(function () {
			var xalk = $('.accordeon>.bottomAccordeon').first();

			if ($(window).width() >= '768') {
				$(xalk).show();
			} else {
				$('.accordeon>.bottomAccordeon').hide();
			}
		});

		$('.accordeon>.topAccordeon').click(function () {

			var all = $('.accordeon>.topAccordeon').removeClass('active');
			var top = $(this).addClass('active');

			var findAcc = $(this).next('.bottomAccordeon');
			var findClosest = $(this).closest('.accordeon');

			if (findAcc.is(':visible')) {
				findAcc.slideUp(1000);
			} else {
				findClosest.find('>.bottomAccordeon').slideUp(1000);
				findAcc.slideDown(1000);
			}

		});
	});

//START SLIDER
	$(document).ready(function () {
		$('.home_slider__box').slick({
			prevArrow: '<div class="arrow left"><img src="/wp-content/themes/all4site_mobiclinic/img/left.svg", alt=""></div>',
			nextArrow: '<div class="arrow right"><img src="/wp-content/themes/all4site_mobiclinic/img/right.svg", alt=""></div>',
			// arrows: false,
			infinite: true,
			slidesToShow: 1,
			slidesToScroll: 1,
			// autoplay: true
			responsive: [
				{
					breakpoint: 980,
					settings: {
						arrows: false
					}
				}
			]
		});

	});
//END SLIDER
// START POPUP SUBSCRIBE
	$(document).ready(function () {
		$('.menu_top__big__btn').click(function () {
			$('.popup').fadeIn();
		});
	});
	$(document).mouseup(function (e) { // по клику вне попапа
		var popup = $('.popup_wrap');
		if (e.target != popup[0] && popup.has(e.target).length === 0) {
			$('.popup').fadeOut();
		}
	});
// END POPUP SUBSCRIB

//START ANIMATE SCROLL
	$(document).ready(function () {
		$('a[data-target="menu"]').click(function () {
			var target = $(this).attr('href');
			var wh = $(window).width();
			$('a').removeClass('active');
			$(this).addClass('active');

			if (wh < 480) {
				$('html, body').animate({
					scrollTop: $(target).offset().top - 50
				}, 700);
			} else {
				$('html, body').animate({
					scrollTop: $(target).offset().top
				}, 700);
			}

		});
	});
//END ANIMATE SCROLL

// START Scroll top form botton
	$(document).scroll(function () {
		var y = $(this).scrollTop();
		if (y > 300) {
			$('.scrolltop').css('opacity', '1');
		} else {
			$('.scrolltop').css('opacity', '0');

		}

	});

	$(document).scroll(function () {
		var y = $(this).scrollTop();
		var wh = $(window).width();
		if (y > 50 && wh > 768) {
			$('.menuscroll').addClass('menuscrollback');
		} else {
			$('.menuscroll').removeClass('menuscrollback');

		}
	});
// END	Scroll top form botton
// START NEWS CATEGORY ACCORDEON
	$(document).ready(function () {
		$('.news_small_category').click(function () {
			$('.wrap_for_mobile').slideToggle();
		});
	});
// END NEWS CATEGORY ACCORDEON
})(jQuery);
