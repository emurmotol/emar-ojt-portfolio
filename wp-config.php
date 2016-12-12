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
define('DB_NAME', 'emarojt_portfolio');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', '');

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
define('AUTH_KEY',         ']b-z]+6Lj6i|j>;ZT,&YSa2sMgB=MwVKii;Ev%bo)X<|.G+L<7%gyvER$L_g NL?');
define('SECURE_AUTH_KEY',  '1-aJ9dtCt6dbNGmPqO$;$Y&:{[Wq`NLhx(7n|+bSq,cHjke),|o]u-o/2OCsM0/y');
define('LOGGED_IN_KEY',    'o5K=|<KUV`i*F}l&M8$Wv0fb=]lj(y:z)`=v#{O4[6u+$(.V=G*;m+,D<vJNJ={+');
define('NONCE_KEY',        '*/7T+2S;+}ix|T^NZQLQl_~Be}+Sewm1vhzyROe8N-4Vy;K+/} E2AVxg*x#RXm ');
define('AUTH_SALT',        'oM1t,%b5q4|?!|2X>pBwc^1KOx-Nb1kv5K.uVjZ+8siN,6@@LM->`wXqL,-k`pXS');
define('SECURE_AUTH_SALT', 'kEJtX3myCP_PEi(Wv(Jw6~1---Vl,M`B@(##goS~G#^5Tv2[;H|5Gw|y=ilBMLkE');
define('LOGGED_IN_SALT',   '|EmBv<k[Lo@iv|K&,U:Y2DV>wA1p+(Zi1aQRI$r==-,,tyQ-xs6s+bmm;h+&*Ept');
define('NONCE_SALT',       '|AlM0A7f^THb}Cky*`s{&A(GBz(32eT)h9p4zQW9yc-MVZ|>oAoi<]DFgL+-1!O}');

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
