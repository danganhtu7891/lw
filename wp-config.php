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
define('DB_NAME', 'lw');

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
define('AUTH_KEY',         'XyGrU+S=$tt> h;Me2={L1M Q=E5UwDw`tw?!9*$i^[{5E2:s].3MXsQ Ro/O&g=');
define('SECURE_AUTH_KEY',  ',~LFM&/ulOIWO((,zGF@Pb)@~@IgS^`]px=.7&4vDZS=be lyyHzUrQi~mD/}>)x');
define('LOGGED_IN_KEY',    'VyR*%$MQ[|| VBZ  {uFHc5:p[0_a8vwQ79Qd`EP|`ah<3=S6SkbI2.;RjC ih#m');
define('NONCE_KEY',        'Fkc/~gP bO^b^V@Af+#@8 uK3Y$yT~WG0Bpn#At:R1mTB9/91cIO5!56}Z^!Jf0t');
define('AUTH_SALT',        'LJ0t,7-,aX9l}ggoFaG.l#ByIX 5%Oz-h_FpDt$UNZX0FN)oH*|y<`HX!Dbu?l2=');
define('SECURE_AUTH_SALT', '`z3{!{hkf,l3,GCjZxw^7Fu<vFGx!`I=A1yR.:33R>4DNH!SF],GdXquu{{}grVn');
define('LOGGED_IN_SALT',   '~t^_kG&}a$N/CR)n`WRF),{vI,7dv5+@}h5K-My8R `G*XT@)ne!H}Csdl|k#PW/');
define('NONCE_SALT',       'Q#PB&R?eR|.d0O<mpK8vntbwi4;}iqy>r?,f<?W/;#_,.g>NfDZNjHlnUogaY:ia');

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
