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
define( 'DB_NAME', 'wordpress' );

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
define( 'AUTH_KEY',         'lV,n87`)bvJQRrLf;yba?4{S>0QFfQZZ1_e~?K[1AHYekwcMVu&WDL:2IHgUNilV' );
define( 'SECURE_AUTH_KEY',  'blEWxNBF1Qi*>;Tx!u)u:VsC!Qa=jb0uaqR/F$(.8M65/b3UOGk?>[a_>cqBpRTm' );
define( 'LOGGED_IN_KEY',    '9rYb2l{e^9&c[y(<%GvWd*Pb/A3c><O6&?q*;$(@1{V7RjIet]Vqq)xJ687*|F/K' );
define( 'NONCE_KEY',        'm;C[.~;9,5D=7=Hfhc:KuuNeJ[Ufj8e4benQkU/7Nzr9@nJk1@7#8d[j2&[ZGG4<' );
define( 'AUTH_SALT',        '{<qcsu!wonDAd;]r!X/xQ*+b<I)0Xe?ZZWFg; 3o{UG?1ESk[A{?6ao?2KVkL`A1' );
define( 'SECURE_AUTH_SALT', '6:1m<s}1&;mqe#k|(hgBBHQ,MV|#nolFMIY;&x0cCK*4jWIPl|9A_nppgj-[7qF:' );
define( 'LOGGED_IN_SALT',   'Z!:%&#LbGXkb )}[eF8FKiap8=4FEoi2DC1j;$>mgz:)t/18dL?v]D@7/7zRVHM&' );
define( 'NONCE_SALT',       'L>4&1dDz>Db(l,Vu>-o-@tV|zh-f#[,F,[!imK3h{SJL}0j[wU9s_uCwl =f2uD-' );

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
