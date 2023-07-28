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


define('AUTH_KEY',         'tg56McJyHi3Ix3MO3au82cKbSavPxBVVXGiAejzd0WsHfa9dS2qnsVeDXk497ryxjtkrKhxO6DZyZgHjkhG4Ug==');
define('SECURE_AUTH_KEY',  'GWqf4T8186+K7tNRDz7Br89DiezBaMFyNF4rhidboNScLiWxF4qsvtqAGDp/9pT6vpf9vpKhB9qxUM8zcxcCXg==');
define('LOGGED_IN_KEY',    '2kMHbNcl5NLs4fnb/6Hypncee93cDGKVMvQnNhy26GXpoW2xtXrYHJjG1D6cgxZ3M27/nVNur1lh3GBGT3GgIg==');
define('NONCE_KEY',        '15RgWMuY4Ln0pqhAnmae7GS+TBf2ciqdLMM4s+OyXs0HUGc0ow38ZBxwT45A/7uhnuOEQnTQIRKsM7QgXAg5xQ==');
define('AUTH_SALT',        '6XOqoUYPWv0sZMCcGa2+5AoSFxcMhhTVtZshV3HZ1Mj1WGwGsafhm8YJHZjspTCQavqC62oOvMEa/V/fi4q8lg==');
define('SECURE_AUTH_SALT', 'I+5J1UWgm/zONwCVaA+okcop+ChK+OIe+POVUnvmMpYPekPCq+IWVQz6b61cTzojWaX1AxzWw3zcdwT0qA7ULQ==');
define('LOGGED_IN_SALT',   'UyzkWUY7xPs/AaLSpBtUS1Y1tt8FTGun0jDZWHk87iPLNjX31zlgqtqYR0TpVbGK7NN95FqilbSYCtvx/ZrAmA==');
define('NONCE_SALT',       'aFBlNPxjnAQAbmxbYA2DocqIIyUyjPByTkcefEK3YEocJlY7mmVwEBT8BvPiJ/ipblWU86WfeS+2Ctg65FLZ2A==');
define( 'WP_ENVIRONMENT_TYPE', 'local' );
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
