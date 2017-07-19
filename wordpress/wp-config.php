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
define('DB_NAME', 'worpress');

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
define('AUTH_KEY',         'EHD)TVgZM}?9y(hn [n?*_18JBvNj|2VXwn3K?6d7|lpR@}y&b+qW1.+RDXPAOSb');
define('SECURE_AUTH_KEY',  '7N[-_8&a18+N}2&GN&h.J:F@zoR8`5f*P6<kS/QO_H;wN1y3V>CP)##+<(#t!wEF');
define('LOGGED_IN_KEY',    '9O8j>#uoJ+Cy2E+2Z<^_<6mCzp3iOg:T)aQNVa0]~dPlQXYP0YLTmJkxp30|bzQ.');
define('NONCE_KEY',        '^S1kdQW{i2sMW}Q` RGl}I;L=&w!Z%KymYj~l4;iL gmABUmy`:qhx/2l7[$_-xC');
define('AUTH_SALT',        '8bNu}fa3LaC vb$OKaludD_2>n7W5a13l8+7Ky=*ZT=QmWd)DV5xC3><iD/.YP<t');
define('SECURE_AUTH_SALT', 'akwM[.D|}*hVmmzRjk#v0p xkaqQ)$K~*T%IQ:E9<ang6?VD+GAq&Ii5JyqjYyDp');
define('LOGGED_IN_SALT',   'Q8KmO}7+^v+!T@E<iJ0>Iwy@+qK5~*%EvgVMd^(SqpT9osu,ME<A&kh:q:65^GUL');
define('NONCE_SALT',       ',4=L,dh)_+dHQL&fh<?BMO#es)8d}mhQ)z4cu$J1m &JWmTLX/Y7&`JM#EyU=s36');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_user';

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
