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
define('DB_NAME', 'db_wupdagupan');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'root');

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
define('AUTH_KEY',         '*hIsXH<eW :N7nfS04#!FkP-;MC|Bc<%3l R0Zs/0D(l0)/?DwCfKcKZOf@XEqtX');
define('SECURE_AUTH_KEY',  '@+ C}~)8/&zzG*3!#?x{&JvO?-MjicPpmWTvQK]B]l=gx;xF]iCNsAPK`IwYF&GN');
define('LOGGED_IN_KEY',    'ZSvhMB{lF[TLT{j>8~gAO`CUN_Uah%myyDzUE9H!h2SraC<V:}?X&_,x:(-1Bv#Q');
define('NONCE_KEY',        '*iS`eUV;ELMw=tq-:33sjm^`p3Gem.]x7>n^&ek?lYn6u*t.d+R{}9?]AjAE!^Ue');
define('AUTH_SALT',        'N,rm}F< K-( -d>&AxI[XbX<]`o46[3-,d0b4+<)&_u/{nWZFi+<d=>`o}?|8!HV');
define('SECURE_AUTH_SALT', 'U]ukI-)~)$_UclIL0VJuI.#dm_HZvRD4^Kmj1O<h30YI9|cQ84IJ{N!ydqwR7RRm');
define('LOGGED_IN_SALT',   '$~ao9`<1@4QcFP5{ Y}bj=,q 1LJ*ZjN[$fd68}i5U!F.nB[IV;bmq*{x$V&sVzg');
define('NONCE_SALT',       'uRK7&]bb?8~+]jtMBmOz`tPw7vGOoOf1[3j40BQ00{xD3EicmRKE*c0<i*~8=@T7');

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
