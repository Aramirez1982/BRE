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
define('DB_NAME', 'blood-relwp');

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
define('AUTH_KEY',         '`kUNaF3C}&320qXtCMJ>bv@bB<U;?ZbNQ6MUEj7~=cyJ<u)x/`TP5|QQ{#T^6,Fx');
define('SECURE_AUTH_KEY',  'GX;&9 PK1Vxc%Wt}WdMoi4$|dp1CPsp=vRDPAq>qm&|K&;r]QcaD%Qr=giOg]YTV');
define('LOGGED_IN_KEY',    'JHxl4jVt*F~vZ-`$D^$^#}|`plEPmqLtN AbF4nb:R8=~p1O8f9[3lq@n,~e/B;m');
define('NONCE_KEY',        '9&$84d+8(iJ0A=xl&>-GcSPPbt,a:H?LZeck^D]gD7Lz1ljZl$8dw.=/(}M2 8^a');
define('AUTH_SALT',        'D+L?k}^*&UZ}au%b:U{~Ni.+v4T<]l4O|og($WXTaOS4?({{nPQ99FX?R03MQUR+');
define('SECURE_AUTH_SALT', 'X%{_b;.0NEgRla{zw)yZZK>Sj)PVL`*D:9X=fc336iuv@h;lg^.Bk!(F$nQ0A5*O');
define('LOGGED_IN_SALT',   '6V_(9L-*]^-cqjzEaJ&n~V^-&ih}8;+.]ObOU C{i%y&C*b@P(5}8=>&wVq<n@|h');
define('NONCE_SALT',       'udI`K&vl4u8:P=]FSul,&j!sd/T>4xeav1`z,xwGub/[S x3P4y&(w36tOj 8>+a');

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
