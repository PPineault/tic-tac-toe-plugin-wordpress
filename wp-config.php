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
define( 'DB_NAME', 'tic' );

/** Database username */
define( 'DB_USER', 'wp_user3' );

/** Database password */
define( 'DB_PASSWORD', 'dev123' );

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
define( 'AUTH_KEY',         'aT:_}lvn<>y!L+qp-D48$>HETw~[+1z[Yp8+:Oih/g[(vO!{qcR*LCffHMeti^]J' );
define( 'SECURE_AUTH_KEY',  'BK?wky6m55fQ3|7DN=(4wEN.PRi=z&ZK!D@N9zfdoDmkEO6$u524]!0~u@_]G<~Z' );
define( 'LOGGED_IN_KEY',    'N@QP,xBq <4l>xrHkS^lRQG(u3o_>*d[,OpYU>:V+diIRR8PNPtHrDYO0MIZLv; ' );
define( 'NONCE_KEY',        '5%T46WtooF_Y15KkqkD&YfqVF}5r#RP>s;`KBD}2Fz!IF3Au^w3&.*]!X*Y#g)im' );
define( 'AUTH_SALT',        'Ywl8FCcKFBh,x.zGKid[7D``SO%sztFzq*^+Kq[o)-(A|P,dR]s>$%`]}tFWpz5f' );
define( 'SECURE_AUTH_SALT', '+38}@?aBJG#8a:ac@c|v@i#ehBG!K=:[VM9AxdRx#e;M*;#NVs5rC4FI~,Ij;Wk+' );
define( 'LOGGED_IN_SALT',   'BHnmY|/mULwg*23v8@QdQQv!)r#*oF9P}DpOM(y&WWVOx0!gfyEHxl#m6jXXmDPJ' );
define( 'NONCE_SALT',       '!5Z~-*DQoXeMUa|1fJ@YVb8#M5$cCI_wHiC)EltOpu}cXWAYv1U:t&*/Vqtau()/' );

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
