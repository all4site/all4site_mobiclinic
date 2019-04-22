	<?php
	// template name: blog
	get_header(); ?>
	<section class="akcii">
		<div class="wrap">
			<div class="akcii_wrap">
				<?php

				$currentpage = get_query_var('paged');
				$postperpage = 3;
				$wp_query = new WP_Query(array(
					'post_type'      	=> 'akcii',
					'posts_per_page' 	=> $postperpage,
					'paged'			=> $currentpage
				));
				while ($wp_query->have_posts()) : $wp_query->the_post(); ?>

					<div class="akcii_wrap__inner">
						<div class="akcii__img">
							<?php the_post_thumbnail(); ?>
						</div>
						<div class="akcii__text">
							<h4 class='tac'><?php the_title(); ?></h4>
						  <div class="news_content__text__p"><span><?php $content = get_the_content();
							  echo mb_strimwidth( $content, 0, 350, '...' ); ?></span></div>
							<div class="akcii__text__date">
								<span class='post_data'><?php echo get_the_date(); ?></span>
								<a class='akcii__more' href="<?php the_permalink(); ?>">подробнее</a>
							</div>
						</div>
					</div>
				<?php endwhile; ?>
			</div>
			<section class="pagination">
				<?php all4site_pagination(); ?>
			</section>

		</div>
	</section>


	<?php get_footer(); ?>