<?php
/**
 * A url utility for WordPress.
 *
 * @package WP_Url_Util
 * @author Michael Novotny <manovotny@gmail.com>
 * @license GPL-3.0+
 * @link https://github.com/manovotny/wp-url-util
 * @copyright 2014 Michael Novotny
 *
 * @wordpress-plugin
 * Plugin Name: WP Url Util
 * Plugin URI: https://github.com/manovotny/wp-url-util
 * Description: A url utility for WordPress.
 * Version: 1.0.2
 * Author: Michael Novotny
 * Author URI: http://manovotny.com
 * License: GPL-3.0+
 * License URI: http://www.gnu.org/licenses/gpl-3.0.html
 * Domain Path: /lang
 * Text Domain: wp-url-util
 * GitHub Plugin URI: https://github.com/manovotny/wp-url-util
 */


/* Composer
---------------------------------------------------------------------------------- */

if ( file_exists( __DIR__ . '/vendor/autoload.php' ) ) {

    require_once __DIR__ . '/vendor/autoload.php';

}

/* Initialization
---------------------------------------------------------------------------------- */

require_once __DIR__ . '/src/initialize.php';