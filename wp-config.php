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
define( 'DB_NAME', 'automods_db' );

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
define( 'AUTH_KEY',         'Z(/i@Uh)EXHgF1_GR|0 &-g1xxt?NpP@8ZMsmr*VpULEw|Z4}`{VutB|6xiyZmL`' );
define( 'SECURE_AUTH_KEY',  'hT%!>K7  i7:>:)KupI*q9+Brs5MIDA|b|{3nNN;L/6]r;6l/{dxB!4B|60/U&}r' );
define( 'LOGGED_IN_KEY',    't7XKPkd!_#|4wM)4]GON62?mZC{Vosb03Qr 5_Ph^~mP;3o%BKduUaD!l7pH{XbS' );
define( 'NONCE_KEY',        'N{<`MvD@JywluTPUvM?:GB?%0.x* tWttB{2TgzZU:wELd9n/!PHe^e9-Un1I?_}' );
define( 'AUTH_SALT',        '5)4fWQ[im>jmjNO$nhe4~OzR]:qq qJ~v6pS2}JV{`e!uO32T6RSwecvK-|j+l?N' );
define( 'SECURE_AUTH_SALT', ':9;*1+1U>>XsA%8`;lXdGBFo j2Q{sgn.(DRTIeRj$iy^SsePNi%6?g G7g*kdzl' );
define( 'LOGGED_IN_SALT',   'dBp4<SbgFw |D*SG>^G-g97O#0*(KBfFTfo^y;c8<X7@.o][ivN!G-swK%O76uW;' );
define( 'NONCE_SALT',       'c]GX>z49WOFl6R2^F,cRHmv4X9YT,r4xMm~feBW,I@%bJ%#/I[?aBiblGg_`,I`7' );

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
