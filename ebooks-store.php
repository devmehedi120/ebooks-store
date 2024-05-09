<?php

/**
 * The plugin bootstrap file
 *
 * This file is read by WordPress to generate the plugin information in the plugin
 * admin area. This file also includes all of the dependencies used by the plugin,
 * registers the activation and deactivation functions, and defines a function
 * that starts the plugin.
 *
 * @link              https://wpdevmehedi.com
 * @since             1.0.0
 * @package           Ebooks_Store
 *
 * @wordpress-plugin
 * Plugin Name:       e-Book's Store
 * Plugin URI:        https://https://www.fiverr.com/wpdevmehedi
 * Description:       This Plugin is made for a online books store
 * Version:           1.0.0
 * Author:            Mehedi Hasn
 * Author URI:        https://wpdevmehedi.com/
 * License:           GPL-2.0+
 * License URI:       http://www.gnu.org/licenses/gpl-2.0.txt
 * Text Domain:       ebooks-store
 * Domain Path:       /languages
 */

// If this file is called directly, abort.
if ( ! defined( 'WPINC' ) ) {
	die;
}

/**
 * Currently plugin version.
 * Start at version 1.0.0 and use SemVer - https://semver.org
 * Rename this for your plugin and update it as you release new versions.
 */
define( 'EBOOKS_STORE_VERSION', '1.0.0' );
define( 'EBOOKS_STORE_FRAGMENT', array(
    'absolute_url' => plugin_dir_url( __FILE__ )
) );

define('VITERJS_DEV_MOOD', true);
 add_action( "wp_enqueue_scripts", function(){
    if(defined('VITERJS_DEV_MOOD') && VITERJS_DEV_MOOD){
        add_action( "wp_head", function(){
            ?>
            <script type="module">
                import RefreshRuntime from "http://localhost:3000/@react-refresh"
                RefreshRuntime.injectIntoGlobalHook(window)
                window.$RefreshReg$ = () => {}
                window.$RefreshSig$ = () => (type) => type
                window.vite_plugin_react_preamble_installed = true
            </script>

            <script>
                const fragment = <?php echo json_encode(EBOOKS_STORE_FRAGMENT) ?>;
            </script>
            <script type="module" crossorigin src="http://localhost:3000/src/main.jsx"></script>
            <?php
        } );
    }else{
        wp_enqueue_style( 'viterjs', plugin_dir_url(__FILE__).'dist/assets/main-m0DGwFy9.css', array(), '1.0.0', 'all' );
        wp_enqueue_script( 'viterjs', plugin_dir_url(__FILE__).'dist/assets/main-7kmqk901.js', array('jquery'), '1.0.0', true );
    }
 } );

/**
 * The code that runs during plugin activation.
 * This action is documented in includes/class-ebooks-store-activator.php
 */
function activate_ebooks_store() {
	require_once plugin_dir_path( __FILE__ ) . 'includes/class-ebooks-store-activator.php';
	Ebooks_Store_Activator::activate();
}

/**
 * The code that runs during plugin deactivation.
 * This action is documented in includes/class-ebooks-store-deactivator.php
 */
function deactivate_ebooks_store() {
	require_once plugin_dir_path( __FILE__ ) . 'includes/class-ebooks-store-deactivator.php';
	Ebooks_Store_Deactivator::deactivate();
}

register_activation_hook( __FILE__, 'activate_ebooks_store' );
register_deactivation_hook( __FILE__, 'deactivate_ebooks_store' );

/**
 * The core plugin class that is used to define internationalization,
 * admin-specific hooks, and public-facing site hooks.
 */
require plugin_dir_path( __FILE__ ) . 'includes/class-ebooks-store.php';

/**
 * Begins execution of the plugin.
 *
 * Since everything within the plugin is registered via hooks,
 * then kicking off the plugin from this point in the file does
 * not affect the page life cycle.
 *
 * @since    1.0.0
 */
function run_ebooks_store() {

	$plugin = new Ebooks_Store();
	$plugin->run();

}
run_ebooks_store();
