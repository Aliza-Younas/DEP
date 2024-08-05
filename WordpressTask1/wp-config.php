<?php
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
define( 'DB_NAME', 'WordpressTask1' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', '' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

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
define( 'AUTH_KEY',         'B9IXnz4J)GV1f3O&y*P!H]WG#7cJ[#M;>!BdFJ:q8c9kL[HpH?%H9:)#{UxZ$5{I' );
define( 'SECURE_AUTH_KEY',  '+`PECUo5n:?RY/8VG&`osT_J@fgg|%>^;;}LMHx,P;5A?*RHz8}s PjEgw(8(Wb)' );
define( 'LOGGED_IN_KEY',    '^$-_#pWY-FNZt?b{:FCL-(S1:3)Hi1)>}NvB{I-=yR~4+Y#`K=Qu?k2V@f(}%w>f' );
define( 'NONCE_KEY',        'd&NANR]K2i5zA2][fpb~TSg*uz<zzhi<L817K2h?WJWyRfhrb4I4elC(4~ZkM7J_' );
define( 'AUTH_SALT',        '*{q#d8`W>B8AII7=a8H.Vln^ltp,/C07o-1-$v***#|f.2EDB=#)p8`$(g.$#iRs' );
define( 'SECURE_AUTH_SALT', 'rCUX8Z(r#o3h>.cI02B_HnW59>;DaJ^.kf(%|y@iiG.{K&!v#6rCxJSAYBuYlWoK' );
define( 'LOGGED_IN_SALT',   '>twoczY{[i+/15n~vJR.j9%1h,F5`FX4]>~#ZXCW,XI]}!-Z%=,<A;@ER@QwLiFN' );
define( 'NONCE_SALT',       '6n=][k~@6mBN.+|N~!ER5 B$r+}|eBb>q;}oDm~^woCYu0lcHc`#s0Gx*= Uga&O' );

/**#@-*/

/**
 * WordPress database table prefix.
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
