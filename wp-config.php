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
define('DB_NAME', 'USGP');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'pr0cess');

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
define('AUTH_KEY',         'K=.jN{+&naYiQ358])_q|s8+TasAb{H?Afjl:~gl-p-ZOWfaBf^B0n|UBs-m&(jf');
define('SECURE_AUTH_KEY',  '%b=gRT.fVw(m5NRpP}t%!36bw)Srn!_W~NV@5(B}]_7m[e32I(,~xmw&DJ&EsjXD');
define('LOGGED_IN_KEY',    'm8eUf$IXVG/oNAKgX#Roe/q*4c o/?Yu4da|&3a]9OnLJN]C=6<|pg#xcn.[UVY ');
define('NONCE_KEY',        '{E#JY%$DV^5:.{$+_6lna@(2sWh7ekDga0M0LuA9#;nFDI~+N2cQQjUysiiCN)|A');
define('AUTH_SALT',        '~p&XmLeV:-?m5z<msAq,]/nsHS)Id}KS^:5Ilj~|+qj4,Ml0OaJX0i;sc@mfQW+!');
define('SECURE_AUTH_SALT', '*OZd<~=r@+X6bMJ!;qd:+p?U+~||G;A gNDJ|bJ+XG4K|!V~p8oItye+mNv1si+0');
define('LOGGED_IN_SALT',   '=-ST7,tA1sNr?3jv;QlT-.XnrseQ~EUIhRz!6-+w(F)b2Smrap&a3k81sppD/A]u');
define('NONCE_SALT',       '.OtVjLHP8q<1`+<#I1TNS]qa9m>R^=b3FV<EYCI.F6&1Udkz5Zb)nOREOOlZw tE');

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
