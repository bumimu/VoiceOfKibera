<?php defined('SYSPATH') or die('No direct script access.');

/**
* SITE CONFIGURATIONS
*/

// Find the subdomain (for MHI)
$subdomain = '';
if(substr_count($_SERVER["HTTP_HOST"],'.') > 1) $subdomain = substr($_SERVER["HTTP_HOST"],0,strpos($_SERVER["HTTP_HOST"],'.'));

$config = array
(
	'site_name' => 'Ushahidi',
	'site_email' => '',
	'default_map' => '',
	'api_google' => '',
	'api_yahoo' => '',
	'default_city' => '',
	'default_country' => '',
	'default_lat' => '',
	'default_lon' => '',
	'default_zoom' => '18',
	'items_per_page' => '20',
	'items_per_page_admin' => '20',
	'api_url' => '<script src="http://maps.google.com/maps?file=api&v=2&key=" type="text/javascript"></script>',
	'api_url_all' => '',
	'subdomain' => $subdomain
);
