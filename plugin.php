<?php

/**
 * @package bootstrap_icons_wordpress_plugin
 * @version 1.11.0
 **/

/*
Plugin Name: Bootstrap Icons
Plugin URI: https://greoux.re/code/index.php/bootstrap-icons-wordpress-plugin/
Description: Add Bootstrap Icons (1.11.0) to WordPress posts and pages.
Author: Gréoux Research
Version: 1.11.0
Author URI: https://greoux.re
 */

/* --- */

if (!function_exists("add_action")) {
    exit;
}

/* --- */

define("GREOUXRE_BOOTSTRAP_ICONS_URL", plugin_dir_url(__FILE__));

/* --- */

function GREOUXRE_BOOTSTRAP_ICONS_WP_ENQUEUE_SCRIPTS()
{
    wp_enqueue_style(
        "bootstrap-icons",
        GREOUXRE_BOOTSTRAP_ICONS_URL . "assets/bootstrap-icons@1.11.0/bootstrap-icons.css"
    );
}

add_action("wp_enqueue_scripts", "GREOUXRE_BOOTSTRAP_ICONS_WP_ENQUEUE_SCRIPTS");

/* --- */
