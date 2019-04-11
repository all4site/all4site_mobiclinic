<?php get_header(); ?>
<?php while (have_posts()) : the_post(); ?>
<section class="aboutus">
	<div class="wrap">
		<div class="aboutus__img">
			<?php the_post_thumbnail(); ?>
		</div>
		<div class="aboutus__text">
			<?php the_content(); ?>
		</div>
	</div>
</section>


<?php endwhile; ?>
<?php get_footer(); ?>