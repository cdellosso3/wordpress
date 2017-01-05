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
define('DB_NAME', 'wordpress');

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
define('AUTH_KEY',         '>r%YPk,b0`snB;`[&+}7hYEQ[%zkb1A@YRs0%.PyxycePce3TH`Aa{+mjwVxXD`[');
define('SECURE_AUTH_KEY',  'FW+cz&H;pqu3~zA|7wv/r<>?L% p-t9-Ly+ICa{`dA5VvR.u!Ow}am4O!M#Rh3C6');
define('LOGGED_IN_KEY',    'V_]^GKfY^i4=O4V@iw.4 ]%K+1J. 2.,Y<msTq`omq|LQ,GLm}0UmlUr0k+aVkIl');
define('NONCE_KEY',        '(9KW+5G|M$&tC{$>dF{PI3NRr*a(F<#-|`#F_zZl]X+4nCfDz[s)zw_F%m-/Om4i');
define('AUTH_SALT',        '#[v].lF~0LT.tj:QNG})-zo ~RSl/3TQZOr?fC(CMkA5 8b|cf@~Ye_hf6(5ar^k');
define('SECURE_AUTH_SALT', '|rdy@J;!iwEWb.D..b`_x&KF*TX,LV#K^b7TyLHZl)5,c:qDLI&?$sgi2`bG/+G=');
define('LOGGED_IN_SALT',   '[9V#y*.-~9lX6RGQJcxWrg(^c@MbTS}9O2,5nJORq18t!(2M(?5KHL?>DTqLCzp*');
define('NONCE_SALT',       'xT!&F9)J98JS?c,O)E7JvxO_-5<K5XP-7^/(oG=.DYA7&=+>?:m`?&iqoSA9kUgU');

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
