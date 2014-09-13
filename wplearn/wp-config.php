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
define('DB_NAME', 'wplearn');

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
define('AUTH_KEY',         '5xV8ksGfy)Wr:TM1|iy>7*1}hVj|MI`97|s_db88YI|]/a!JnXhst4T*vek>+5c.');
define('SECURE_AUTH_KEY',  '.J@-@-Q*:J6+T_arU%F4@(OLRb38uiT>;L>n5cvaj;=uP?3w[PL9jjX?*L@m|D3e');
define('LOGGED_IN_KEY',    '5oO[RWCz5YRz4e]L|j=Z+be-^^<?RD<h+J82(4j5=~.3+c ~k-BfyBEIjV(1l7Ya');
define('NONCE_KEY',        'G;0DLfC82LRz)%Y)VyL5Wqe`onq!1O(#P;j`HwpCP|| GTP`5awLSC4d[Ef?&W>F');
define('AUTH_SALT',        '1UUZcP=PWl6PenNC[Sj;MD,BuR^29:CD`-4c|3-@-(B*y4B6Ogsy*?+j`Z<0]mzH');
define('SECURE_AUTH_SALT', '[5p|Lm*FRC1?-5=S9SQM$#!z!3JZ<wpV.zgK,-VY}f|+JXNvzVUq*|aD@1UzAl(_');
define('LOGGED_IN_SALT',   'h5_u+;SAMd*1=kL|%PMX:dw)9AW xfk/f5nW!|Wcuq*~$Gd5K<d:UNL`Od*qJ$@$');
define('NONCE_SALT',       '5c l%>Cyo:j-{#Ii155u~LSHM7arwWfSJi=+g~`Im!(LR<v4;k~ li>^g|UKtbtZ');
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

define('WP_LANG', 'it_IT');

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
