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
 * * MySQL settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'sitioweb' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
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
define( 'AUTH_KEY',         'Y>yL{,u5=.9AEfdtfH3ddUR;ZP6pj&KL[$A~<`gXsTq,6ky(w[lR`-1EWOeaZpx{' );
define( 'SECURE_AUTH_KEY',  'V8)F63x,Xf^N,J!tQTQu8DPU@$Y`yR6hc(d2eQ7%,>3}o_c1-x?+H?~Ydd-X|x{U' );
define( 'LOGGED_IN_KEY',    'jT1*t|SYZb!Wod%aVynJka4[!!)+|;u;c`u[]3c&uqvm{SG^V5@#-iw(0]gPFf v' );
define( 'NONCE_KEY',        'IAImE>x90_.>E>iq@dQMfg}yY.}R#j{<?zN|K<uTA$2eeY8Am5-VJzN3?_1D7J_w' );
define( 'AUTH_SALT',        'QK5qBd<An=/e%F3to~jgEqae^Ny=Mv,-B;Qccdqi%;%,c*-j[LI(mh3N GMb>?`-' );
define( 'SECURE_AUTH_SALT', 'Bf27&UPg|1lbiD^d0J]S;f3n!BhIOU)zu{6}Sx@K& R}4ss+Jo$0#b0:^XXK3NVS' );
define( 'LOGGED_IN_SALT',   '/)r,}1;0JXH-UMvghY&hG)O}+82pMI9cX]hE5>}x(]gv2oZwvo,Yv^Z@?@^z94Z^' );
define( 'NONCE_SALT',       'O)2gf]IS:8i,LLHOf$|h2H$Z<+nr!C}B;3c1:[,YKNE1T=~a3(BCm:3Rm&IOT1l+' );

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
