<?php

define('WP_ALLOW_MULTISITE', true);

if ( @constant('MULTISITE') && ! @constant('WP_INSTALLING') ) {
	define('SUNRISE', true);
	define('SUBDOMAIN_INSTALL', true);
	define('PATH_CURRENT_SITE', '/');
	define('SITE_ID_CURRENT_SITE', 1);
	define('BLOG_ID_CURRENT_SITE', 1);
}
