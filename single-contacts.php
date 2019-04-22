<?php get_header(); ?>
  <section class="contacts">
	<div class="wrap">
	  <div class="contacts_top__wrap">
		<?php
		$contacts_name   = CFS()->get_field_info( 'contacts' );
		$address_name    = CFS()->get_field_info( 'contacts_address' );
		$shedule_name    = CFS()->get_field_info( 'grafic' );
		$fields          = CFS()->get( 'contacts' );
		$shdule_fields   = CFS()->get( 'grafic' );
		$greenbox_fields = CFS()->get( 'contacts_green_box' );
//		$licenc = CFS()->get( 'licens' );
		$accreditation = CFS()->get( 'accreditation');
		foreach ( $fields as $field ) {
		  ?>
		  <div class="contacts_phone">
			<h3 class="tac header_big"><?php echo $contacts_name['label']; ?></h3>
			<span class="header"><?php echo $field['phone_name']; ?></span>
			<?php foreach ( $field['contacts_phone'] as $phone ) { ?>
			  <span><?php echo $phone['phonr_number']; ?></span>
			<?php } ?>
			<span class="header"><?php echo $field['email_name']; ?></span>
			<?php foreach ( $field['email'] as $emails ) { ?>
			  <span><?php echo $emails['email_date']; ?></span>
			<?php } ?>
		  </div>
		  <div class="contacts_address">
			<h3 class="tac header_big"><?php echo $address_name['label']; ?></h3>
			<span><?php echo CFS()->get( 'contacts_metro' ); ?></span>
			<span><?php echo CFS()->get( 'contacts_street' ); ?></span>
		  </div>
		<?php } ?>
		<div class="contacts__work z-depth-3">
		  <h3 class="tac header_big"><?php echo $shedule_name['label']; ?></h3>
		  <?php foreach ( $shdule_fields as $shdule_field ) { ?>
			<span class="header_big left"><?php echo $shdule_field['day']; ?></span>
			<span class="header_big center"><?php echo $shdule_field['time']; ?></span>
		  <?php } ?>
		</div>
	  </div>
	  <div class="contacts_bottom__wrap">
		<div class="contacts__greenbox">
		  <?php foreach ( $greenbox_fields as $greenbox_field ) { ?>
			<span class="left"><?php echo $greenbox_field['left_column']; ?></span>
			<span class="right"><?php echo $greenbox_field['contacts_description']; ?></span>
		  <?php } ?>
		  <span class="left"><?php echo CFS()->get( 'licens' );?></span>
		  <span class="right"><?php echo CFS()->get( 'ls_data' );?></span>
		  <span class="left"><?php echo CFS()->get( 'accreditation') ?></span>
		  <span class="right"><?php echo CFS()->get( 'ac_data') ?></span>
		</div>
	  </div>
	</div>
  </section>
<?php get_footer(); ?>