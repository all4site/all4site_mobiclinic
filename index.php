<?php get_header(); ?>
<!-- START HEADER -->
<section class="home_top">
	<div class="home_top__text">
		<div class="home_top__wrap">
			<div class="home_top__phone">
				<span>тел:</span>
				<span>+38 (044) 528 83 30</span>
				<span>+38 (044) 529 25 50</span>
				<span>+38 (067) 240 24 95</span>
			</div>
			<div class="home_top__email">
				<span>email:</span>
				<span>contact@mobiclinic.com.ua</span>
			</div>
		</div>
	</div>
	<div class="home_bottom__text">
		<div class="home_bottom__wrap">
			<span>Ліцензія АЕ №281949 від 19.12.2013р.</span>
			<div class="home_bottom_hr"></div>
			<span>Акредитація МЗ №013373 від 23.02.2017р.</span>
		</div>
	</div>
</section>
<!-- END HEADER -->

<!-- START ABOUT -->
<section class="home_about">
	<?php
	$post_home__about = get_post( 14, ARRAY_A );
	?>
	<div class="wrap">
		<div class="home_about__content">
			<div class="home_about__thumbnail">
				<?php the_post_thumbnail(); ?>
			</div>
			<div class="home_about__text">
				<h2><?php echo $post_home__about['post_title']; ?></h2>
				<?php echo $post_home__about['post_content']; ?>
			</div>
		</div>
	</div>
</section>
<!-- END ABOUT -->

<!-- START DOING -->
<section class="home_doing">
	<div class="wrap">
		<h2>НАПРЯМКИ ДIЯЛЬНОСТI</h2>
		<div class="home_doing__wrap">
			<div class="home_doing__block hoverable">
				<h4>КОМПЛЕКСНІ ПАКЕТИ</h4>
				<div class="home_doing__icon ssss ">
					<img src="<?php echo get_template_directory_uri(); ?>/img/packets.png" alt="">
				</div>
				<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Adipisci rerum modi eius repellat
					aperiam reprehenderit quo fugiat recusandae dolorum placeat?</p>
				<a href="">подробнее</a>
			</div>
			<div class="home_doing__block hoverable ">
				<h4>КОМПЛЕКСНІ ПАКЕТИ</h4>
				<div class="home_doing__icon">
					<img src="<?php echo get_template_directory_uri(); ?>/img/stethoscope.png" alt="">
					<img src="img/strahovca.png" alt="">
				</div>
				<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Adipisci rerum modi eius repellat
					aperiam reprehenderit quo fugiat recusandae dolorum placeat?</p>
				<a href="">подробнее</a>
			</div>
			<div class="home_doing__block hoverable">
				<h4>КОМПЛЕКСНІ ПАКЕТИ</h4>
				<div class="home_doing__icon">
					<img src="<?php echo get_template_directory_uri(); ?>/img/strahovca.png" alt="">
					<img src="img/strahovca.png" alt="">
				</div>
				<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Adipisci rerum modi eius repellat
					aperiam reprehenderit quo fugiat recusandae dolorum placeat?</p>
				<a href="">подробнее</a>
			</div>
			<div class="home_doing__block hoverable">
				<h4>КОМПЛЕКСНІ ПАКЕТИ</h4>
				<div class="home_doing__icon">
					<img src="<?php echo get_template_directory_uri(); ?>/img/mediclaCare.png" alt="">
					<img src="img/strahovca.png" alt="">
				</div>
				<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Adipisci rerum modi eius repellat
					aperiam reprehenderit quo fugiat recusandae dolorum placeat?</p>
				<a href="">подробнее</a>
			</div>
		</div>
	</div>
</section>
<!-- END DOING -->

<!-- START DOCTORS -->
<section class="home_doctors">
	<h2 class='tac'>ВРАЧИ</h2>
	<div class="wrap">
		<div class="home_doctors__wrap">
			<?php
			$categories = get_categories(
				array(
					'orderby'    => 'name',
					'order'      => 'ASC',
					'child_of'   => '4',
					'hide_empty' => 0,
				)
			);
			?>
			<div class="accordeon">
				<?php
				foreach ( $categories

					as $category ) {
					wp_reset_postdata();
					$catID = $category->cat_ID;
					$posts = get_posts(
						array(
							// 'numberposts' => 5,
							'category'  => $catID,
							'post_type' => 'any',
						)
					);
					?>

					<div class="topAccordeon home_doctors__topaccordeon active">
						<h5><?php echo $category->name; ?></h5>
					</div>
					<div class="bottomAccordeon home_doctors__bottomaccordeon">
						<?php foreach ( $posts as $post ) { ?>
							<div class="home_doctors__inner">
								<div class="home_doctors__img">
									<?php the_post_thumbnail(); ?>
								</div>
								<div class="home_doctors__text">
									<h4><?php the_title(); ?></h4>
									<?php the_content(); ?>
									<a href="<?php the_permalink(); ?>">подробнее</a>
								</div>
							</div>
						<?php
					}
					echo '</div>';
				}
				?>
				</div>
			</div>
		</div>
</section>
<!-- END DOCTORS -->

<!-- START SLIDER -->
<section class="home_slider">
	<div class="wrap">

		<div class="home_slider__inner">

			<div class="home_slider__box">
				<?php
				$posts = get_posts(
					array(
						'category_name' => 'novosti',
						'post_type'     => 'any',
						'numberposts'   => 5,
					)
				);
				foreach ( $posts as $post ) {
					setup_postdata( $post );
					?>
					<div class="home_slider__wrap">
						<div class="home_slider__img">
							<?php the_post_thumbnail(); ?>
						</div>
						<div class="home_slider__text">
							<h3 class='tac'><?php the_title(); ?></h3>
							<span>
								<?php
								$content = get_the_content();
								echo mb_strimwidth( $content, 0, 250, '...' );
								?>
							</span>
							<a href="<?php the_permalink(); ?>" class="more">подробнее...</a>
						</div>
					</div>
				<?php
			}
			wp_reset_postdata();
			?>
			</div>


			<div class="home_slider__box">
				<?php
				$posts = get_posts(
					array(
						'category_name' => 'novosti',
						'post_type'     => 'any',
						'numberposts'   => 5,
					)
				);
				foreach ( $posts as $post ) {
					setup_postdata( $post );
					?>
					<div class="home_slider__wrap">
						<div class="home_slider__img">
							<?php the_post_thumbnail(); ?>
						</div>
						<div class="home_slider__text">
							<h3 class='tac'><?php the_title(); ?></h3>
							<span>
								<?php
								$content = get_the_content();
								echo mb_strimwidth( $content, 0, 250, '...' );
								?>
							</span>
							<a href="<?php the_permalink(); ?>" class="more">подробнее...</a>
						</div>
					</div>
				<?php
			}
			wp_reset_postdata();
			?>
			</div>

		</div>
	</div>
	</div>
</section>
<!-- END SLIDER -->


<?php get_footer(); ?>