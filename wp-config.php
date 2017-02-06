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
define('DB_NAME', 'vichaiyut_admin');

/** MySQL database username */
define('DB_USER', 'vichaiyut_admin');

/** MySQL database password */
define('DB_PASSWORD', '12345678');

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
define('AUTH_KEY',         'jHq}Zle9-:9tB@,oYJ@`9KO*DoM`[#L1gA{i1A=2!f <>x!L8CII~C:ZK?9]5f$b');
define('SECURE_AUTH_KEY',  '>&C$gQW]8S%|eRbVNMO@_f6C2{KX4lqUT.iaFaV/{C9h@TWPrk:( NaRJC77~1rS');
define('LOGGED_IN_KEY',    '3DdqS/u@^T47EA.]o!.B9rKOBmC(rc?(~yUV,o)ugvx+|:Mrc4ByfT j;7rHHYHm');
define('NONCE_KEY',        'JOjO|NtqZRD)Fl?NE0Rl~MGyQ@]>0w*VR:<hTPC]<ZPEKB:.Sp>pr1KiM{cQU$W;');
define('AUTH_SALT',        '=C|8p vzu(O:OB6oIc<pi:aZ7QYtbs^.?N^k#+QA5Gk6]W^:~S[0TFw7I_/&[w[!');
define('SECURE_AUTH_SALT', '&)U!U?7Lo.{a^|eg.RaWSJG5G*s&!#Hi#u0noDQRk9$e?kUfBu{<ZtB=4Hq-Lu`+');
define('LOGGED_IN_SALT',   'N@?LU$mH7X|it>SXEJB<*bNuCt1dZ;/n8c`W!87Y n0`Pnw2@)UgMX+v,3Cx@MLF');
define('NONCE_SALT',       '/SS6]#mw#tFK6.b2&(?E#GsWp/U>kmh @/tg2BcZ]E&wf-:|8RR(J.SHXN}Z%!i$');

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
