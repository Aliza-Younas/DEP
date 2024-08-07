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
 * * ABSPATH
 *
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'Store' );

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
define( 'AUTH_KEY',         'vUdMo)g.bNNFp#2s+&p66tJx*gqGJWnnmYF/3Ro7;/fzQ^wwNT[p_zP,9[&ZOXz<' );
define( 'SECURE_AUTH_KEY',  'pzj_0pK,;_/R2Dxn+KIDv207MJPjhc3?E!f?:?~uV$ttEp6AXY9{~`o6GyOU4sHS' );
define( 'LOGGED_IN_KEY',    'WD7]TXKl`*8e)JA9mK|4whtrxf)-OkC)&JKym?g#O]`L-deu/&G]Hoi7m$L?CFHQ' );
define( 'NONCE_KEY',        'Ejw;KL!|J=cl(U_uvAXmQNm2uy,K4&:w|H,;?P@H`aWRiBGXynyN9_M4AIvD`f_,' );
define( 'AUTH_SALT',        'qrXk}WZ%t_ZT%fT*_].uP+$3^74<0oH#6hjpM.H8g[tB..HG,?62rAlQPky1^]8G' );
define( 'SECURE_AUTH_SALT', 'k+_h_U1,1vo{C],-FeN3<W)6D-pAb@eH{Cb`1dX<z,1ectTVs2nX/Xg?btxr/P%C' );
define( 'LOGGED_IN_SALT',   'Q-C>q^b`Vkl@*o>zzr/K?__^9ma<Mh70UKO6^U#q>.1H~OOAJ2&1J6g_Z{6y[9]g' );
define( 'NONCE_SALT',       '`0Hk<1?6BxBgF2te7_WU%El)hSqXR/q}^|hF9x_nrGo0dY r-]eGatNbG~/+XA_:' );

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
 * @link https://wordpress.org/documentation/article/debugging-in-wordpress/
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
