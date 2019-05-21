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
define( 'DB_NAME', 'portfoliozia' );

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
define( 'AUTH_KEY',         '}.c$I1QIvEeQo_J]hN(?NJ8UtGY|1#2W,F]JS[Q54v-BfMtAai-tO:wC8`R^gbU3' );
define( 'SECURE_AUTH_KEY',  'J*Sq)_k`ApIy=;iJ~}Q]AEiijs+rdQ2Cq0(H-BxbmO`(ru=2C2m|5=WM9MhEG&s7' );
define( 'LOGGED_IN_KEY',    '%qoMk*xQ(3xtZ?bxzySADc2l(Gyzw0CNl(4j}?fra1[|!&dEnvQP..:WJfooK.a.' );
define( 'NONCE_KEY',        'tt[.8~A{n>/Mv*9yp}g![A{K!d3x:[Q#_C+()eTP0dR{ErSf?#]{P;B{4mt!yL]9' );
define( 'AUTH_SALT',        '}9Jek]U_)<FAI-?A&[|Zidg8%)/K5R8g^=87O7(61mH-D_el 5vxA~FmETiZ2, >' );
define( 'SECURE_AUTH_SALT', '0%o*%gW1){mGB?##$Z0y*5xJ_E9sS*hC&Y$4xij*mtCBv88b75My53>rR[+2ePh6' );
define( 'LOGGED_IN_SALT',   'b}1xRC8lenvLFa^P[fQ7rh|kRQ0g,:DLK#Jnl*g/oMBn$5lr:)qU#P#[0)q/54E}' );
define( 'NONCE_SALT',       'm@ )fYKfV&gy3j,G}L^lwE(G)OPOE@wI<+d4~G9)Lgml{Z>#/O%^oQnuW{Mqj7W4' );

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
