<?php
/**
 * Bootstrap file for setting the ABSPATH constant
 * and loading the wp-config.php file. The wp-config.php
 * file will then load the wp-settings.php file, which
 * will then set up the WordPress environment.
 *
 * If the wp-config.php file is not found then an error
 * will be displayed asking the visitor to set up the
 * wp-config.php file.
 *
 * Will also search for wp-config.php in WordPress' parent
 * directory to allow the WordPress directory to remain
 * untouched.
 *
 * @internal This file must be parsable by PHP4.
 *
 * @package WordPress
 */

/** Define ABSPATH as this file's directory */
//define( 'ABSPATH', dirname(__FILE__) . '/' );
define('ABSPATH', app_root_path());

// ustc-blog: no FTP or SSH access is provided.
// If a file is not writable, fail fast.
define('FS_METHOD', 'direct');

error_reporting( E_CORE_ERROR | E_CORE_WARNING | E_COMPILE_ERROR | E_ERROR | E_WARNING | E_PARSE | E_USER_ERROR | E_USER_WARNING | E_RECOVERABLE_ERROR );

$table_prefix  = 'wp_';

define('WPLANG', 'zh_CN');

define('WP_DEBUG', false);

/** The config file resides in ABSPATH */
require_once( ABSPATH . 'wp-config.php' );

/** Set up and fix common variables */
require_once(ABSPATH . 'wp-settings.php');

/* The blog filesystem is automatically generated.
 * There is no need for Wordpress to check it. */
