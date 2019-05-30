<div class="news_aside">

  <h2 class="news_small_category">Все рубрики</h2>
  <div class="wrap_for_mobile">
	<div class="news_aside__inner">
	  <div class="category category__block">
		<h2>Рубрики</h2>

		<?php
		  $test = get_the_category();
		  foreach ($test as $tests) {
			if ($tests->parent == 0) {
			  $getparentID = $tests->cat_ID;
			}
			if ($tests->parent != 0) $current_cat = $tests->cat_ID;
		  }
		  $posttype = get_query_var('post_type');
		  $currentpage = get_query_var('paged');
		  $current_cat = get_query_var('cat');
		  $current_cat_name = get_query_var('category_name');
		  $categories = get_categories(
			[
			  'orderby' => 'name',
			  'order' => 'DESC',
			  'child_of' => $getparentID
			]
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
			[
//			  'category_name' => $current_cat_name,
			  'post_type' => $posttype,
			  'numberposts' => 3,
			  'cat'			=> $getparentID
			]
		  );
		  foreach ($posts as $post) {
			setup_postdata($post);
			?>

			<span>
			  <a href="<?php the_permalink(); ?>">
				<?php
				  $theTitle = esc_html(get_the_title());
				  echo mb_strimwidth($theTitle, 0, 40, '...');
				?>
			  </a>
			</span>

		  <?php }
		  wp_reset_postdata(); ?>
	  </div>

	  <div class="popular_category category__block">
		<h2>Популярные</h2>
		<?php
		  $posts = get_posts(
			[
			  'category_name' => $current_cat_name,
			  'meta_key' => 'views',
			  'orderby' => 'meta_value_num',
			  'post_type' => $posttype,
			  'numberposts' => 3,
			]
		  );
		  foreach ($posts as $post) {
			setup_postdata($post);
			?>
			<span>
			<a href="<?php the_permalink(); ?>">
			  <?php
				$theTitle = esc_html(get_the_title());
				echo mb_strimwidth($theTitle, 0, 40, '...');
			  ?>
			</a>
		  </span>
		  <?php }
		  wp_reset_postdata(); ?>


	  </div>
	</div>
  </div>
</div>
</div>