<?php
define( 'WP_CACHE', true );
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
 * * Localized language
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'u384055928_41q9w' );

/** Database username */
define( 'DB_USER', 'u384055928_0OgP5' );

/** Database password */
define( 'DB_PASSWORD', 'xVFCMhE5US' );

/** Database hostname */
define( 'DB_HOST', '127.0.0.1' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

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
define( 'AUTH_KEY',          '[J{r$8OW_DaUFT2VB/1lm.t237b43.=O1t@V=?D2j;sSI@vV/R$}1{X@ZTK1@6$C' );
define( 'SECURE_AUTH_KEY',   '1f-bI8ROwl/g$D)Nq5]bzBS=?)H{g=YRoNx,aIyALSN]Tv {?pGK0;+bYMy.-vfQ' );
define( 'LOGGED_IN_KEY',     'b3hso 6rTEilYE!h)lO4V{36wSQtI@|a%C5w#,`8o=$6*@`al?`424!ltd,v: 1[' );
define( 'NONCE_KEY',         'Vw2mUL@#v[++#i e|!wr>&nokA-;<0I[.avvsuNl?-3grP]yp<.Xec1_`K*jvRMx' );
define( 'AUTH_SALT',         '9S9bXZ&WmcsgX=IneItbUv6Dl;0]M(<?f4vIBgx|=[W/tTg7`8OiZR&K$Eclgbfs' );
define( 'SECURE_AUTH_SALT',  '1>IA^h#5s7:xai]F8d2 @#GVLwGaL()t<9,L{Mz:oQd#R~^1/[;iLe@F[PA;@2<z' );
define( 'LOGGED_IN_SALT',    'r.;w^n4Jo9X{!q;F#1}Zre!% yo%iIE^dUZLoy<vmO@KV fJ+ M4<6=4lc(0Kj$Z' );
define( 'NONCE_SALT',        'CS##5fR@*sX::F8sS9+ldOa-T|smb6X|[8v&)&(YBnC_7psLBjZ]u-}<#G6Mr+()' );
define( 'WP_CACHE_KEY_SALT', '<NC4 9w0lbJ25jj6{T2,+ypv/Ryg>?*jzJdo.B4_dCci.xJuS-^ExHp eaF}EqR1' );


/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';


/* Add any custom values between this line and the "stop editing" line. */



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
if ( ! defined( 'WP_DEBUG' ) ) {
	define( 'WP_DEBUG', false );
}

define( 'FS_METHOD', 'direct' );
define( 'COOKIEHASH', 'bc0818fa32774e54b5a0bff68e214243' );
define( 'WP_AUTO_UPDATE_CORE', 'minor' );
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
