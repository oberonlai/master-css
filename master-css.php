<?php

/**
 * Master CSS
 *
 * @link              https://oberonlai.blog
 * @since             0.0.2
 * @package           TWP
 *
 * @wordpress-plugin
 * Plugin Name:       Master CSS
 * Plugin URI:        https://oberonlai.blog
 * Description:       Use the Master CSS right in the WordPress without any build step. Learn more about <a href="https://css.master.co">Master CSS</a>.
 * Version:           0.0.1
 * Author:            Oberon Lai
 * Author URI:        https://oberonlai.blog
 * License:           GPL-2.0+
 * License URI:       http://www.gnu.org/licenses/gpl-2.0.txt
 * Text Domain:       msc
 * Domain Path:       /languages
 */

defined( 'ABSPATH' ) || exit;

define( 'MSC_VERSION', '0.0.2' );
define( 'MSC_PLUGIN_URL', plugin_dir_url( __FILE__ ) );
define( 'MSC_PLUGIN_DIR', plugin_dir_path( __FILE__ ) );
define( 'MSC_PLUGIN_BASENAME', plugin_basename( __FILE__ ) );

/**
 * Autoload
 */
require_once MSC_PLUGIN_DIR . 'vendor/autoload.php';
\A7\autoload( MSC_PLUGIN_DIR . 'src' );
