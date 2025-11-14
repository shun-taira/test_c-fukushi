<?php
define('WP_CACHE', true); // WP-Optimize Cache
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
define( 'DB_NAME', 'xs677066_wp9' );
/** Database username */
define( 'DB_USER', 'xs677066_wp9' );
/** Database password */
define( 'DB_PASSWORD', 'xvkzcivgit' );
/** Database hostname */
define( 'DB_HOST', 'localhost' );
/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );
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
define( 'AUTH_KEY',         '2m7`zg{^z[^=@:itjM!&vFj>*D$;v[Z M$9[WEl.ES;X+%|uac9>zNcRH]bh vsn' );
define( 'SECURE_AUTH_KEY',  'pb|kc:zi[z8:+H1V{4^D$&;LnV(mj.vvCJkF*8IWR6.[F.aqmY1:$F([5#0=7C2%' );
define( 'LOGGED_IN_KEY',    'D>ltRe5BB?+$kM[%:D^1?9=1fjq23y5;K=Vc/FL2<nY]3n%hf?j0%UN&vz-Z/uc[' );
define( 'NONCE_KEY',        'm#R,a1vmJgBYI<.UQvsI #cK?8Er2`^z3r9Q=R3R<gH@|rexvF^i<AUAx>`bhsww' );
define( 'AUTH_SALT',        '!/~e~I[BHuW3xQ>+q@=5_F9f%_u7 HRS524>;NGWUq-/;wt^13D-%R_c_Vl[xP@,' );
define( 'SECURE_AUTH_SALT', 'Sgt9Ky_u(PpyrlBeA)e^dl/bA9lAW2*0cy413;_g> S_`3#Vh]?ZIBybU.?8SE+<' );
define( 'LOGGED_IN_SALT',   'zq%qF0Y4i oIG{RRiXy532cZn :N)#/^wiwW!ex#_*,uW%MW}0eL-uFD-nv$CGRF' );
define( 'NONCE_SALT',       '|&y4;>{br[&4{#=P]!!F,4H(:=+#!h~$s=zqaAnrl9~MEywq-, l9`gxvRT`V=qD' );
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
ini_set('display_errors','Off');
/* Add any custom values between this line and the "stop editing" line. */
/* That's all, stop editing! Happy publishing. */
/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}
/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';