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
define('DB_NAME', 'tlo_blog');

/** MySQL database username */
define('DB_USER', 'jdiponziano');

/** MySQL database password */
define('DB_PASSWORD', 'Deltazeta473!');

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
define('AUTH_KEY',         'YyNCS  fbfEaJd4B: <{_,^[{3BEgr]vQb{>z^*Hy~o:]],E2g<r[N4F`lnJ,tyo');
define('SECURE_AUTH_KEY',  'h0^z[1}g^qS,52+)D.wb@&]2 AJ-*BB696o?o_{e!MfsY*r6A@B$T VYA[VM.q+K');
define('LOGGED_IN_KEY',    '!WLUwq*y-UA*C-txk31V^%V5e6]|/Oo&OM[qm`4rQ`s mg4wU3H+a8`PqpD[Fy7_');
define('NONCE_KEY',        'zfEdH#~Tu,qQ6+C(k:{<6$e[i+O+*d,n`#y&I`g7q1q 0VpRol7_-cbc%=9!YIQd');
define('AUTH_SALT',        ' e>`F*#Xn%c.8bp?xDuXUW^O&-{7X&ltvAl0<+S=b!*HfwM8M.-_-+=WhIbhz!(x');
define('SECURE_AUTH_SALT', '59J4|-7HxRJ#bg%:D7,|p|gg={9j0)s%G)JRT5u-hPtYU^s+=9O~r_M<9h$*I0Du');
define('LOGGED_IN_SALT',   'cN[xBeTVih!s?I?EQy/p6ppKo7g`5-7]gBwrGjoor}d1Z^vq/?obBjEyRU9bfsJ.');
define('NONCE_SALT',       '#-`|ZwO-=w0Yy!s[oer6ehJ?|$^t%Z2!u&^Y8~S821?tM$}p8lOc@qv)4G|+-Hv+');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wptlo_';

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
