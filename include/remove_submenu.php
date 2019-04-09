<?php
function afs_remove_submenu_posttype() {
		global $submenu;
	// echo '<pre>';	print_r($submenu); exit; echo '</pre>';
    unset($submenu['edit.php?post_type=doctors'][5]);
    unset($submenu['edit.php?post_type=doctors'][10]);
    unset($submenu['edit.php?post_type=doctors'][15]);
    unset($submenu['edit.php?post_type=costs'][5]);
    unset($submenu['edit.php?post_type=costs'][10]);
}

?>