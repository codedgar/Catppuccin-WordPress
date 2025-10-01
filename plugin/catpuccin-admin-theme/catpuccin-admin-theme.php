<?php
/**
 * Plugin Name: Catppuccin Macchiato Admin Theme
 * Plugin URI: https://github.com/codedgar/Catppuccin-WordPress
 * Description: Applies the Catppuccin Macchiato color palette to the WordPress admin interface and login page. Includes full Wordfence support.
 * Version: 1.0.0
 * Author: Codedgar
 * Author URI: https://github.com/codedgar
 * License: GPL-2.0-or-later
 * License URI: https://www.gnu.org/licenses/gpl-2.0.html
 * Text Domain: catppuccin-admin-theme
 */

// Prevent direct access
if (!defined('ABSPATH')) {
    exit;
}

/**
 * Enqueue admin styles
 */
function catppuccin_enqueue_admin_styles() {
    wp_enqueue_style(
        'catppuccin-macchiato-admin',
        plugin_dir_url(__FILE__) . 'assets/css/macchiato.css',
        array(),
        '1.0.0',
        'all'
    );
}
add_action('admin_enqueue_scripts', 'catppuccin_enqueue_admin_styles');

/**
 * Enqueue login page styles
 */
function catppuccin_enqueue_login_styles() {
    wp_enqueue_style(
        'catppuccin-macchiato-login',
        plugin_dir_url(__FILE__) . 'assets/css/macchiato.css',
        array(),
        '1.0.0',
        'all'
    );
}
add_action('login_enqueue_scripts', 'catppuccin_enqueue_login_styles');