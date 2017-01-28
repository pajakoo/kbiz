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
define('DB_NAME', 'karlovobusiness');

/** MySQL database username */
define('DB_USER', 'wpusr');

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
define('AUTH_KEY',         'oDh%rbjH}ZXbWl3,YC?n0n$=O]f?UK<7Mt>;qwPnWbZN$:Ho~%(|!giF3]BQI<Op');
define('SECURE_AUTH_KEY',  'Vf:Y!d.qP71,R?9DHr)`CjuJ#g>V$<1eor{e.smgse5%b%ocl/^^imS^V#{/vw1[');
define('LOGGED_IN_KEY',    ';toEl3&DO0|M]z-#8_yr`:(nUnK^Eh636.;j;HbFJ+V[!H!z1[H(Ow@MlOnGbik1');
define('NONCE_KEY',        'h7E0I{i7P=Ou1[fok-]`Ho,V]!{;fglRv=1edL8wHi)^1MOY$/[>X~n.k49gNMzK');
define('AUTH_SALT',        'k_B[{lb0eu53j79|D{1KV<ypg8y~sxKP~,CD`L41`rTZZ#f~x.h0:m{[5{4npSLe');
define('SECURE_AUTH_SALT', 'T`YpSBsa9=Gwqr,Om`f~hA^X$+SWTe[bm(7}f.X^-&StWOo7ZMY9`Upt|-u^n%nr');
define('LOGGED_IN_SALT',   '3b?>AT1JCt|uBt3Xy0kxViEF_WJ]am(!~@pED+/GEJ@un1ej;w|wV@tLrAF?,=Gt');
define('NONCE_SALT',       'Ew/gnL1}1N-7-n8hxEruR4_q^OSTS*e%ht+DRAc{<:!%Sf UN6C)vl`EzF:UMbG{');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_karlovobusiness';

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
