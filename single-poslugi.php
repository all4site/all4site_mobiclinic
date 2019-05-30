<?php
get_header(); ?>
  <section class="news">
	<div class="wrap">
	  <div class="news_wrap__all">
		<div class="news_wrap">
		  <?php while ( have_posts() ) : the_post(); ?>
			<div class="news_single__wrap">
			  <div class="news_single__img">
				<?php the_post_thumbnail('large'); ?>
			  </div>
			  <div class="news_single__text">
				<h4 class='tac'><?php the_title(); ?></h4>
				<div class="news_single__content">
				  <?php the_content(); ?>
				</div>
			  </div>
			</div>
		  <?php endwhile; ?>
		</div>

		<?php get_template_part( 'template-parts/asside', 'singlepage' ); ?>

	  </div>
	  <section class="pagination">
		<?php all4site_pagination(); ?>
	  </section>
	</div>
  </section>


<?php get_footer(); ?>