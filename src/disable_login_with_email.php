<?php
// Force your users to login only using their username.

remove_filter('authenticate', 'wp_authenticate_email_password', 20);
