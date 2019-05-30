<?php get_header(); ?>
<section class="doctors">
  <div class="wrap">
	<div class="doctors__wrap__inner">
	  <div class="doctors_content">
		<?php
		  $cat_ID = get_query_var('cat');
		  $categories = get_categories(array(
			'orderby' => 'name',
			'order' => 'ASC',
			'child_of' => $cat_ID,
			'hide_empty' => 0
		  ));
		  foreach ($categories as $category) {

			$catID = $category->cat_ID;
			$posts = get_posts(array(
			  'category' => $catID,
			  'post_type' => 'any',
			)); ?>
			<div class="doctors_content__category">
			  <i class="fas fa-spinner doctors_content__icon fa-spin"></i>
			  <h2 class='tac'><?php echo $category->name; ?></h2>
			</div>
			<?php foreach ($posts as $post) {
			  setup_postdata($post); ?>
			  <div class="doctors_content__information">
				<div class="doctors_content__img">
				  <?php the_post_thumbnail('medium'); ?>
				</div>
				<div class="doctors_content__text">
				  <h4 class='tac'><?php the_title(); ?></h4>
				  <div class="news_content__text__p"><span><?php $content = get_the_content();
						echo mb_strimwidth($content, 0, 200, '...'); ?></span></div>
				  <a class='doctors__more btn' href="<?php the_permalink(); ?>">подробнее</a>
				</div>

			  </div>
			<?php }
		  } wp_reset_postdata();?>
	  </div>
	  <div class="doctors_aside">
		<h2 class="news_small_category">доктора</h2>
		<div class="wrap_for_mobile">
		  <div class="doctors_aside__inner">
			<?php
			  $categories = get_categories(array(
				'orderby' => 'name',
				'order' => 'ASC',
				'child_of' => 4,
				'hide_empty' => 0,
				'type' => 'link '
			  ));
			  foreach ($categories as $category) {
				?>
				<div class="doctors_aside__category">
				  <a href="<?php echo get_category_link($category->term_id); ?>">
					<h2><?php echo $category->name;
					  ?>
					</h2>
				  </a>
				</div>
			  <?php } ?>
		  </div>
		</div>
	  </div>
	</div>
  </div>

</section>


<?php get_footer(); ?>