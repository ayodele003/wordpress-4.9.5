<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the
 * installation. You don't have to use the web site, you can
 * copy this file to "wp-config.php" and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * MySQL settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'buysell');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', '');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8mb4');

/** The Database Collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         '6y^M4&d-,-r:}>&T{I@@srPp_@DTN2Izh&3-AGppTk%SK05rm!Yt<ewdT<2|nGqs');
define('SECURE_AUTH_KEY',  '^:6<6g=!@y*9em_y4Sdl};i3$rZs%FIoaF;g3*X>ge,H~jsy~mQepjU}C(iJ:G/;');
define('LOGGED_IN_KEY',    'Jm)Xtt{z<CC1$il4nCk%!AQU[$k f Q1=m8*1dy6S/iJO4Y*9~j{{w,u00MIG4oS');
define('NONCE_KEY',        '%?tS!t93h4#7>s*g?}I@*O+_;DZ3FvXWHk mc%)K+=LagoNmX/V+~56])z]2@@VV');
define('AUTH_SALT',        '*zkBJ6S!=M6ve5@aIF[mRu4$ZZc),!I^+1NqF*=@F/*gBF-`a#aG]Xt,li[e`ph^');
define('SECURE_AUTH_SALT', 'o~Yrwm_N}sZ}O|-fDC2?Iu><x&GW-ffxI3o&t&cWOz3#*8s.HO(JgZ(j2,`doY9:');
define('LOGGED_IN_SALT',   'C%vC7NX+G37 KB+Ktd?=FX7o3s6q-a?r[{qi^BRx*D#M=Z,vDx[X[v7k(zOr;$uS');
define('NONCE_SALT',       'UP-w7PO|XZ~:v#`gIFD|<IJFUqV7p3*x(]D;7:xF(`>b-X`%=DRM[ySL:/AQ2&4Y');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 *
 * For information on other constants that can be used for debugging,
 * visit the Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
