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
define( 'AUTH_KEY',         '{=S_^ pqWW|Z$c$DBiH3OnQgR#R!>I8?d9ACL:}fSzUkUV5c/!?=wrH}omr];N/j' );
define( 'SECURE_AUTH_KEY',  'eQ0Wi+R565~X?2q?pB$2fto6w=kv24PqM4!R7btI=WYC^yFI{>G2eLy$]BSN!1v!' );
define( 'LOGGED_IN_KEY',    'w|{.FBlfyza$P %Af}%eD2C{pI88dJRi3_0VkUr%1t-m[@*if2r+7*h`/VW,w6JX' );
define( 'NONCE_KEY',        'N$(7k4!]#oi*O$@*sYUiFAJzBZ&_9+k#5&Gt6|YMgE)A2?ykEvbnTfxz^+X4}ruF' );
define( 'AUTH_SALT',        'j,Bv@Axr(/Am:[:.;PIq$$Z6%s 6j(xk8w6DdmWyj6{HqqIz|=5?^NQNM]?+i;SP' );
define( 'SECURE_AUTH_SALT', 'Z)GHyWDwn3l 1+%F,#Z-#-dYX<z%u]Ha!e_;tvykIcrf|~N{2pEtg]OxX:qXv|Dx' );
define( 'LOGGED_IN_SALT',   'ayAbptnOwQn n#I.2c6[y}M*:Lo=BcT:Z>A(8H3:1TEF$-QHH+^E:n}SB9 0.F8z' );
define( 'NONCE_SALT',       'fH;rHH-:wd*d`?k}g# 7T`8O2a9Gqd92AN.#;{+J:4MS{ebD(UD09@|mFx/0f(iM' );

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
