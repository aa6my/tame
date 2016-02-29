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
define('DB_NAME', 'tame');

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
define('AUTH_KEY',         'X-)S~%;5Pt=l(i[mh; _[nHKV[){g7#6wk>mf/*@.eZOh-0W[aklTV`{E-6Iu@%z');
define('SECURE_AUTH_KEY',  '((wViA_md}g;uaNk1IyUANx`c +0J:&jABm![%.k2tHkS}!t%P-tXMr7sR[j<I7c');
define('LOGGED_IN_KEY',    '~fq||<Ol`w%KmY3BE9QQi+L;f<.!C0Rj1|]nHbG_4zRG3}+*ARI9LEUnwQ}*>]F:');
define('NONCE_KEY',        '3{3S^)(uAiiWn#-y+>-M8k0_L<#-~#N0j/(f[ES^`.;aB0l`91L5!`}cw21C_Q3i');
define('AUTH_SALT',        'RsnH+#+z*Ml=.O2-I+N{yG!-v5zWa1>W-}L6y|+2uh*Ob]>GmO-*YS%gWI-jKh[p');
define('SECURE_AUTH_SALT', 'jI~ID,EU%~P8Wa/1z^1<e3;hFd4&ex3[0[iyHPcq3X_w!0=vi55 /H8cfw!8C@Y-');
define('LOGGED_IN_SALT',   'r{gh&;1{|^lU+1D(|> =&]-_8ER.Way+V7Pl7 ^1pG/=9_A{v]v{5D-y1-qF3&- ');
define('NONCE_SALT',       'Y<w|Ks8UnS5F,q6gO/SC7xBiBwt6jif|ux[U|O{R{XCIZB]9`+1]E}>,wtq5TU{W');

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
