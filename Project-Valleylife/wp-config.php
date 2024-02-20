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
define( 'DB_NAME', 'Project409' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'root' );

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
define( 'AUTH_KEY',         'WWxH;o)S@.RWrjQAdvgTKG^~k/mnRQ^%?4VK?QyYc0%&c:$=%J9_)G4h>2frL_2B' );
define( 'SECURE_AUTH_KEY',  'Ir2-&EsMn0v=2VPMu7l0R+HIBS$@rXU@BS<&r4AOBW;1&Y6{C)CM&-v@(%;Bf[Ls' );
define( 'LOGGED_IN_KEY',    'P}=P7GC-4R`e.iU~>Kv5sKY5s7uP:#+Q2xjdqwp$m$Lfv2w<bHoK _+BUC]G|Zv.' );
define( 'NONCE_KEY',        'l+2m]?N4p-}$4O/q_Kk;%Cj.%|{#2y/1S1z Z7 Z;ucB5[c2KE4:9M<?JeS{Loe(' );
define( 'AUTH_SALT',        'ONDkd=>YW-Xa&tZrL@Q44pNlrOKQt*`s`1MDFS9Qm,$3{+{o>2-UQ!,rW 0QCJ6<' );
define( 'SECURE_AUTH_SALT', '{s]DKPc*fDVLBJxcvDK%9:HT%;u;^s>y2 vs%qqnFu6?5H)Q[a6MqO8+9?@2|?41' );
define( 'LOGGED_IN_SALT',   'xk%ky1a,|c}%Cg2CZnt//No`i2@bsKEaU/ww*@}e/[J`S#h%QEPYVd_ eSJ{-jP`' );
define( 'NONCE_SALT',       '%F*/#G1Uvc3tQ+A%J<MU~?|n9M@uS8Bvd-|E&!W)(Nv}h|nb7fA^ez3T#DCxLlHX' );

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
