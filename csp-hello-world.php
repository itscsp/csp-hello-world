<?php
/**
 * Plugin Name: CSP Hello World
 * Description: A simple OOP-based Hello World WordPress plugin.
 * Version: 1.0.0
 * Author: Chethan S Poojary
 * Text Domain: csp-world-plugin
 */

defined( 'ABSPATH' ) || exit;

// Define constants
define( 'HWP_PLUGIN_DIR', plugin_dir_path( __FILE__ ) );
define( 'HWP_PLUGIN_URL', plugin_dir_url( __FILE__ ) );

// Autoload or manually include the class
require_once HWP_PLUGIN_DIR . 'includes/class-hello-world.php';


// Initialize the plugin
function hwp_run_plugin() {
    $plugin = new Hello_World_Plugin();
    $plugin->run();

}
add_action( 'plugins_loaded', 'hwp_run_plugin' );