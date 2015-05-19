<?php
/**
 * The base configurations of the WordPress.
 *
 * This file has the following configurations: MySQL settings, Table Prefix,
 * Secret Keys, and ABSPATH. You can find more information by visiting
 * {@link https://codex.wordpress.org/Editing_wp-config.php Editing wp-config.php}
 * Codex page. You can get the MySQL settings from your web host.
 *
 * This file is used by the wp-config.php creation script during the
 * installation. You don't have to use the web site, you can just copy this file
 * to "wp-config.php" and fill in the values.
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'wordpress_pdxthrive');

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
define('AUTH_KEY',         '|*+EeC+naRaSqr/hCu.enc>zppvbz65un|:yt|BRD|4)PA]cfb/?3X-j&YVJX~rR');
define('SECURE_AUTH_KEY',  'tQI&?V5n )/+SW5V>-aE--V%U_|Bz|%2=0Vi:BB(+o:mc-yW}-t9>2y@$z:3CnG]');
define('LOGGED_IN_KEY',    'FFh6<1?g],^)Xvmt&}YrShFh.7EUcH2BN)FWPmh {<P&;P0j[l[En89?RxJ#o*_*');
define('NONCE_KEY',        'iRGR?w^r3~xBd26pf<3hdU$%@sI:AYe?Ue`S/Y*?(ut.F+m.4?R-t6{tc.t }S3}');
define('AUTH_SALT',        'Rp~2.}S~s^/H_WzgU6!B6mJ7*c1olUfpt2m7-/sAmUUk%&42sZ7-1OsPV)y0y)nu');
define('SECURE_AUTH_SALT', 'f|%K&K++%Wf#][o($~Lby*iVYDn-|p9R`j6C-*v^tHpr1R|`G[86DXP|=hN(T0VC');
define('LOGGED_IN_SALT',   'x~`{GrtRN|l[H@,G^R5-1~^CS%naaIm!2sB,a+3)m*uQ0HxKl8b#f&*C+vPko3?#');
define('NONCE_SALT',       'koRK6}x2HuU^aa)$KfRE |fk~`p[sKO.eA=u6m(WyKiEd7y|4)2;g:D22h~uk=XL');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

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
