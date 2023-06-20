<?php
/**
 * Figuren_Theater QQQQQQQQ.
 *
 * @package figuren-theater/qqqqqqqqqqqqq
 */

namespace Figuren_Theater\QQQQQQQQ;

use Altis;
use function Altis\register_module;


/**
 * Register module.
 */
function register() {

	$default_settings = [
		'enabled' => true, // needs to be set
	];
	$options = [
		'defaults' => $default_settings,
	];

	Altis\register_module(
		'qqqqqqqqqqqqq',
		DIRECTORY,
		'QQQQQQQQ',
		$options,
		__NAMESPACE__ . '\\bootstrap'
	);
}

/**
 * Bootstrap module, when enabled.
 */
function bootstrap() {

	// Plugins
	//...\bootstrap();
	
	// Best practices
	//...\bootstrap();
}
