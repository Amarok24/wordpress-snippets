<?php
// Disable core auto-updates
add_filter('auto_update_core', '__return_false');
// Disable auto-updates for plugins.
add_filter('auto_update_plugin', '__return_false');
// Disable auto-updates for themes.
add_filter('auto_update_theme', '__return_false');
