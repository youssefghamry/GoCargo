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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'GoCargo' );

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
define( 'AUTH_KEY',         ';**Ls_3OYW/0+b2b|4HN]w7RM@SBR:_awFpPdE=sWVnz)Vi?h,<j{Cv{({OmqGcB' );
define( 'SECURE_AUTH_KEY',  'jsmct;=46fA< }d2u!(T.7?dzKu[^[6<I-U?Q>OovKH=Z$?<^hcbhLVBDpe}@|]2' );
define( 'LOGGED_IN_KEY',    'CI1L*7x$PgnGHTfhwC;*?gn9c9.+j6i(f]q&+k(K6-A;Szz#|y+kOURuO3KL#iK2' );
define( 'NONCE_KEY',        'Jq=Ge WLsv(c_d?3r!fn;:12v8$gJi) oEQtVgq5/#Xy^+DBGi$~bKk<0G@khQFn' );
define( 'AUTH_SALT',        '+zWAAZ:I^T9<beL 373)bhITT7+GZ%hE?V*]0:(qLMS&?_.,[#RPcGtlA})5z#Ax' );
define( 'SECURE_AUTH_SALT', 'p@L!JsVJ>AO+2~$U[lQffpY80E.XQ`jlN/xf^Wt3E7{<~6S#-uZGMqi);wV*U`q@' );
define( 'LOGGED_IN_SALT',   'dz#}5v(:ws~(#y_d?B*YJoI=(V^~u:{tn hA^#:#q]FNFLEso/#AOq3B!k<c_/|]' );
define( 'NONCE_SALT',       '-lL~^EB$0<B^R5&vNjJiqfO@*EJkG*;5kvA$JPC]lM`HXJ(OLsv22^#<QA1Dlwqf' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_GoCargo';

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

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
