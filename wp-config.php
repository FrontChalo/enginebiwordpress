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
define( 'AUTH_KEY',         'sbN4(_laht96}o0!Ld qiA_[S<4AF`Qdlz)Hez7au4 -z(-[^7fp6AHx*?k4h*vn' );
define( 'SECURE_AUTH_KEY',  '7 ]z{THnA`seZnoY C%Q,q^^R`gyIRbSAMOm9Is4]K1Gx2;:;O/VK%<E$udto6|A' );
define( 'LOGGED_IN_KEY',    'D{atGJ;2o,A2Q|u+S*6&z/m16%uP3MxX+%i^*-<`1{W?DpY6sm>$CU7:oRa#l{}$' );
define( 'NONCE_KEY',        'CYgBQsLA}*Y%Ey)fHgnQ4*`4w;]Is^8<{G6*b YMXQlYh(t!].utxYd[z=+o6:^Y' );
define( 'AUTH_SALT',        ':vyR1i=I~UN16@7II&PAuuUX3CLJQUrF>2To{/qj_r:h%PO4S(-z~cfe)1!014)*' );
define( 'SECURE_AUTH_SALT', '!va+[qR4RwaTT#~PeTi|Sto<#|1?0fJ2wMH4hxfWc=Da_wZcu#2aPvwr~3q>`3Ib' );
define( 'LOGGED_IN_SALT',   '6]-F]08#69^FGQNX;y/Z!~-P0M~}E|&M1,4a6wZn<YlS^<7lYEk*hscH+[J*)<+z' );
define( 'NONCE_SALT',       'F%&Lz5Ck>E@toBUS&~~7j<R~bwXQAoV*J ~[tCUX$4N1X-kghXha.^8}9+x0`nFO' );

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
