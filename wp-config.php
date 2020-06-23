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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'parijathatheatre' );

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
define( 'AUTH_KEY',         'HT?MrvNs;<U;f:/dNz?(t)u`JKF9+Cq`DT?o$; wTdL_r}k)cCCd!0n1FtaPLibA' );
define( 'SECURE_AUTH_KEY',  'g%*~0L.7[R^;aEPG#:J)T8_Qz-Z9[e|be4XZH!Ce!ZM22?L1BJuTa@d4|3dm,HXE' );
define( 'LOGGED_IN_KEY',    'ce6gEflg0Qh>M_h,,Ca}?=O`b?8W+Ar$T(h_fwlcSI+z^1BKQHuS#T<hU:XNf;;(' );
define( 'NONCE_KEY',        '$>JJv4 &C2ThUAYjz7s55EAOn;nHEy$/l<>2xAyeHC`8/Q-!kUk(4WpKQ]I^=grW' );
define( 'AUTH_SALT',        'S,A~zU|@z4TQU&SR|%CS07h1C)|Z(oC|d!GO2n#k#0,#9@v>`L`L.o}MWh)]9rN?' );
define( 'SECURE_AUTH_SALT', 'UOl+w-R7kdt*D}`BYf|Rtg5lJ}iO(PdQycstOR1^6]QxJ_<l#=.$!j<wD5FhKO3]' );
define( 'LOGGED_IN_SALT',   'i?M f z|b3 #;D Nzqgy!//0Z#sZ&/qF!&9;:l+>FpZqzXhW[2D1nT&~WOvRVsd^' );
define( 'NONCE_SALT',       '*z@@P/amTSZV:8M)h[/Xdl_80cb2a&h`^gO$KqL/|4TL^6=L,lf!k@h8(MqKdIH%' );

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
 * visit the documentation.
 *
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
