<?php
get_header(); ?>
<section class="news">
	<div class="wrap">
		<div class="news_wrap__all">
			<div class="news_wrap">
				<?php
				$currentpage = get_query_var('paged');
				$postperpage = 3;
				$wp_query    = new WP_Query(
					array(
						'post_type'      => 'news',
						'posts_per_page' => $postperpage,
						'paged'          => $currentpage,

					)
				);
				while ($wp_query->have_posts()) :
					$wp_query->the_post();
					?>
					<div class="news_wrap__inner">
						<div class="news_content__img">
							<?php the_post_thumbnail(); ?>
						</div>
						<div class="news_content__text">
							<h4 class='tac'><?php the_title(); ?></h4>
							<span>
								<?php
								$content = get_the_content();
								echo mb_strimwidth($content, 0, 200, '...');
								?>
							</span>
							<a class='news__more' href="<?php the_permalink(); ?>">подробнее...</a>
						</div>
					</div>

					<?php
					wp_reset_postdata();
				endwhile;
				?>
			</div>
			<div class="news_aside">
				<div class="news_aside__inner">
					<div class="category category__block">
						<h2>Рубрики</h2>

						<?php
						$categories = get_categories(
							array(
								'orderby'  => 'name',
								'order'    => 'DESC',
								'child_of' => 13,


							)
						);
						foreach ($categories as $category) {
							?>
							<div class="category__inner">
								<span>
									<a href="<?php echo get_category_link($category->term_id); ?>"><?php echo $category->name; ?></a>
								</span>
								<span class="count"><?php echo $category->category_count; ?></span>
							</div>
						<?php } ?>
					</div>
					<div class="last_category category__block">
						<h2>Последние</h2>
						<?php
						$posts = get_posts(
							array(
								'category_name' => 'novosti',
								'post_type'     => 'any',
								'numberposts'   => 3,
							)
						);
						foreach ($posts as $post) {
							setup_postdata($post);
							?>
							<span><a href="<?php the_permalink(); ?>">
									<?php $theTitle = esc_html(get_the_title());
									echo mb_strimwidth($theTitle, 0, 20, '...');
									?>
								</a></span>

						<?php
					}
					wp_reset_postdata();
					?>


					</div>
					<div class="popular_category category__block">
						<h2>Популярные</h2>
						<?php
						$posts = get_posts(
							array(
								'category_name' => 'novosti',
								'meta_key'      => 'views',
								'orderby'       => 'meta_value_num',
								'post_type'     => 'any',
								'numberposts'   => 3,
							)
						);
						foreach ($posts as $post) {
							setup_postdata($post);
							?>
							<span>
								<a href="<?php the_permalink(); ?>">
									<?php $theTitle = esc_html(get_the_title());
									echo mb_strimwidth($theTitle, 0, 20, '...'); ?>
								</a>
							</span>
						<?php	}
					wp_reset_postdata(); ?>


					</div>
				</div>
			</div>
		</div>
		<section class="pagination">
			<?php all4site_pagination(); ?>
		</section>
	</div>
</section>


<?php get_footer(); ?>