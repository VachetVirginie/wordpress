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
define('DB_NAME', 'elsa');

/** MySQL database username */
define('DB_USER', 'admin');

/** MySQL database password */
define('DB_PASSWORD', 'simplon');

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
define('AUTH_KEY',         'm~C6=jA[xVRvfE;fb`:]#(g;M1:O>%YBHoj%b9Y=$d?r@1:^HIX0JqqsL7*X~o(M');
define('SECURE_AUTH_KEY',  'Xr} by6zTG``jxE#A9UuCtnt`>:B_yB-9,kL5dWzkY*j.F~aAI8Kq#SK=&BGvO}2');
define('LOGGED_IN_KEY',    '45 &~_;1|+NI=BYfI>ForF&G!nf>Inof/&MJRD~8c~SZvt]l2>W5y~[`vl|(XVy?');
define('NONCE_KEY',        'XKxXfIK5&_U4n!wT|.*@Eh#g?uCT0W[d7eNgN&lGnXdCF]!TKKJ6mJW0Ko6<d@ZT');
define('AUTH_SALT',        'm4`-lXA*x/mvl+Q|cTznzt&uQ] (ZD9+n$%P)O+:xZe@DMH@e]nfZ%O|Bz5l? uI');
define('SECURE_AUTH_SALT', '8Y7 0Wu0J$B(;uz*P|{qq49=I{xe~+X*BTk.StX.DYyh>UzV7n03~{fl0fz|-o<w');
define('LOGGED_IN_SALT',   'O5xxd{Z/QY3-E~9{(#aE`&GbBDO?[NS5HpRC@=3jS0*tOdXz2fBJ&ZieEED*=xWX');
define('NONCE_SALT',       '<.?wqN]Ot!|1m+_qV[gej4y8)soWaUicz9yalYn2I}C8nIGeu,hC8NDVoCFKU`Q?');

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



define('FS_METHOD', 'direct');
