<?php defined('SYSPATH') or die('No direct script access.');

/**
 * Set the routes. Each route must have a minimum of a name, a URI and a set of
 * defaults for the URI.
 */
foreach (Kohana::$config->load('routes') as $name => $params)
	Route::set($name, $params['uri'], @$params['rules'])->defaults($params['defaults']);