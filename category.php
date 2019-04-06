<?php
// template name: blog
get_header(); ?>
<section class="akcii">
 <div class="wrap">
  <div class="akcii_wrap">
   <!--		--><?php
   //		$posts = get_posts( array(
   //		'numberposts' => 3,
   //		'category'    => $cat_ID,
   //		'post_type'   => 'any',
   //		) ); ?>
   <?php

   $cat_ID = get_query_var( 'cat' );
   $currentPage = get_query_var( 'paged' );
   $postperpage = 1;

   $the_query = new WP_Query( array(
	 'post_type'      => 'post',
	 'posts_per_page' => $postperpage,
	 'paged'          => $currentPage,
//	 'cat'            => $cat_ID

   ) );
   while ( $the_query->have_posts() ): $the_query->the_post(); ?>

	<div class="akcii_wrap__inner">
	 <div class="akcii__img">
	  <?php the_post_thumbnail(); ?>
	 </div>
	 <div class="akcii__text">
	  <h4 class='tac'><?php the_title(); ?></h4>
	  <span><?php $content = get_the_content();
	   echo mb_strimwidth( $content, 0, 350, '...' ); ?></span>
	  <div class="akcii__text__date">
	   <span class='post_data'><?php echo get_the_date(); ?></span>
	   <a class='akcii__more' href="<?php the_permalink(); ?>">подробнее</a>
	  </div>
	 </div>
	</div>
	<?php wp_reset_postdata(); endwhile;?>
  </div>
  <?php
  echo paginate_links( array(
	'total'     => $the_query->max_num_pages,
	'prev_text' => '<img src="/wp-content/themes/all4site/img/left.svg" alt=""/>',
	'next_text' => '<img src="/wp-content/themes/all4site/img/right.svg" alt=""/>'
  ) );

  ?>
 </div>
</section>


<?php get_footer(); ?>
