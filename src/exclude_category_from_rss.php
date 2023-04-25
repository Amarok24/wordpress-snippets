<?php

/**
 * Exclude a category or multiple categories from the feeds.
 * If you want to exclude multiple categories, use a comma-separated list: "-15, -5, -6".
 * Make sure to prefix the category id(s) with a minus "-".
 *
 * @param WP_Query $query The query.
 */
function wpcode_snippets_exclude_feed_category($query)
{
	if ($query->is_feed) {
		// Replace 15 with the desired category id you want to exclude.
		$query->set('cat', '-15');
	}
}

add_action('pre_get_posts', 'wpcode_snippets_exclude_feed_category');
