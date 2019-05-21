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
define( 'DB_NAME', 'portfolio' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

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
define( 'AUTH_KEY',         '.W7q`Iet;*nu6XgMbT{P%Q-bESe>EpK$$@Wh4_4P%4EA.&m%O:9%~|STz;3^1RY|' );
define( 'SECURE_AUTH_KEY',  'BA}2>pl)Wu_V:Pn8ZlCGM[])Zt`@N6XPzq68&%*+$THhk}x{c=%v@pp1!-6z_XDL' );
define( 'LOGGED_IN_KEY',    'Nh3x!BYJzdh;2tGM|L@!uc=!ORMPrA[1V@]uqg4Qr$0H^(s5rQ6TU#lW>&Fh9meU' );
define( 'NONCE_KEY',        'J2t ^tV1,W~k/Qw2xN9~fF,%*?C`~(W:{TVdsPR9[K.3I[%n+bz;8mH%usbo>mdx' );
define( 'AUTH_SALT',        'exJ5UH!rKEliO|Sf`DSAcG<53_1~.bwfQez-)$nIX2 :&csYE1;!SFctRh(zT10*' );
define( 'SECURE_AUTH_SALT', 'mMLTAT4R>3gg2{3v(Z)N.MT`b)ACpImn9zOwGxr9t_bDx4y?GxC?NhdnNjBY8}YP' );
define( 'LOGGED_IN_SALT',   '!_;-:1~X~,}A^5){uxLLNX UC$0dKiH`}X~fL_,j$l&.re]>9 .Ow>nx]fBspRgo' );
define( 'NONCE_SALT',       'Z!/R]t{^N dB5D(-z&&D?_%Jr9HK!mvs0hIy~#,kL0J9iIXpw7<F>]H5Y=8~ 7.5' );

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

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once( ABSPATH . 'wp-settings.php' );
