<?php
$getparent = wp_get_post_categories($post->ID, array('fields' => 'all', 'orderby' => 'count'));
$getparentID = $getparent[1]->term_id;
$curcatname = $getparent[0]->slug;
?>
<div class="news_aside">
	<div class="news_aside__inner">
		<div class="category category__block">
			<h2>Рубрики</h2>

			<?php
			$categories = get_categories(
				array(
					'orderby'  => ' name ',
					'order'    => ' DESC ',
					'child_of' => 	$getparentID


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
					'category_name' => $curcatname,
					'post_type'     => 'any',
					'numberposts'   => 3,
				)
			);
			foreach ($posts as $post) {
				setup_postdata($post);
				?>
				<span><a href="<?php the_permalink(); ?>">
						<?php $theTitle = esc_html(get_the_title());
						echo mb_strimwidth($theTitle, 0, 40, ' ...');
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
					'category_name' => $curcatname,
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
						echo mb_strimwidth($theTitle, 0, 40, ' ...'); ?>
					</a>
				</span>
			<?php	}
		wp_reset_postdata(); ?>


		</div>
	</div>
</div>