<?php
function all4site_pagination() {
	global $wp_query;

	$big = 999; // уникальное число для замены

	$args = array(
		'base'    => str_replace( $big, '%#%', get_pagenum_link( $big ) ),
		'format'  => '',
		'current' => max( 1, get_query_var('paged') ),
		'total'   => $wp_query->max_num_pages,
		'prev_text' => '<img src="/wp-content/themes/all4site/img/left.svg" alt=""/>',
		'next_text' => '<img src="/wp-content/themes/all4site/img/right.svg" alt=""/>'
	);

	$result = paginate_links( $args );

	// удаляем добавку к пагинации для первой страницы
	$result = str_replace( '/page/1/', '', $result );

	echo $result;
}

?>
