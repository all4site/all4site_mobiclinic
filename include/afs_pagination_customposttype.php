<?php function afs_my_post_queries($query)
{
	// do not alter the query on wp-admin pages and only alter it if it's the main query
	if (!is_admin() && $query->is_main_query()) {

		// alter the query for the home and category pages


		if (is_category()) {
			$query->set('posts_per_page', 1);
			$query->set('post_type', 'any');
		}
	}
}
 ?>