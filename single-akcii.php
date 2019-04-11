<?php get_header(); ?>
<?php while (have_posts()) : the_post(); ?>
	<section class="akcii">
		<div class="wrap">
			<div class="akcii__wrap">
				<div class="akcii__img">
					<?php the_post_thumbnail(); ?>
				</div>
				<div class="akcii__text">
					<h2 class="tac"><?php the_title(); ?></h2>
					<div class="akcii__content">
						<?php the_content(); ?>
					</div>
				</div>
			</div>
		</div>
	</section>
<?php endwhile; ?>
<?php get_footer(); ?>