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
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'wordpress' );

/** Database username */
define( 'DB_USER', 'wordpress' );

/** Database password */
define( 'DB_PASSWORD', 'wordpress' );

/** Database hostname */
define( 'DB_HOST', 'database' );

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
define( 'AUTH_KEY',         'yPd2}Yr{7o]8(Mxm.h9CM.bssof-(w]dNN#{WTwO@Q_T;Mpq85)#Vl-6?0Vhs$GS' );
define( 'SECURE_AUTH_KEY',  '=;dph=J~]z+u!qRw86KY=NYC-Uz)/W4HkiqW/~_Kmw[!)$q2!3<V T@N[yt2r8CW' );
define( 'LOGGED_IN_KEY',    'PYVYPhbk-L[bV2/]Pf#+O^g27PmwT/U*T[#2dz,mxS4fjxus,dq|l;V!dWIy.!6b' );
define( 'NONCE_KEY',        'v#MT|tLxciE|Z*Pf&4!z{,JIW#Bb327OPSgbZa30m62~waP-1aPD,/E/FG<s8.o9' );
define( 'AUTH_SALT',        'Sud;7#% #7^{sR?ybt9)m=I@~6Z;k?j<A6,AM{F>BoNAiCv6)y/4K{5z4-X%w5v.' );
define( 'SECURE_AUTH_SALT', 'ctw3,92]8f1ZA-D`4g.q#*&8XM5R_Q_oc2IN)L907%bY|:zFT:U jJeT~9iEs)|;' );
define( 'LOGGED_IN_SALT',   'k)[-c9V7RGSwca{GliqNm%&._lI@_m a5afS7qY[{]kvA?(;Y.Bf>k&1KfOX+<$>' );
define( 'NONCE_SALT',       'Xap%i{Yas8cE1^Evv<GBTY{6Ms wD6f0?iAOR_,9NR4/5cZ5SKe@kln76Cq,^g_}' );
define('TMDB_API_KEY',      'c5e03873865e98f550b7600d62b8fe23');

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
