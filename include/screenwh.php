 <?php
function afs_screenwh_function()
{
    if (!empty($_POST['wh']) && ($_POST['wh']) == 6) {
        $postperpage = esc_attr($_POST['wh']);
    } elseif ((!empty($_POST['wh']) && ($_POST['wh']) == 3)) {
        $postperpage = esc_attr($_POST['wh']);
    } else {
        $postperpage = 9;
    }
?>
    <div class="content-inner">
				<h2>главные новости</h2>
				<div class="content-article">
					<?php
						$currentPage = get_query_var('paged');
						// $postperpage = 9;
						$wp_query = new WP_Query(array(
							'post_type'      					=> 'post',
							'posts_per_page' 					=> $postperpage,
							'paged'          					=> 4,
							//- 'cat'											=> array('-2, -8')
						));
						while ($wp_query->have_posts()): $wp_query->the_post();
							if( has_post_thumbnail() ) {
							?>
								<div class="content-article-inner">
									<div class="img">
										<a href="<?php the_permalink();?>">
											<?php the_post_thumbnail();?>
										</a>
									</div>
									<a href="<?php the_permalink();?>">
										<span><?php $theTitle = esc_html (get_the_title());echo wp_trim_words($theTitle, 8, '...');?>
										</span>
									</a>
								</div>
							<?php } else{?>
								<div class="content-article-inner">
									<?php echo '<img src="'.get_template_directory_uri().'/img/noImg.png" />';?>
										<a href="<?php the_permalink();?>">
											<span><?php $theTitle = esc_html (get_the_title());echo wp_trim_words($theTitle, 8, '...');?>
											</span>
										</a>
								</div>
						<?php } wp_reset_postdata(); endwhile; ?>
				</div>
	<!-- START PAGINATION -->
				<div class="pagination">
					<div class="pagination-inner">
					<?php all4site_pagination();?>
					</div>
				</div>
	<!-- END PAGINATION -->
			</div>
<?php
    wp_die();
}
?>