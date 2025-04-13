<?php
define( 'WP_CACHE', true );


/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the website, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'i10227498_ptr41' );

/** Database username */
define( 'DB_USER', 'i10227498_ptr41' );

/** Database password */
define( 'DB_PASSWORD', 'W.Bht0JJ6ksSeoqZWK343' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

/** The database collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication unique keys and salts.
 *
 * Change these to different unique phrases! You can generate these using
 * the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}.
 *
 * You can change these at any point in time to invalidate all existing cookies.
 * This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'SOhncq8BUvvzCmOiGy0xUn3RG3WKtKgiuYtAPVxPwG26y94y41Kxui6AXI7fg2sG');
define('SECURE_AUTH_KEY',  'Ll4lbpZwde6xMEMkeGvAHT0Njty3B12CVpYWnGpARjRpweyhlWjSOFrZGq8ca1Kr');
define('LOGGED_IN_KEY',    'swZYCBDCZxj0xazL3xkUO6uI9lBXoJEo4ybYVa0VEVBXBnZrNoq0mNqzeH8XFSHS');
define('NONCE_KEY',        'WNJhDv0VMjYnzcGU0CcuOwVup80d4dliILcxa6Mb3BGa5mwQhDixWjIvEmo286zc');
define('AUTH_SALT',        'ZXvMdl5UH6Uib7ZCptnIapCbcKlAGXBmw5BWxBpyoivrmbWENisKjvbDP75izVZH');
define('SECURE_AUTH_SALT', 'hFOeIiPzUzKm1oedwwLXtaJI4KVXxtAlxGBdUlFmBisqPYwT0dxYYmJPxkel9Clz');
define('LOGGED_IN_SALT',   '4pCv7O0FnNAOIxx4WqUMNyoHJj0csUJABZz6u5oZa5DkgaqCP27mbLhUPGjsWesA');
define('NONCE_SALT',       '5JaKuUpORqFJPSi3BQL3J5I4rckilpunk0zL93MHGroanhjqyBlM4vqqghSKuFOi');

/**
 * Other customizations.
 */
define('WP_TEMP_DIR',dirname(__FILE__).'/wp-content/uploads');


/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 *
 * At the installation time, database tables are created with the specified prefix.
 * Changing this value after WordPress is installed will make your site think
 * it has not been installed.
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/#table-prefix
 */
$table_prefix = 'ujxu_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 *
 * For information on other constants that can be used for debugging,
 * visit the documentation.
 *
 * @link https://developer.wordpress.org/advanced-administration/debug/debug-wordpress/
 */
define( 'WP_DEBUG', false );

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
