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
define( 'DB_NAME', 'wordpress' );

/** MySQL database username */
define( 'DB_USER', 'wordpressuser' );

/** MySQL database password */
define( 'DB_PASSWORD', '1Sehajpreet' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

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
define('AUTH_KEY',         '54,6[>oE]u?0?BiC6|$4L8}mGOrdA]<#1rGO<~5NMF~?,e*5,gU~Mxn4)OlFU/eX');
define('SECURE_AUTH_KEY',  'hGLzo(~Ny5Rfc~}p)+a5 l%:9MF3Jfs<{:J1=hTs$X+-^$2]+&%U6+IV}7RhvX[9');
define('LOGGED_IN_KEY',    'p?{lb@UQ$#?+$+7Hi#t4@Vqxr XdKB9e.b1gMEJxp)y: eo3x&Di3|BW4y<7QNa$');
define('NONCE_KEY',        'y<yt]5OdxZktWbi(?x9]RTTM`v9|HZy>a6`)zvi-+v}0*SK4:w}5c3-u,*6s5`sC');
define('AUTH_SALT',        '|lj-4#/=.u^15likS0ljx|A9Hv2V&m.L3iIX@pD~ O/D$!K[Olg3$S,&fy4t}G1C');
define('SECURE_AUTH_SALT', 'O0s5-~(zB.=bGdSr`aQ[dREk0?|xz-S&SR 7&M7*oRwg5I|Z|vbin+Jm-fc%Ob*,');
define('LOGGED_IN_SALT',   'Mi%?rAQr{>.O2DheO(^o:DQI!ZYL#;P3J#_WNvD$_C^oIot:G;!ssCDGgjKTs/Fp');
define('NONCE_SALT',       '9!{F+4_[eJ2JFR+80wBaKeOD2@.d^zx99G19XYIm(G,$<x5&X)iNND0LNzp.`k.l');


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
define('FS_METHOD', 'direct');

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
