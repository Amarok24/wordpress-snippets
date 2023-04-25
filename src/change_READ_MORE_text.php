<?php
// Change Read More Text for Excerpts
function wpcode_snippets_change_read_more($read_more, $read_more_text)
{

	// Edit the line below to add your own "Read More" text.
	$custom_text = 'Read the whole post';

	$read_more = str_replace($read_more_text, $custom_text, $read_more);

	return $read_more;
}

add_filter('the_content_more_link', 'wpcode_snippets_change_read_more', 15, 2);
