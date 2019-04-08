<?php
function afs_category_add() {
	$posttype = get_post_type();
	$postId 	= get_the_ID();
	if($posttype == "terapevts"){
		wp_set_post_categories($postId, array(4), true);
		wp_set_post_categories($postId, array(5), true);
	}
	if($posttype == "nevrapatolog"){
		wp_set_post_categories($postId, array(4), true);
		wp_set_post_categories($postId, array(6), true);
	}
	if($posttype == "hirurgs"){
		wp_set_post_categories($postId, array(4), true);
		wp_set_post_categories($postId, array(7), true);
	}
	if($posttype == "dermatolog"){
		wp_set_post_categories($postId, array(4), true);
		wp_set_post_categories($postId, array(8), true);
	}
	if($posttype == "akcii"){
		wp_set_post_categories($postId, array(12), true);
	}
	if($posttype == "news"){
		wp_set_post_categories($postId, array(13), true);
	}
}

?>