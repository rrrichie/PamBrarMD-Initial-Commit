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
define('DB_NAME', 'pambrarmd1');

/** MySQL database username */
define('DB_USER', 'pambrar');

/** MySQL database password */
define('DB_PASSWORD', 'xjklJI38JLlwz');

/** MySQL hostname */
define('DB_HOST', 'pambrar.fatcowmysql.com');

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
define('AUTH_KEY',         'WUw3=IdW|6guoEGDs;net-G:&flZ%[qIE7ldi-2B%b!fP+e:4SoO5MJ}Fkg^tqbO');
define('SECURE_AUTH_KEY',  '?OGzqPm#D/|6.5[gCMrL`g_zZ.#O+ghaw7^>KX-Ov_;%dI+|&j%EZt*g;>uW211u');
define('LOGGED_IN_KEY',    'b-1U$hH^CDT{E[}i+-Oc;vEgFvE`r%q|NQ/#>uTY4N:5TL1-BPc@Dr=4-6TdsV//');
define('NONCE_KEY',        ',nwo18Dq2S|DX5#csx-Ou-|yhxcvdzG>0/F;bMG(P$mX89I!<ElX5d$n,)n{j1/=');
define('AUTH_SALT',        'D#%Aa5!GS@76&Kk`TP7}BHS+Jx-@5+i,!BugV3k9`c<CkUR.I.)5%3U*2a5jGu38');
define('SECURE_AUTH_SALT', '_1sR_fP9e>Ny,IG?JE.m7A-EoS[ObAK2tj6LY@_+&^C=@nx!,fJdL,+T<%.h.laR');
define('LOGGED_IN_SALT',   '_v?M$Y!afehOzn>N2#)eK.-n`oYQlSt4~hxl6335+l{G6>%xWwPeE4KG*QCH.PYf');
define('NONCE_SALT',       '8AKzS%i3 p[($h7F?px$QePgwa-~8E;k1+A4l`~]&IisJLssW:5q]^6yh0nS(WK!');

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
