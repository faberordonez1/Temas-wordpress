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
define( 'DB_NAME', 'wp_temas-wordpress' );

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
define( 'AUTH_KEY',         'CIc]mQzswi$)W_]j/y2i@m/0^?J7rqt#Z49_ubSSpOq?}^f=CD4):WqX>b2pHjd=' );
define( 'SECURE_AUTH_KEY',  '<-7u*Mn2E)A6G8/bSk:McJ2PN0 )<cVfz)RS]6R4_p3XvD>o===8xbBz),q#b7EW' );
define( 'LOGGED_IN_KEY',    'sA{]pmC/HG~0H!zw_7y,Fj DHo?x<fxsfTu`en.P;e4tKA.<;-3Ij&mUq l?-^Ve' );
define( 'NONCE_KEY',        'Ep$4K2.b7@6yWCA=A?zPCAFA|)cp95TSH{Tv24C5A9<Q+:}i*z-ZJcWj^tX?iKyc' );
define( 'AUTH_SALT',        ')lbft4%E,:y, GaO-MG?h4x1!_}7 p1Z8=u:-=x,30atW&(o6o)z!9f|lC/AQF] ' );
define( 'SECURE_AUTH_SALT', 'WHe{lS%T1lIUIo_hURP+xv$wrkJ.0R$2$uE8S?Fuoz>gKV+(8y+Bmq9b4}(&c,GO' );
define( 'LOGGED_IN_SALT',   'hJgp}zG??By^;~3_L6j7kI|i5 Hnn~|`SqD1S22;,fa|#u3hl_T0s-^Np2ue5 FN' );
define( 'NONCE_SALT',       '}k:4>V|@?n&`{&rC7sMx)D^0:&zh90J}uA@qd~PJzI^vQul-;+9M1F3*)}Cj,Aty' );

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
