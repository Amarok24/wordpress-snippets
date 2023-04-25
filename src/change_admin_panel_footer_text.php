<?php

add_filter(
	'admin_footer_text',
	function ($footer_text) {
		// Edit the line below to customize the footer text.
		$footer_text = 'Powered by <a href="https://www.wordpress.org" target="_blank" rel="noopener">WordPress</a>, <a href="https://en.wikipedia.org/wiki/Apache_HTTP_Server" target="_blank" rel="noopener">Apache</a> and Linux.';

		return $footer_text;
	}
);
