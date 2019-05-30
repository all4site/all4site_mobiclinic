<?php function afs_my_remove_menu_pages()
{

	global $user_ID;
	$role = array_shift(wp_get_current_user()->roles);
	// echo $role;
	if ($role !== 'administrator') {
		remove_menu_page('edit.php');
		remove_menu_page('edit.php?post_type=page');
		remove_menu_page('edit.php?post_type=cfs');
		remove_menu_page('profile.php');
		remove_menu_page('tools.php');
		remove_menu_page('edit-comments.php');
		remove_menu_page('wpcf7');
	}
} ?>