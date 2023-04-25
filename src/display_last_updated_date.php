<?php
// Add the last updated date & time to your posts in the frontend.

$u_time = get_the_time('U');
$u_modified_time = get_the_modified_time('U');
// Only display modified date if 24hrs have passed since the post was published.
if ($u_modified_time >= $u_time + 86400) {

	$updated_date = get_the_modified_time('F jS, Y');
	$updated_time = get_the_modified_time('h:i a');

	$updated = '<p class="last-updated">';

	$updated .= sprintf(
		// Translators: Placeholders get replaced with the date and time when the post was modified.
		esc_html__('Last updated on %1$s at %2$s'),
		$updated_date,
		$updated_time
	);
	$updated .= '</p>';

	echo wp_kses_post($updated);
}
