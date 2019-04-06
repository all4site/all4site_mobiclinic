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
			});

});
//END SLIDER
})(jQuery);
