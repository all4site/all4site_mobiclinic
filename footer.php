<!-- START MAP -->
<section class="map">
  <div class="map__inner">
	<iframe
	  src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d5084.533915977137!2d30.52628613200193!3d50.41749761814148!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x40d4cf15f47cdf47%3A0xa0f23aa780de4dfa!2z0YPQuy4g0JDQutCw0LTQtdC80LjQutCwINCk0LjQu9Cw0YLQvtCy0LAsIDEvMjIsINCa0LjQtdCyLCAwMjAwMA!5e0!3m2!1sru!2sua!4v1554309413388!5m2!1sru!2sua"
	  width="100%" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
  </div>
</section>
<!-- END MAP -->
<!-- START FOOTER -->
<?php $fields = CFS()->get('contacts', '164');
  $address_name = CFS()->get_field_info('contacts_address', '164'); ?>
<footer class="footer">
  <div class="wrap">
	<div class="footer__inner">
	  <div class="footer__contacts">
		<h2 class='tac'>КОНТАКТЫ</h2>
		<div class="footer__contacts__inner">
		  <?php foreach ($fields as $field) {
			?>
			<span><?php echo $field['phone_name']; ?></span>
			<?php foreach ($field['contacts_phone'] as $phone) { ?>
			  <span><?php echo $phone['phonr_number']; ?></span>
			<?php } ?>
		  <?php } ?>
		  <span><?php echo $field['email_name']; ?></span>
		  <?php foreach ($field['email'] as $emails) { ?>
			<span><?php echo $emails['email_date']; ?></span>
		  <?php } ?>
		  <span class="address"><?php echo $address_name['label'] . ":"; ?></span>
		  <span><?php echo CFS()->get('contacts_metro', '164'); ?></span>
		  <span><?php echo CFS()->get('contacts_street', '164'); ?></span>
		</div>
	  </div>
	  <div class="footer__subscribe">
		<h2 class='tac'>ЗАПИСАТЬСЯ</h2>
		<div class="footer__form__wrap">
		  <?php echo do_shortcode('[contact-form-7 id="188" title="Footer Contact Form_copy"]'); ?>
		</div>
		<div class="footer__social">
		  <?php
			$facebook = CFS()->get('facebook', '190');
			$youtube = CFS()->get('youtube', '190');
			$instagram = CFS()->get('instagram', '190');
		  ?>
		  <a href="<?php echo $facebook['url']; ?>" target="_blank" class="footer__social__inner">
			<i class="fab fa-facebook-f"></i>
		  </a>
		  <a href="<?php echo $youtube['url']; ?>" target="_blank" class="footer__social__inner">
			<i class="fab fa-youtube"></i>
		  </a>
		  <a href="<?php echo $instagram['url']; ?>" target="_blank" class="footer__social__inner">
			<i class="fab fa-instagram"></i>
		  </a>
		</div>
	  </div>
	  <div class="footer__menu">
		<h2 class='tac'>МЕНЮ</h2>
		<div class="footer__menu__inner">
		  <?php wp_nav_menu(array(
			'menu' => 'Footer',
			'container' => 'div',
			'container_class' => 'footer_wrapmenu grid',
			'menu_class' => 'menu_footer_ul grid',
			'menu_id' => 'menu_footer_ul',
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
<div class="scrolltop">
  <a href="#top" data-target="menu">
	<i class="fas fa-arrow-up"></i>
  </a>
</div>
<!-- END FOOTER -->

<?php wp_footer() ?>
</body>
</html>