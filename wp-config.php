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
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/
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
define( 'AUTH_KEY',         'uiiP2g@C{aI=X)mV[,+IV>XV0wQUntJ^2K+prX(>az9Nt`7f^Ex)dIqoZnpnbyX{' );
define( 'SECURE_AUTH_KEY',  '#RqnAZ$?0?D&zXFI|qKSVJpAO33om*/_+3+OeIL[:N6v|P(<pt|EQpyd_2B#SKnr' );
define( 'LOGGED_IN_KEY',    'XclAp,L%ky4S6Y~adku?mG?^Tu,35y}~4]J7A:a3`~c8I5zCgLx|xVI1RY>]{b<9' );
define( 'NONCE_KEY',        '[S7NYu,^?oS%@:g~0;{T;Bd[s.^10+fiye6H-W?#1:7WUPwM Jv0*aR[[Zc4gOxc' );
define( 'AUTH_SALT',        'K$U+Z+Wqe,,gcG/IGeOn4n^u[|#t<a(iL*t=Oz ;.+!OZ#mWRVfpnbOg*(G,Le=C' );
define( 'SECURE_AUTH_SALT', 'x}%<A}.wl3l-HPY^HJ:G{QBOJe}$hh?ZX(WOW*3y?=rXJ]42j,MbVuH) U++q$kp' );
define( 'LOGGED_IN_SALT',   '%r.HM]io6a{Q$$~j[$3gX-~wMg}6Y^%]~Fgo;_V 4C-AKEG;Q[+]|=@->X1{Wsc.' );
define( 'NONCE_SALT',       'SlA{T92DSTFmf_+pGB5R?Q=M.EYUij&gK~`/ZK%mGm lf00C&Z.s_|kuzx{;|/tI' );

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
 * @link https://developer.wordpress.org/advanced-administration/debug/debug-wordpress/
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
