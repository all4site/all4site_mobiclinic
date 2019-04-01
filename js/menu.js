(function ($) {
	//Add class to top menu
	$(document).ready(function () {
		var posreload = $('.navwrapper').offset().top;
		var wh = $(window).width();

		if (posreload >= 50) {
			$('.navwrapper').addClass('menuscroll');
		}
		jQuery(document).scroll(function () {
			var pos = $(this).scrollTop();

			if (pos >= 50) {
				$('.navwrapper').addClass('menuscroll');
			} else {
				$('.navwrapper').removeClass('menuscroll');
			}
		});
	});
	//Add class to top menu end


	//Top menu for mobile start
	$(document).ready(function () {
		$('.menu_top_small_ul .menu-item-has-children > a').click(function (e) {
			e.preventDefault();
			var $this = $(this);


			if ($this.next().hasClass('show')) {
				$this.next().removeClass('show');
				$this.next().slideUp(350);
			} else {
				$this.parent().parent().find('.sub-menu').removeClass('show');
				$this.parent().parent().find('.sub-menu').slideUp(350);
				$this.next().toggleClass('show');
				$this.next().slideToggle(350);
			}

		});
	});
	//Top menu for mobile end

	//Menu humburger start
	$(document).ready(function () {
		$('.cross').click(function () {
			var menu = $('.menu_top_small_ul');
			$('.hamburger').toggleClass('is-active');
			$('.nav-top-hide').slideToggle();
			$('body').toggleClass('overfolw');
			if (!$('.hamburger').hasClass('is-active')) {
				menu.find('.show').slideUp();
				menu.find('.show').removeClass('show');
			}
		});
	});
	//Menu humburger end

})(jQuery);