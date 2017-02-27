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
define('DB_NAME', 'dbbibliotec');

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
define('AUTH_KEY',         '23b<_m?#piE_D1VLM62qOKX^Cd^T}%O-Z7>zG1Id}_8=Vcf~!<ojt2!j!Dem&`pM');
define('SECURE_AUTH_KEY',  ':uF$T*17a;DL+#xIs18zd9yX-CA|uPb5WopP8m%Z_f},V>8YDhp`ii!GF,r0Wf8T');
define('LOGGED_IN_KEY',    'zGhbv(8aqo>4qP!FujQh3w*xXty}x9<nG${=KRc7/=_e{X|It $<qB4y@>k&QlfZ');
define('NONCE_KEY',        ',SF{4WvO>`5cG{WspN1M(pGHq>|fwzS[K.brbZrN.ni>SV)7sD/r$&UIpMIiapYf');
define('AUTH_SALT',        'J,j :d19au$IoMctj<Dw$E]lLar%%#%dzH=j~)K/9_KQU2W#[&frPx%+V3cPXINh');
define('SECURE_AUTH_SALT', 'TL75O44iU+${8rs~r9 OkG?E}[CLbNp):{XB#G$FEfxE@[*&b~_tSmOs)H9gL#b.');
define('LOGGED_IN_SALT',   'OZJ:QvsN8i(G?G$Mcrq/obh@8`+5?&FYtWR-&e|FcNS9<g^&y:{@TJhqLbePzZAK');
define('NONCE_SALT',       'nm5Zl_;O-0.&w;*Y YN?WHbX~lPJaVw8>OkCTb@m@%xGgFN*{3J#5>a)h%%8U`>&');

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
