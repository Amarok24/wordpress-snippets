<?php
/**
 * Add the post thumbnail, if available, before the content in feeds.
 * @param string $content The post content.
 * @return string
 */
function wpcode_snippet_rss_post_thumbnail($content)
{
	global $post;
	if (has_post_thumbnail($post->ID)) {
		$content = '<p>' . get_the_post_thumbnail($post->ID) . '</p>' . $content;
	}

	return $content;
}

add_filter('the_excerpt_rss', 'wpcode_snippet_rss_post_thumbnail');
add_filter('the_content_feed', 'wpcode_snippet_rss_post_thumbnail');
