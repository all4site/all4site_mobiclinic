<!-- START MAP -->
<section class="map">
	<div class="map__inner">
	<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d5084.533915977137!2d30.52628613200193!3d50.41749761814148!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x40d4cf15f47cdf47%3A0xa0f23aa780de4dfa!2z0YPQuy4g0JDQutCw0LTQtdC80LjQutCwINCk0LjQu9Cw0YLQvtCy0LAsIDEvMjIsINCa0LjQtdCyLCAwMjAwMA!5e0!3m2!1sru!2sua!4v1554309413388!5m2!1sru!2sua" width="100%" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
	</div>
</section>
<!-- END MAP -->

<!-- START FOOTER -->
<footer class="footer">
	<div class="wrap">
		<div class="footer__inner">
			<div class="footer__contacts">
				<h2 class='tac'>КОНТАКТЫ</h2>
				<div class="footer__contacts__inner">
					<span>тел:</span>
					<span>+38 (044) 528 83 30</span>
					<span>+38 (044) 529 25 50</span>
					<span>+38 (067) 240 24 95</span>
					<span>email:</span>
					<span>contact@mobiclinic.com.ua</span>
					<span>адрес:</span>
					<span>М Либідська</span>
					<span>вул. Філатова,1/22</span>
				</div>
			</div>
			<div class="footer__subscribe">
				<h2 class='tac'>ЗАПИСАТЬСЯ</h2>
				<div class="footer__form__wrap">
					<form action="#!" class="footer__form">
						<input type="text" name="name" placeholder="имя" class="footer__form__input">
						<input type="phone" name="email" placeholder="телефон" class="footer__form__input">
						<input type="submit" value="отправить" class="btn footer__form__submit">
					</form>
				</div>
				<div class="footer__social">
					<a href="#!" class="footer__social__inner">
						<i class="fab fa-facebook-f"></i>
					</a>
					<a href="#!" class="footer__social__inner">
						<i class="fab fa-youtube"></i>
					</a>
					<a href="#!" class="footer__social__inner">
						<i class="fab fa-instagram"></i>
					</a>
				</div>
			</div>
			<div class="footer__menu">
				<h2 class='tac'>МЕНЮ</h2>
				<div class="footer__menu__inner">
							<?php wp_nav_menu(array(
							'menu'						=>	'Footer',
							'container'				=>	'div',
							'container_class' =>	'footer_wrapmenu grid',
							'menu_class'			=>	'menu_footer_ul grid',
							'menu_id'					=>	'menu_footer_ul',
							));
						?>
				</div>
			</div>
		</div>
	</div>
	<div class="footer__allrights">
		<span>© Медична Мобільна Клініка 2017. All Rights Reserved</span>
	</div>
</footer>
<!-- END FOOTER -->

<?php wp_footer() ?>
</body>
</html>