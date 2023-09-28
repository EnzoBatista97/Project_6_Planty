<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the web site, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * Localized language
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'local' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'root' );

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


/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';


/* Add any custom values between this line and the "stop editing" line. */



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
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
 */
if ( ! defined( 'WP_DEBUG' ) ) {
	define( 'WP_DEBUG', false );
}


define('AUTH_KEY',         'RU4dGcM7Wu6TFJlCKEV5UwiCpEHe5XY/PRwJ03fQlZEm2YL/FmqSzirBH9eqRCdVGp9hfK9hQsTn+yctRCrxig==');
define('SECURE_AUTH_KEY',  '/NmzdOgYLCyiaKCzt3k5by/BY8jIask4TX3zEwGtNKStQGWr2TJE2a1iGGrB2vnaHci6QBeNw59JKH51H/ESKw==');
define('LOGGED_IN_KEY',    'eyfDXoM6pLEGRK+qVWmhTUwSWrMUZAcTU+lNTKLgwcFeJGgGuMulVmp+mHPNLbzL+zp9kgYgR38ZlWCyxdVfEg==');
define('NONCE_KEY',        '37Km97t1dhJoL2+P6lFBQbTpF71U7fiqMGs4Uz2SbhBG6FYQWDb/F0mEHfCvjTX3zqA4oVPVoyan0YEd0oJC3w==');
define('AUTH_SALT',        'fBJdNG60sNpzDj2pjb3GJaXM0aG7B/nHOSGd9+dtP4Ej42XCgWI7h0GV5TPU0J4EEYlNpHpbGwhif7geNVA4KA==');
define('SECURE_AUTH_SALT', 'KHsewyhGVqUVe74ce2zLq1c4J3aUOZaBhJ42JlBYKubVl4GuumhJUPZR3Dr0FwpVipErhgxYTsklMTYfCdNMEA==');
define('LOGGED_IN_SALT',   'vVSge/heDGL+Wb05i+SRkzw9wxUvEJ3It+bZ/8rEukBtSLImV2DYMjfNuY717xWc38I2Dp8G5QA0cCY8tN0XoA==');
define('NONCE_SALT',       '407uO32eZDO5FUgETjhGjPoFfI4PEJkGZVsvf7uDL0491pSo8ukFgB3xvdWj3rTHp0X6ZC4LRvTbZ8iKQNlBfg==');
define( 'WP_ENVIRONMENT_TYPE', 'local' );
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
