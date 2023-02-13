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
define( 'DB_NAME', 'wp_db' );

/** Database username */
define( 'DB_USER', 'myuser' );

/** Database password */
define( 'DB_PASSWORD', 'mypass' );

/** Database hostname */
define( 'DB_HOST', '192.168.33.11' );

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
define( 'AUTH_KEY',         't<wXc@TA1[Ro&zV%q}Uu!uyLU7J0lhd=%kr77|y{kq[vPXp?Vc3_Sk]nu%aO,?uE' );
define( 'SECURE_AUTH_KEY',  'XfZP[ytwKUQ~*VAJ[h$eG8N79!fP)mti r(_X96!dwBiX0TJN4e!YLYtG=CLWpgD' );
define( 'LOGGED_IN_KEY',    'qY/0o{[~+Tj,9%RirXqwIxMTi;Nq-;`o*fa%NoL32F/B&z;7c!IeDfPS<vtlVq!U' );
define( 'NONCE_KEY',        'v`Zi?!L&y<KEneP !Wg={6tbNG1yn(7h9aXSFmP?Wb,k8lYk0waDnatcY`%<-Xg<' );
define( 'AUTH_SALT',        'L(~<I?0>`d|Hjv, G/NO{|^Z)>x:Z#)1eerNwy@[1p-U9r_b:~}&0MxaC<AU+hf1' );
define( 'SECURE_AUTH_SALT', 'B<5]fs71neR|IH!>tPc][FrcND[8N $g4iWOia}&nvnOhxC1Q3pqn9WyJ$AZDv7W' );
define( 'LOGGED_IN_SALT',   '4Ooe$tc:q-g dY=PD#?=.WCwJwv^^Qfi#)F>eDYbn,TpN][U]_Gv/bCf!D`Tp.@X' );
define( 'NONCE_SALT',       'BZp @/y1sn`7A_M>Vh?af__xv!>9Vf~FUEoS3 !.,<btJ<uKAUa;GmZyDcGlFman' );

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
