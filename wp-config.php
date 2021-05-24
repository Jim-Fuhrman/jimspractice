<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the
 * installation. You don't have to use the web site, you can
 * copy this file to "wp-config.php" and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * MySQL settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'jimspracDB5ujul');

/** MySQL database username */
define( 'DB_USER', 'jimspracDB5ujul');

/** MySQL database password */
define( 'DB_PASSWORD', '3QK6hZhvnv');

/** MySQL hostname */
define( 'DB_HOST', '127.0.0.1');

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY', 'UB>^vnfYQIB3{,$vnfY:#~wphZSKC5:|~wohZSKC5|~wohZRKC4:|@wohZRKC4:|');
define( 'SECURE_AUTH_KEY', 'RG81[@wohZRKC4:|@wogZRJC4}|@vogZRJC4}|@vogYRJB4},@vogYRJeWPH92]_+');
define( 'LOGGED_IN_KEY', '4[!wohZRK80[!zogZRJC4}|@vogZRJC4}|@vogYRJB4},A2].+tmeWPH92]_+tleW');
define( 'NONCE_KEY', '!vogZRJC4}|@vkcVNF80>!zrkcUNF74>^zrkcUNF70>^5;#~xphaSLD5;#~xphaSK');
define( 'AUTH_SALT', 'G4}|@skcVNF80>!zskcVNF80>!zrkcUNF70>^zrk*xpiaSLD5;#~xphaSLD5;#~xp');
define( 'SECURE_AUTH_SALT', 'ocUNF70>^zrgYQJB3},@vngYQJB3},$vnf-tldWOH91]_-tldWOG91[_-sldWOG91');
define( 'LOGGED_IN_SALT', 'UNB4},@vngYQJB3},@vngYQJBWOH91]_-tldWOH91]_-tldWOG91[_-sldWOG91[_');
define( 'NONCE_SALT', 'QEWOG91[_-sldWOG91[_-sldVOG81[!-skdVOG81[!-skdVNG80[!zskdVNG80[!z');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 *
 * For information on other constants that can be used for debugging,
 * visit the Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define( 'WP_DEBUG', false );
define('FS_METHOD', 'direct');

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once( ABSPATH . 'wp-settings.php' );
