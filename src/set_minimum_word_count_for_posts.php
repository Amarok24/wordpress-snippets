<?php

/**
 * Prevent publishing posts under a minimum number of words.
 * @param int     $post_id The id of the post.
 * @param WP_Post $post The post object.
 */
function wpcode_snippet_publish_min_words($post_id, $post): void
{
	// Edit the line below to set the desired minimum number of words.
	$word_count = 100;

	if (str_word_count($post->post_content) < $word_count) {
		wp_die(
			sprintf(
				// Translators: placeholder adds the minimum number of words.
				esc_html__('The post content is below the minimum word count. Your post needs to have at least %d words to be published.'),
				absint($word_count)
			)
		);
	}
}

add_action('publish_post', 'wpcode_snippet_publish_min_words', 9, 2);
