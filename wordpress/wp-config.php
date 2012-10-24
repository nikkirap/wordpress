<?php
/**
 * The base configurations of the WordPress.
 *
 * This file has the following configurations: MySQL settings, Table Prefix,
 * Secret Keys, WordPress Language, and ABSPATH. You can find more information
 * by visiting {@link http://codex.wordpress.org/Editing_wp-config.php Editing
 * wp-config.php} Codex page. You can get the MySQL settings from your web host.
 *
 * This file is used by the wp-config.php creation script during the
 * installation. You don't have to use the web site, you can just copy this file
 * to "wp-config.php" and fill in the values.
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'wordpress');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'root');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8');

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
define('AUTH_KEY',         '8|P;P9$y[y2sxY?T7sA,W#+Oim]UP=t5OobtWT$wHC:@xD*3-FIshkuJRH0m6&+:');
define('SECURE_AUTH_KEY',  'S>@pD*f&`aiC,T1xFJr.zMi0sj9ml}_6w-}Q?rz`{z=#,pMM&-lCNo:xr{+Ts^&%');
define('LOGGED_IN_KEY',    'r^Jxp1E.jVdACE-7lo+;/Jhj38Z,qO;aU|H~OxAK#7fK]kSSL{eVo6/I/#OH]TZ6');
define('NONCE_KEY',        '#y:aY}+I;#}63tf:HA+SjL;Oy@?hU1tgVe<k$y/0/XKOv+Kuh;NuB|xQsP,yG;V/');
define('AUTH_SALT',        '|-7Sykw<ZcY_w%TV!V2M<X@R@nfv$m*f ff>v%8#)JKVS;@MY_PF<_g!*|DQJ}},');
define('SECURE_AUTH_SALT', 'r,z6eAIPdZ~[1!<21RvW=nb`^e3/pUyfwu.q|1ewPlR?9<.lL+-V^)PJ Z`wr9rl');
define('LOGGED_IN_SALT',   '}BRGZLBO-7bR%bxH.xfM<TB|#UL%IPN||O#2M-+UriKWKqMR5ODi_-uW}sC*9-T]');
define('NONCE_SALT',       'MO&}Y{@k#VS&M+4_]byFq7H9SLXVpnJz5R+KXbHdo;4k;b`L]|>(uJoBn,?--$X#');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

/**
 * WordPress Localized Language, defaults to English.
 *
 * Change this to localize WordPress. A corresponding MO file for the chosen
 * language must be installed to wp-content/languages. For example, install
 * de_DE.mo to wp-content/languages and set WPLANG to 'de_DE' to enable German
 * language support.
 */
define('WPLANG', '');

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 */
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
