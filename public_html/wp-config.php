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
define('DB_NAME', 'boilderplate');

/** MySQL database username */
define('DB_USER', 'organic');

/** MySQL database password */
define('DB_PASSWORD', '%rGanic365');

/** MySQL hostname */
define('DB_HOST', '192.168.0.15');

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
define('AUTH_KEY',         '-~0@4Rh!?ioV1%k{MsoYf@iCnzac&iqQ:#S:A{x/jWcO+_{J|E6pZC92&69KbR`j');
define('SECURE_AUTH_KEY',  '}jACMo3zH78>I*wM%m|v.Q`a;FFe,4pJ$zi1&j#+uC[,W?e:=i,cI@nWn*y-(-.S');
define('LOGGED_IN_KEY',    '(/VjEwGHhwzCa.h4@lb+Heb=j[eehR.5:O[UYmv&a[|k J+YvlV`rLB([h:.Q[RU');
define('NONCE_KEY',        'TLPxv9S&n|O:@JZVSzXx-7onbz/Jb8~1nI=9vj>>++>9h7NquJiKO[:+,|(f$-j>');
define('AUTH_SALT',        'K(<-&;eeh }7+q:{r+b?or5N/4eby,TN:hs|4je/wox>lnBpAV7yvxDpXk8$`Or(');
define('SECURE_AUTH_SALT', '>_M-_PIp; mF]|5 7X+Hb:$=FzZ>88r-pr+5`9J7E8p}!qKE@!}c/|/tjb5h(Rh+');
define('LOGGED_IN_SALT',   '?}Db=:4FoHL*bqn?i<E$NA%G@V -%nQ3C_</V0b?~[2kY:ouB62jn0Wbe|]/qN>%');
define('NONCE_SALT',       'W0#-`>^12G:z|C_Og/K}t0IyI,ht7~~xxlhjjzdz!nZ#f6xewDG<R&q:<Zh`<J#u');

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
