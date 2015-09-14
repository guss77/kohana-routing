<?php defined('SYSPATH') or die('No direct script access.');

/**
 * Set the routes. Each route must have a minimum of a name, a URI and a set of
 * defaults for the URI.
 */
foreach (Kohana::$config->load('routes')->as_array() as $route) {
	foreach ($route as $name => $params) {
		error_log("Setting route $name");
		$r = Route::set($name, $params['uri'], @$params['rules']);
		if (@$params['defaults'])
			$r->defaults($params['defaults']);
	}
}
