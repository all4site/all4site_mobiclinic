<?php get_header(); ?>
<?php $category = get_the_category();
  foreach ($category as $categories) {
	if ($categories->parent > 0) {
	  $category_ID = $categories->cat_ID;
	  $category_name = $categories->name;
	}
  }
?>
<?php while (have_posts()) : the_post(); ?>
  <section class="doktor__single">
	<div class="dokrot__single__wrap">
	  <div class="doktor__single__top">
		<div class="doktor__single__img">
		  <?php the_post_thumbnail('large'); ?>
		  <h2 class="doktor__single__name"><?php the_title(); ?></h2>
		</div>
		<div class="doktor__single__about">
		  <h4 class="doktor__single__h"><?php echo CFS()->get('about'); ?></h4>
		  <div class="doktors__box">
						<span><?php $props = CFS()->get_field_info('name');
							echo $props['label']; ?></span>
			<span class="doktors__info"><?php echo the_title(); ?></span>
		  </div>
		  <div class="doktors__box">
						<span><?php $props = CFS()->get_field_info('address');
							echo $props['label']; ?></span>
			<span class="doktors__info"><?php echo CFS()->get('address'); ?></span>
		  </div>
		  <div class="doktors__box">
						<span><?php $props = CFS()->get_field_info('phone');
							echo $props['label']; ?></span>
			<span class="doktors__info"><?php echo CFS()->get('phone'); ?></span>
		  </div>
		  <div class="doktors__box">
						<span><?php $props = CFS()->get_field_info('email');
							echo $props['label']; ?></span>
			<span class="doktors__info"><?php echo CFS()->get('email'); ?></span>
		  </div>
		  <div class="doktors__box">
						<span><?php $props = CFS()->get_field_info('specializaciya');
							echo $props['label']; ?></span>
			<span class="doktors__info"><?php echo CFS()->get('specializaciya'); ?></span>
		  </div>
		  <div class="doktors__box">
						<span><?php $props = CFS()->get_field_info('zvanie');
							echo $props['label']; ?></span>
			<span class="doktors__info"><?php echo CFS()->get('zvanie'); ?></span>
		  </div>
		  <div class="doktors__box">
						<span><?php $props = CFS()->get_field_info('category');
							echo $props['label']; ?></span>

			<a class="doktors__box__link" href="<?php echo get_category_link($category_ID); ?>">
			  <span class="doktors__info"><?php echo $category_name; ?></span>
			</a>
		  </div>
		</div>
	  </div>
	  <div class="doktor__single__center">
		<?php the_content(); ?>
	  </div>
	  <div class="doktor__single__bottom">
		<div class="doktor__single__signup z-depth-3">
		  <h2 class="doktor__signup__h">Записаться на прием</h2>
		  <?php echo do_shortcode('[contact-form-7 id="189" title="Doctors page"]'); ?>
		</div>
		<div class="doktor__single__calendar">
		  <div class="datepicker-here"></div>
		</div>
	  </div>
	</div>
  </section>
<?php endwhile; ?>
<?php get_footer(); ?>