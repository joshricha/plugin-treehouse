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
define('DB_NAME', 'treehouse');

/** MySQL database username */
define('DB_USER', 'admin');

/** MySQL database password */
define('DB_PASSWORD', 'Unwelcome1');

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
define('AUTH_KEY',         'r<+Ejg;9ZbGZ9xjeF$E,<=X4;&z;wRocM5:n49Co7HwEU>pu+B9Xpr_(+=Su:{<-');
define('SECURE_AUTH_KEY',  '-n^:ZYI $&]5oJ>{_  9vcGKR-X|Kdy NoW_|#+YmR):2Uu|=Q>H7+i#_-t=BO/3');
define('LOGGED_IN_KEY',    '+.x[n^RGR&P+!-Jz:W^x>ofz[jnZxk]XW2^_z|+F*DUPoZ<mcr/DAlfi}T3n84D9');
define('NONCE_KEY',        'C9[+OF8pAiiR~0K1D#JwZ@hf+|AL|ts6&^Y2tf^B)x^I^%E7m0{<TRb,pHVRp[xr');
define('AUTH_SALT',        'aPr`hc6ix{w=++t]vpn^dWqxAuIKI*2QdqL}Q?C~@d+OJ4A=h1:J!q@%iEuQJBCq');
define('SECURE_AUTH_SALT', '/nEv1H!P., sUE+fiRry7lXH-+Ae-1NEu+*A8mA~4;t6o*2:Mv6f/q pj2pLuGrp');
define('LOGGED_IN_SALT',   '.$%}[8)|/%ziOv_JKd_L>}o SdZ7J=d^lkyH1|3C4Bz}XaT6nb!!Qx(|Ns6X  j&');
define('NONCE_SALT',       '/Ux9]WCbu6vm#L0QSbQ2Ch-S7+u8~[mVjo$3&/BF1Je1lr=GN}pji6;)}1qKT #j');

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
