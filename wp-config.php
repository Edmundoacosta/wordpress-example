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
define('DB_NAME', 'bd_wor');

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
define('AUTH_KEY',         'Xh1BaxCsdqvy(20OJ*wu6ug6@sFP4HGmprD#)LJ{u}LaXh%2={<sXz0@y]>(dJB9');
define('SECURE_AUTH_KEY',  'CU6FIq2*zBb2m:ZFA}a/7b?Fd|!),V#1W14(0Fe-/Fa6^)%?)&9zF*sY=oH!Tx9R');
define('LOGGED_IN_KEY',    'I%ErF](@*rMF>gU+n;ja~X`vPX6][j^htvjdpT^^uEv/_FQqz~)dn)*3}Ogu2}/{');
define('NONCE_KEY',        '-i4qtdPdVQ`X| **BFM|n(li2P^m4(&lO-9o<Z0~06A*tf5Psq7C3=#.F8a#R)yw');
define('AUTH_SALT',        'zU;d4O2Gxk5U1p#/TcP%(!f/]G57no/Y34F3D)GS/u(?zqoGHoH+Z;2[s%m}t^}G');
define('SECURE_AUTH_SALT', 'EpfHa^^J58*Nj.NpB!D;*!e4!{;~S)!~ah#/rBb0y/tItz~Y/10Xl_jx[qA*slk!');
define('LOGGED_IN_SALT',   'PG)dj~8R3@y0%&yCL]D,$CqjV&w[Z:ko<E,yOhYzF]xGlXLF&y-]Wz>&#4M}Zq{5');
define('NONCE_SALT',       'LiAuWF,bgz*Ax(<cynM3{KBz,]EFO[i~u-}l;;,nMh2T wh0Y)Fi_YtN,!3]qwnC');

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
