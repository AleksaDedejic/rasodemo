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
define( 'DB_NAME', 'rasodemo_db' );

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
define( 'AUTH_KEY',         'otm%4~FB@l9;5o0e&52HBv9%xdY!gK+be6)a2/Eh!##~.N<(!_NOr=F6X=%g}/y9' );
define( 'SECURE_AUTH_KEY',  '52UMWZxqbnn9CNba_^chZeQS!P,oBpf*g8.vwYZVZ85PAp&Y;BC@zcY*{a$}^XR@' );
define( 'LOGGED_IN_KEY',    's_XUH@glY&H2gW 0-+MI/ -{J:fW$_GV:?t: .(^/n,95b>^6#y?T)r(9fDU@w|%' );
define( 'NONCE_KEY',        'k7$FBV|A$FfNhs~Ei_&s&Z[jYF$e(E/P,x``*F?qs6P6,tbU}x.:y$8{4%7goRT>' );
define( 'AUTH_SALT',        '05__zgTx7@vNw>Rp?A+QzF%_iWSC/#vV_PY_bYz%T?)_ lTh*JLZ]H Kx7y+IAt^' );
define( 'SECURE_AUTH_SALT', 'RL61I/#fO2gkTu+@a@0<I=}2uD97*Fn|CWfn6nHpfuMR]&~O-M.,_wm[e?6z!zCr' );
define( 'LOGGED_IN_SALT',   '=3si!{n*(XHCJ}c9VY7!-QH;WD!x|!PTk7F$mRf.R%$S:;9K6zLOwI<k^<|-s~Q^' );
define( 'NONCE_SALT',       ':qFk$FS)t{el`+:(t`5}wUu-ncKK|%.6R6M;a4$vCo4{y~5U?2L=3*},r }YV7~b' );

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
