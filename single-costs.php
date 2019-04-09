<?php get_header(); ?>

<section class="costs">
	<div class="wrap">
		<h2 class="tac"><?php the_title(); ?></h2>
		<div class="costs__wrap">
			<div class="accordeon">
				<?php
				$fields = CFS()->get('costs_block');
				foreach ($fields as $field) { ?>
					<div class="topAccordeon"><?php echo $field['global_blosk_name']; ?></div>
					<div class="bottomAccordeon">
						<?php foreach ($field['costs'] as $colors) { ?>
							<div class="costs__text"><?php echo $colors['line_service']; ?></div>
							<div class="costs__price"><?php echo $colors['line_costs']; ?></div>
						<?php } ?>
						</div>
					<?php	} ?>
				</div>
			</div>
		</div>
	</section>




	<?php get_footer(); ?>