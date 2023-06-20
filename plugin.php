<?php
/**
 * project_urlname
 *
 * @package           figuren-theater/project_urlname
 * @author            figuren.theater
 * @copyright         2022 figuren.theater
 * @license           GPL-3.0-or-later
 *
 * @wordpress-plugin
 * Plugin Name:       figuren.theater | project_name
 * Plugin URI:        https://github.com/figuren-theater/project_urlname
 * Description:       ... like the figuren.theater WordPress Multisite network.
 * Version:           1.0.0
 * Requires at least: 6.0
 * Requires PHP:      7.2
 * Author:            figuren.theater
 * Author URI:        https://figuren.theater
 * Text Domain:       figurentheater
 * Domain Path:       /languages
 * License:           GPL v3 or later
 * License URI:       http://www.gnu.org/licenses/gpl-3.0.txt
 * Update URI:        https://github.com/figuren-theater/project_urlname
 */
namespace Figuren_Theater\project_name;

const DIRECTORY = __DIR__;

add_action( 'altis.modules.init', __NAMESPACE__ . '\\register' );
