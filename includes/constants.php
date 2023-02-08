<?php
/**
* Collection of constants used all over the plugin.
*/

// Prefix

if ( ! defined( 'EPC_PREFIX' ) ) {
    define( 'EPC_PREFIX', 'epc' );
}

// Lang

if ( ! defined( 'EPC_LANG_DOMAIN' ) ) {
  define( 'EPC_LANG_DOMAIN', 'epc-lang' );
}

// Dirs

if ( ! defined( 'EPC_ROOT_DIR_PATH' ) ) {
    define( 'EPC_ROOT_DIR_PATH', rtrim( plugin_dir_path(__DIR__), '/' ) );
}

if ( ! defined( 'EPC_INCLUDES_DIR_PATH' ) ) {
    define( 'EPC_INCLUDES_DIR_PATH', EPC_ROOT_DIR_PATH . '/includes' );
}

if ( ! defined( 'EPC_PLUGINS_DIR_PATH' ) ) {
    define( 'EPC_PLUGINS_DIR_PATH', EPC_INCLUDES_DIR_PATH . '/plugins' );
}

if ( ! defined( 'EPC_DATA_DIR_PATH' ) ) {
    define( 'EPC_DATA_DIR_PATH', EPC_ROOT_DIR_PATH . '/data' );
}

if ( ! defined( 'EPC_ASSETS_DIR_PATH' ) ) {
    define( 'EPC_ASSETS_DIR_PATH', plugin_dir_path( __DIR__ ) . 'assets' );
}

if ( ! defined( 'EPC_ASSETS_DIR_URL' ) ) {
    define( 'EPC_ASSETS_DIR_URL', plugin_dir_url( __DIR__ ) . 'assets' );
}


if ( ! defined( 'EPC_ASSETS_VERSION' ) ) {
    define( 'EPC_ASSETS_VERSION', '0.1.12' );
}

// Post Types

if ( ! defined( 'EPC_POST_TYPE_CALCULATOR' ) ) {
    define( 'EPC_POST_TYPE_CALCULATOR', 'epc_calculator' );
}

if ( ! defined( 'EPC_POST_TYPE_SUBMISSION' ) ) {
    define( 'EPC_POST_TYPE_SUBMISSION', 'epc_submission' );
}

// Views

if ( ! defined( 'EPC_ADMIN_VIEWS' ) ) {
    define( 'EPC_ADMIN_VIEWS', EPC_ROOT_DIR_PATH . '/includes/admin/views' );
}

if ( ! defined( 'EPC_FRONSITE_VIEWS' ) ) {
    define( 'EPC_FRONSITE_VIEWS', EPC_ROOT_DIR_PATH . '/includes/frontsite/views' );
}

// Shortcode

if ( ! defined( 'EPC_SHORTCODE_KEY' ) ) {
    define( 'EPC_SHORTCODE_KEY', 'epic-project-calculator' );
}

// Scripts handlers

if ( ! defined( 'SCRIPT_VENDOR_HANDLE' ) ) {
    define( 'SCRIPT_VENDOR_HANDLE',  'epc-vendor' );
}

if ( ! defined( 'SCRIPT_PUBLIC_HANDLE' ) ) {
    define( 'SCRIPT_PUBLIC_HANDLE',  'epc-public' );
}
