<?php

/*
Contrary to the way it’s named, this filter does not control whether XML-RPC is fully enabled, rather, it only controls whether XML-RPC methods requiring authentication – such as for publishing purposes – are enabled.
Further, the filter does not control whether pingbacks or other custom endpoints that don’t require authentication are enabled. This behavior is expected, and due to how parity was matched with the enable_xmlrpc UI option the filter replaced when it was introduced in 3.5.
To disable XML-RPC methods that require authentication, use:
*/

add_filter('xmlrpc_enabled', '__return_false');
