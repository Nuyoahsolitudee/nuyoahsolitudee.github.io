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
define( 'DB_NAME', 'nuyoahsolitudee_' );

/** Database username */
define( 'DB_USER', 'nuyoahsolitudee_' );

/** Database password */
define( 'DB_PASSWORD', 'knz3BE3WsYbK8eZb' );

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
define( 'AUTH_KEY',         'gFX>0>#K.G/6pSz$V9]0oqpJpG[}{6&Nm?GF#T CkVd2lua4M*z}LEPH(Pod2ah ' );
define( 'SECURE_AUTH_KEY',  'Q,SVs~J&%Pur}#xCa$KtG.<[PZ4A j_cgW&*Dnc|mn)Nmh4{d6~kQt8<^pu5u9I-' );
define( 'LOGGED_IN_KEY',    '-;>p+;K}kEru!3E 2{O<44+-K@3]hKHh^A,Ew#R%/M%|zJi5XY%k(kb1E5j0qm3L' );
define( 'NONCE_KEY',        '4QpxbePUZnXdaIfb<3_=1cd|<O|hy1(zqzN1ut#4i`L_kYL21lNDF_>?naz)LGky' );
define( 'AUTH_SALT',        'h61%vcjT(x0/VUI}FzR#EE(yrmRbmZ,)|S-57a|y9qbIyl[&+GINaf`B}I!Waxs#' );
define( 'SECURE_AUTH_SALT', 'x1m5$!:0vy%<8$HDGeI9]xY2]VuH~q~6n[0HYdYNKtB;r$sT4dDV 9D&bxF66[[5' );
define( 'LOGGED_IN_SALT',   'aR5)J;ma63<FLIf;h)d-h_y@FT4cH6JL9pt=gLKbF2)%M~/-Yz;;.AGw+l|>==A_' );
define( 'NONCE_SALT',       'E(e,.#v2YqAl[#v1y *nDqWx6Y..M}PyL+``XC/ikW68`@3xU@-Qx4xNC2j9Vhm4' );

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
