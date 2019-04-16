<?php get_header(); ?>
<?php $category = get_the_category(); ?>
<?php while ( have_posts() ) : the_post(); ?>
  <section class="doktor__single">
	<div class="dokrot__single__wrap">
	  <div class="doktor__single__top">
		<div class="doktor__single__img">
		  <?php the_post_thumbnail(); ?>
		  <h2 class="doktor__single__name"><?php the_title(); ?></h2>
		</div>
		<div class="doktor__single__about">
		  <h4 class="doktor__single__h"><?php echo CFS()->get( 'about' ); ?></h4>
		  <div class="doktors__box">
						<span><?php $props = CFS()->get_field_info( 'name' );
						  echo $props['label']; ?></span>
			<span class="doktors__info"><?php echo the_title(); ?></span>
		  </div>
		  <div class="doktors__box">
						<span><?php $props = CFS()->get_field_info( 'address' );
						  echo $props['label']; ?></span>
			<span class="doktors__info"><?php echo CFS()->get( 'address' ); ?></span>
		  </div>
		  <div class="doktors__box">
						<span><?php $props = CFS()->get_field_info( 'phone' );
						  echo $props['label']; ?></span>
			<span class="doktors__info"><?php echo CFS()->get( 'phone' ); ?></span>
		  </div>
		  <div class="doktors__box">
						<span><?php $props = CFS()->get_field_info( 'email' );
						  echo $props['label']; ?></span>
			<span class="doktors__info"><?php echo CFS()->get( 'email' ); ?></span>
		  </div>
		  <div class="doktors__box">
						<span><?php $props = CFS()->get_field_info( 'specializaciya' );
						  echo $props['label']; ?></span>
			<span class="doktors__info"><?php echo CFS()->get( 'specializaciya' ); ?></span>
		  </div>
		  <div class="doktors__box">
						<span><?php $props = CFS()->get_field_info( 'zvanie' );
						  echo $props['label']; ?></span>
			<span class="doktors__info"><?php echo CFS()->get( 'zvanie' ); ?></span>
		  </div>
		  <div class="doktors__box">
						<span><?php $props = CFS()->get_field_info( 'category' );
						  echo $props['label']; ?></span>
			<a class="doktors__box__link" href="<?php echo get_category_link( $category[1]->cat_ID ); ?>">
							<span class="doktors__info"><?php echo $category[1]->cat_name; ?>
							</span>
			  <span><?php get_category_link( $category[1]->cat_ID ); ?></span>
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
		  <form action="#!" class="doktor__single__form">
			<input class="hidden" type="text" name='doctor_name' placeholder="<?php echo get_the_title(); ?>">
			<input class="dokrot__form__input" type="text" name='name' placeholder="Имя" required>
			<input class="dokrot__form__input" type="phone" name='phonr' placeholder="Телефон" required>
			<input class="dokrot__form__input" type="email" name='email' placeholder="Email" required>
			<input class="dokrot__form__input" type="date" name='date' placeholder="Желательная дата">
			<input class="dokrot__form__submit btn" type="submit" value="Записаться">
		  </form>
		</div>
		<div class="doktor__single__calendar">
		  <div class="datepicker-here"></div>
		</div>
	  </div>
	</div>
  </section>
<?php endwhile; ?>
<?php get_footer(); ?>