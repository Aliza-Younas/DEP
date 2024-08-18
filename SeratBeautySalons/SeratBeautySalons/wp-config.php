<?php
/** Enable W3 Total Cache */
define('WP_CACHE', true); // Added by W3 Total Cache

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
define( 'DB_NAME', 'SeratBeautySalons' );

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
define( 'AUTH_KEY',         'y+l 9e~7s;XD&gf>JjmOdnH)/Mwn`%uN&:Y4)?)(.Qg__h6I43A).u{!mB@laLn&' );
define( 'SECURE_AUTH_KEY',  '6t|CY^A+Pn&F:;G`{),|rA%4Dytj1r&MqiKG|Rqb5^>vY9 Sx]E(B`K|g@9?l4#}' );
define( 'LOGGED_IN_KEY',    '5}QW}G _W%NTaYX,%K&b>$aTn>558mC@c~Lp7gZ+$2M(5XM6%i&{n`EagpR1G<hq' );
define( 'NONCE_KEY',        'U/IcA4u@@$&2}ePLii[geyXv<NUmE4-O@l|r?$]Q+&ql@%^~8h)]/^uUKT>3glED' );
define( 'AUTH_SALT',        ';BH?& oHL=!!bnBbAs+2aolv%:``dlteNtq=1a{Kz~Ge0~l$W>$yq?RSjr|/.-6%' );
define( 'SECURE_AUTH_SALT', 'z*< I%Uu@pV1EQI?qKh-TSPVVd5r>@5+x=&.{jWZbu$t|h5c9|n:+LT-%~[WO*`]' );
define( 'LOGGED_IN_SALT',   'd$r=asXuYBKLhR.R0^$6qgCv&sG(d%=1US9v$ <u_bFPfmhg;H}!{WyGK,Fri|K5' );
define( 'NONCE_SALT',       'XR0kJ)lI!s.NzQc&@aJuNUmjXtu/+}A{FhV/`da3-_ F^PgGB@[jMMqo_&m{+Kel' );

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
