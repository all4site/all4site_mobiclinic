<section class="news">
  <div class="wrap">
	<div class="news_wrap__all">
	  <div class="news_wrap">
		<?php
		$posttype         = get_query_var( 'post_type' );
		$currentpage      = get_query_var( 'paged' );
		$current_cat      = get_query_var( 'cat' );
		$current_cat_name = get_query_var( 'category_name' );
		$postperpage      = 3;
		$wp_query         = new WP_Query(
		 array(
		  'post_type'      => $posttype,
		  'posts_per_page' => $postperpage,
		  'paged'          => $currentpage,
		  'cat'            => $current_cat,

		 )
		);
		while ( $wp_query->have_posts() ) :
		  $wp_query->the_post();
		  ?>
		  <div class="news_wrap__inner">
			<div class="news_content__img">
			  <?php the_post_thumbnail(); ?>
			</div>
			<div class="news_content__text">
			  <h4 class='tac'><?php the_title(); ?></h4>
			  <div class="news_content__text__p"><span>
				<?php $content = get_the_content();
				echo mb_strimwidth( $content, 0, 200, '...' ); ?>
			  </span></div>
			  <a class='news__more' href="<?php the_permalink(); ?>">подробнее...</a>
			</div>
		  </div>

		  <?php
		  wp_reset_postdata();
		endwhile;
		?>
	  </div>
	  <?php get_template_part( 'template-parts/asside', 'category' ) ?>
	  <section class="pagination">
		<?php all4site_pagination(); ?>
	  </section>
	</div>
  </div>
</section>


