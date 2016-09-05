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
define('DB_NAME', 'geofftho_professional');

/** MySQL database username */
define('DB_USER', 'geofftho_admin');

/** MySQL database password */
define('DB_PASSWORD', 'Invalidp8!');

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
define('AUTH_KEY',         '/=#M_*^@sbdF>uhE.@)%lw@[BO$f`m1%H51X?odwgF}Cd.!g_1pBTg~fsq}f3{OM');
define('SECURE_AUTH_KEY',  'C8bG4xfyW/uI+BR3f<{Rqvg9:{fQ}G;UZ/l=$f+uJo$o&U8N(DA0:U4jVu}=t%fm');
define('LOGGED_IN_KEY',    '.c0&`^DFnN}>m, q}N3r;|Cdp}fhJ5,oesa}24%z@@VR`@N&/:{:%6.12Vd~TI*7');
define('NONCE_KEY',        'MM2%G%D!ZRoK> mW+ofy&DL%t*ZMu;{*.dFj[GLB g,Pzm,fAqN{qg]?b2VhL#{|');
define('AUTH_SALT',        '<vPIufXj9yn+9N>]Y`vsQO/9JgUc5~x<j`5e@]mRVr=P=-Y;byYjY% u#GN:_RZ&');
define('SECURE_AUTH_SALT', '8jD(08S>hT[W0JMR]82AFA [LPjA}}*vo-7It[KWL&0tsD%9?LgXoM30aV@LY~$N');
define('LOGGED_IN_SALT',   'uVsW({FS[<`Kd]q_OcKAn(T)dg4%0n-C^#p#TBkJN 9-+jENMhT-bq4TO-w/8sA=');
define('NONCE_SALT',       '&uCm=&&,5)l(w:+,1YA9%;2G&f+ORCMlf`Dg*RY/Fk$Iu|EBa+dd?Au]p.k++1=)');

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
