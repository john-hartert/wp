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
define('DB_NAME', 'claydesk elearning');

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
define('AUTH_KEY',         'x];thwTy5=u/|$]wTwAX*=sn^gb)Bvb_4pH`=VWiGj7iNDdb^q7hIqC1--Z%7W2&');
define('SECURE_AUTH_KEY',  ';[is`01sg+bmZjT7Lw(,mKEZtjX.$];>tE(cNcp}OZSph:iiT4iN>=Q!BJ}VQ#.e');
define('LOGGED_IN_KEY',    'Kv)4sWh:=k0E2jSqA>?mq/}/DfMuc^A}IxqEUPO>ccJdgvDN`QgWl@-dJ`5?j0Xe');
define('NONCE_KEY',        '{ju/22*}<#7/1(?oy`a&eqgs.,LGfn`dr.c|hR{H|=aAPt^wC9U/i$C%4bn6$kta');
define('AUTH_SALT',        'GF4B_%}?.Z,/W h@cyl2~&0V>Wh^lHtLJ&Dh,aOTjfJYRQfG+~iH+X_WfPm)kUI>');
define('SECURE_AUTH_SALT', 'hu6`Dj2eBM=s{!rju1!@f )YfZ:;;*V*%U/yXX$#1sT_!uGrr]hHkj@6|?4}T.%r');
define('LOGGED_IN_SALT',   'M^J|+R_pgs_ZT$k5gh8~KWHSPO+@|R7s[=Lahh5I1Nu^bBPWE?gi,!/s FuFG/e~');
define('NONCE_SALT',       'hhshJ@TG~@c~gMo3Mp;Fc~g cA,4FbPr~9Qap*;]0IGmT@1vaesgOOj&dm&pwbUy');

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
