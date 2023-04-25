<?php
function wpcode_snippet_replace_howdy($wp_admin_bar)
{
	// Edit the line below to set what you want the admin bar to display intead of "Howdy,".
	$new_howdy = 'Welcome,';

	$my_account = $wp_admin_bar->get_node('my-account');
	$wp_admin_bar->add_node(
		array(
			'id' => 'my-account',
			'title' => str_replace('Howdy,', $new_howdy, $my_account->title),
		)
	);
}

add_filter('admin_bar_menu', 'wpcode_snippet_replace_howdy', 25);
