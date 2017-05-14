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
define('DB_NAME', 'hoanglong');

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
define('AUTH_KEY',         'HJ->u?j>.[A/YW:Wm;5IF,O%MU]p^bADYP^xv&&f[?zY4N@<[]+yZY5}R=/^8^-6');
define('SECURE_AUTH_KEY',  'tMC0AAzBK, 1FMS2PF6eyGo*9B)9kjgCBF1B To}YC(ji#hJEWOb]eX(y<+xQ$LU');
define('LOGGED_IN_KEY',    '}4_$L@muKY4=^^cuB77[YSE^5j$)yR!pHrR[SsbZ_=Vi!jKL|oe84GgXM90S|*mT');
define('NONCE_KEY',        '_OWeHdQcEh2?8z)lo5Hj~yo~(>&&+V<!-%&BW>c+0-mD+V(Tw-Ln. h}%f_]a-kV');
define('AUTH_SALT',        'g,!T20mO%d2_gbz{IB#;XcE}2GIRz#qmH=w2`s<svcdSCz4!-@WrQS)4B*7jmLuW');
define('SECURE_AUTH_SALT', '14l.mWI%wH.bRx4Xq*:wcdOtuS8>V:`;a0)kA2G>2].=/5w@:TbU5t^GBZ]6]GTC');
define('LOGGED_IN_SALT',   'dK)WPq#<sjLm0$6~AZHw.f>>Fc~kK<mwB^)&qz)q $BQ#[4J.2Hsk6KBgAr|V1R*');
define('NONCE_SALT',       'N9%Mm.:HW,E~.1++]l/t=>Yj^~;Ts_%< |R#x~0N)Vc&5lM2DR+x2^`#PAx{xq^i');

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
