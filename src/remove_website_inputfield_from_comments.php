<?php

add_filter('comment_form_default_fields', function ($fields) {
	if (isset($fields['url'])) {
		unset($fields['url']);
	}

	return $fields;
}, 150);
