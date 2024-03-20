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
define( 'DB_NAME', 'Portfolio' );

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
define( 'AUTH_KEY',         '$0KiFq5q|bb!cYBL@SrtV]?{3uZ1fDG[[_Vw/u-+L_X&H[+t,8RK)wkX^]N%b*oV' );
define( 'SECURE_AUTH_KEY',  'du%$.XDo0zk|^Ez=fvT}ZV:vY)UyPO7E)Pq;c&H]/tF3W[}UC7{Y FI<*)7@cVll' );
define( 'LOGGED_IN_KEY',    'N3hLUv~bW92-(&^*2QXC&u7)7(Yx{)1v0?`v?V&ay+5k[-S1km-k@7Oa<2tg9HrQ' );
define( 'NONCE_KEY',        '5#u~+Y6w-Gu|r1(%bm?hE$y:Gb2]xtY`u FANd1>pOh:b2(6dmY&1yr!>1.;(X~R' );
define( 'AUTH_SALT',        'e5cFUH#;#.P?/6&4D{1-C[Y`{=smiApxA(U@`mxS:t[+PrR>|Ps~P[5AqJQ?vdm8' );
define( 'SECURE_AUTH_SALT', 'uqj0rs6,UQMK%JqvD%a$}7)?hmkrI-5FE_Mk9O`BkUXffHELyxH2 }oHx2]&,(IZ' );
define( 'LOGGED_IN_SALT',   '4X%?EZqRCYZYErI_GabGA78SM.(}+G:9] @[OV)hZh#@uFcS1pib7RVPwKG)f}gd' );
define( 'NONCE_SALT',       'A+L91}1MX(py }1K1-yU,H8ox)l[aYK YGGXMs3DAIQk]un,A}q%qoUKH:Y3TIV9' );

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
