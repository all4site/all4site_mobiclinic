<!-- START NAVIGATION -->
	<nav class="navwrapper">
		<div class="wrap_menu">
	<!-- START BIG NAVIGATION -->
			<div class="menu_top__big">
				<div class="menu_top__big__logo grid">
					<a href="<?php echo home_url();?>">
					<img src="<?php echo get_template_directory_uri();?>/img/logo.png" alt=""/>
					</a>
				</div>

				<?php wp_nav_menu(array(
					'menu'						=>	'Главное',
					'container'				=>	'div',
					'container_class' =>	'wrapmenu grid',
					'menu_class'			=>	'menu_top_big_ul grid',
					'menu_id'					=>	'menu_top_big_ul'
					));
				?>

				<div class="donate grid">
					<div class="btn menu_top__big__btn grid"><a href="#!">записаться</a></div>
				</div>
			</div>
		</div>
	<!-- END BIG NAVIGATION -->


	<!-- START SMALL NAVIGATION -->
			<div class="menu_top__small">
				<div class="wrap_menu">
					<div class="menu_top_small__wrap">
						<div class="menu_top_small__logo grid">
					<img src="<?php echo get_template_directory_uri()?>/img/cbn-blue-logo.png" alt=""/>
				</div>
				<div class="cross">
					<div class="hamburger hamburger--slider">
						<div class="hamburger-box">
							<div class="hamburger-inner"></div>
						</div>
					</div>
				</div>
				</div>
		<div class="nav-top-hide">
			<div class="navtop-small-inside">

			<?php wp_nav_menu(array(
				'menu'						=>	'Главное',
				'container'				=>	'div',
				'container_class' =>	'wrapmenu grid',
				'menu_class'			=>	'menu_top_small_ul grid',
				'menu_id'					=>	'menu_top_small_ul',
				));
			?>
				<div class="donate grid">
					<div class="btn grid"><a href="#!">поддержать</a></div>
				</div>
			</div>
		</div>
				</div>
			</div>

	<!-- END SMALL NAVIGATION -->
	</nav>
<!-- END NAVIGATION -->
