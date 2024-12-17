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
define( 'AUTH_KEY',         '+)anqBd[qa!,n&[t{On]/R.W59<&^AbsU6D2hmYRwaPbVo*xdE!*3MFLG3rm.Io^' );
define( 'SECURE_AUTH_KEY',  'ayivf6F_K*:vPvS:t;3^QDiG1`%6d>%KbdpB9UMFsZ00{9tah`uY%<a+3w;P<|%u' );
define( 'LOGGED_IN_KEY',    '1E?b9rI<WwkV[z4V{5cn:ZtfQj}in=A$h@v!z2dwe@X)H6F6q9ZO*]?XRRu(8bVU' );
define( 'NONCE_KEY',        '=AHixbW8J3Sz;oTl}}q>dI?J7tZHYaLx+gqn{=[Z:RUt?u_/~NAB-rBS?GIxu@/I' );
define( 'AUTH_SALT',        '`ZO>cO ]|7>}=@lb^X1E2 U1+VgmUXQ](/4,O:!Y>^~gME&X~U4B6]MvY3@c![4Y' );
define( 'SECURE_AUTH_SALT', '=tiD=oHR-5Mn71[ ->`1+<FfHUQg/O:5xwgH6*fcl]fK[.27VqHm<]:1~[Gp,:[P' );
define( 'LOGGED_IN_SALT',   '<Lfzpw@/2xp>mVr%cb])F#Kz[_hQP=]z%ZdkeQ{X.8J&6XUOMub}AjI/ <`#Gnr6' );
define( 'NONCE_SALT',       'sTY}4P2cXG +E6E,{Jtp6K&6Bi7a}]U4Cb$4L^sLG=h:LD8^9|eaM2bI r_aH#XS' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 *
 * At the installation time, database tables are created with the specified prefix.
 * Changing this value after WordPress is installed will make your site think
 * it has not been installed.
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/#table-prefix
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
