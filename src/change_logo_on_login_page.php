<?php
// Replace WordPress Logo on Login Page

add_filter('login_head', function () {
	// Update the line below with the URL to your own logo.
	// Adjust the Width & Height accordingly.
	$custom_logo = 'https://wpcode.com/wp-admin/images/wordpress-logo.svg';
	$logo_width = 84;
	$logo_height = 84;

	printf(
		'<style>.login h1 a {background-image:url(%1$s) !important; margin:0 auto; width: %2$spx; height: %3$spx; background-size: 100%%;}</style>',
		$custom_logo,
		$logo_width,
		$logo_height
	);
}, 990);
