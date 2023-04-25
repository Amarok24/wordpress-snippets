<?php
/**
 * Display a custom message instead of the RSS Feeds.
 */
function wpcode_snippet_disable_feed(): void
{
	wp_die(
		sprintf(
			// Translators: Placeholders for the homepage link.
			esc_html__('No feed available, please visit our %1$shomepage%2$s!'),
			' <a href="' . esc_url(home_url('/')) . '">',
			'</a>'
		)
	);
}

// Replace all feeds with the message above.
add_action('do_feed_rdf', 'wpcode_snippet_disable_feed', 1);
add_action('do_feed_rss', 'wpcode_snippet_disable_feed', 1);
add_action('do_feed_rss2', 'wpcode_snippet_disable_feed', 1);
add_action('do_feed_atom', 'wpcode_snippet_disable_feed', 1);
add_action('do_feed_rss2_comments', 'wpcode_snippet_disable_feed', 1);
add_action('do_feed_atom_comments', 'wpcode_snippet_disable_feed', 1);
// Remove links to feed from the header.
remove_action('wp_head', 'feed_links_extra', 3);
remove_action('wp_head', 'feed_links', 2);
