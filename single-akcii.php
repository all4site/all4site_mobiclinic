<?php get_header(); ?>
<?php while (have_posts()) : the_post(); ?>
	<section class="akcii">
		<div class="wrap">
			<div class="akcii__wrap">
				<div class="akcii_singe__img">
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
	<section class="akcii_pagination">
	  <div class="wrap">
		<div class="akcii_pagination__wrap">
		  <?php
		  $next = get_next_post_link( '%link', 'следущая статья', true );
		  $prev = get_previous_post_link( '%link', 'предыдущая статья', true );

		  echo str_replace( '<a ', '<a class="akcii_pagination__link" ', $prev );
		  echo str_replace( '<a ', '<a class="akcii_pagination__link" ', $next );

		  ?>
		</div>
	  </div>

	</section>
<?php endwhile; ?>
<?php get_footer(); ?>