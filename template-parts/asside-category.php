<div class="news_aside">
  <div class="news_aside__inner">
	<div class="category category__block">
	  <h2>Рубрики</h2>

	  <?php
	  $posttype         = get_query_var( 'post_type' );
	  $currentpage      = get_query_var( 'paged' );
	  $current_cat      = get_query_var( 'cat' );
	  $current_cat_name = get_query_var( 'category_name' );
	  $categories = get_categories(
	   array(
		'orderby'  => 'name',
		'order'    => 'DESC',
		'child_of' => $current_cat


	   )
	  );
	  foreach ( $categories as $category ) {
		?>
		<div class="category__inner">
								<span>
									<a href="<?php echo get_category_link( $category->term_id ); ?>"><?php echo $category->name; ?></a>
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
		'category_name' => $current_cat_name,
		'post_type'     => $posttype,
		'numberposts'   => 3,
	   )
	  );
	  foreach ( $posts as $post ) {
		setup_postdata( $post );
		?>
		<span><a href="<?php the_permalink(); ?>">
									<?php $theTitle = esc_html( get_the_title() );
									echo mb_strimwidth( $theTitle, 0, 40, '...' );
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
		'category_name' => $current_cat_name,
		'meta_key'      => 'views',
		'orderby'       => 'meta_value_num',
		'post_type'     => $posttype,
		'numberposts'   => 3,
	   )
	  );
	  foreach ( $posts as $post ) {
		setup_postdata( $post );
		?>
		<span>
								<a href="<?php the_permalink(); ?>">
									<?php $theTitle = esc_html( get_the_title() );
									echo mb_strimwidth( $theTitle, 0, 40, '...' ); ?>
								</a>
							</span>
	  <?php }
	  wp_reset_postdata(); ?>


	</div>
  </div>
</div>
</div>