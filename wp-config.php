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
define( 'DB_NAME', 'A Wonderfull Gift' );

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
define( 'AUTH_KEY',         'FLb=v-[m0!KF@;3$g8?|]XGo2JNLV6tCs+gISJ|S|;S+$6N9O_i$>]&{|o ;>fmw' );
define( 'SECURE_AUTH_KEY',  'd_uKv&T^fI 6LJ8Bc-=2IIV:hT,ZJIG1/Ai-WbJAqx[%fSN:z.M)%x618!ERWuVI' );
define( 'LOGGED_IN_KEY',    'pv#UM_+>y$4R}K`s2HHdI<m~.xA) 39RjH8y>rg~4|u^ovu4)G zCAjG.5@;]M*:' );
define( 'NONCE_KEY',        'uBf]{<[&_S+4,Py~y+Hnnt<nF/#|&w<RD hCEB-`k|Wy&Ixj$1<ILvu!`]~S6|wK' );
define( 'AUTH_SALT',        '5>i}(;v&cXR(/H1c!jR?;%4tq:dlbw[&y8v#]h:Z |[Q+EX3+wxL:M%W@wbuRS&}' );
define( 'SECURE_AUTH_SALT', 'bd.qNuw2``Z:,82?wxN0I&.#Xh*Ezk%YZkVm(lHR2V)8)|mC1ji=P}fvs9R0OSkP' );
define( 'LOGGED_IN_SALT',   ' >,%G^Su!A1xllSWtWaVQZSnQQH-5!{#LnTn@GA=N{qh~!ej[^27av]#;(eqt;dt' );
define( 'NONCE_SALT',       'l6TF8z-l~WxdG1bkE=[btmEUHR9!:EiN]si+)-_~|MSxBEumVr[o^{V/$p,5/br=' );

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
