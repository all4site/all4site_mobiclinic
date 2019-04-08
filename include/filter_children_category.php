<?php

function afs_filter_cildren_category( $template ) {
	if( ! is_category() ) return $template;
	$category = get_queried_object();
	$parent_id = $category->category_parent;
	if ($parent_id == 4) {
	$new_template = locate_template( array( 'template_parts/category-doktora-other.php' ) );
	$template = $new_template ;
}
return $template;
}
function afs_filter_news( $template ) {
	if( ! is_category() ) return $template;
	$category = get_queried_object();
	$parent_id = $category->category_parent;
	if ($parent_id == 13) {
	$new_template = locate_template( array( 'template_parts/page-news-other.php' ) );
	$template = $new_template ;
}
return $template;
}

?>