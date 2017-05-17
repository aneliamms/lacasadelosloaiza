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
define('DB_NAME', 'lacasadelosloaiza');

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
define('AUTH_KEY',         '<d&V[dS&0jcY oU.=^9E.c(HTqImQ4@P_@C*n2.fzult_vPhx3n@25CU@?aG6?T_');
define('SECURE_AUTH_KEY',  '$(7VT~}EUAqXt3<:6j[)*_UH#*Wps{O?neMi>Ua4Zy8?N-DM&+5S|LG%k:RhZWJu');
define('LOGGED_IN_KEY',    'HI?a.4t5QAxKkN7j=Wh#i8z7:1O[d$ %j*{S;5$(Nm{&K:i9Xn=rli>f{S^>~VgX');
define('NONCE_KEY',        'd+N+Ph&b?BEl}5=OVDOsl%DBDg7HwtaL3fp{~HHs=%ZkKD=)MO1dd=;GaO^tC9(m');
define('AUTH_SALT',        'D&9tQpu5on=kebNMew_`2mp99$mJO?<Ijl|Z*OPhESJ=$_$lRxa~M Y<Q}PRT:YQ');
define('SECURE_AUTH_SALT', '[9up{fh/QQhwPAQK-&}BD?9Cs7Is,F|1SQ,G~7a<m0j+[ssc<L4QJz$ih!O^Su&k');
define('LOGGED_IN_SALT',   'm},|j%~L( ~)W%4:pbrFB1`u!_phA=0tZcb?E4siH]xx~qq=a7#xHxY2gg6^i-7n');
define('NONCE_SALT',       '~Bp7#QIs&WNJ2^~Bs!KdX~Y?hGx1P$!}}W]_|uWh1I.c#1j2/dc,NZ_xM]RTk ^[');

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
