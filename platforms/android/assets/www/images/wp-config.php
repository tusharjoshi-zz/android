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
define('DB_NAME', 'euhcon_prod_wp');

/** MySQL database username */
define('DB_USER', 'euhcon_prod_wp');

/** MySQL database password */
define('DB_PASSWORD', 'e5aTBre4tQeFuCx8HMT42E');

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
define('AUTH_KEY',         'Ip+1zzLN5<!Hxg18)8yWad9PpM+CG%t=bK9qJ LTg1 SXFlkm P4g5b+KDoTxE6U');
define('SECURE_AUTH_KEY',  ';1SnF]ZU4on;DWC%D]O>m<G--es+%5p4g+cggBHK9BqQ[)xHz(vc-3N[o^e8B?D|');
define('LOGGED_IN_KEY',    'Zz-AJ@qn8X~_R,ae%^r*v1p/n&@4Cq)r:|v>*%6_3^Uw0X*Y?(-f}pp[jc8X6 J$');
define('NONCE_KEY',        'yn2F.}f^t>c<H,-(PXP]lVQEA_ew--u|ZGWsqTKs9rB7W]G/0hw)0*?_y4g!2>8a');
define('AUTH_SALT',        'W|hH+~8!U0p|Sz C<jwnl/{G*7IXj+3L%pf.38WI,a=~W9,Iag8eYhqO}?PYWa@X');
define('SECURE_AUTH_SALT', '_@eMF6vPlhd#-!]S{B76,jB>6m^0iy<9 !1n`w$ReH7_$#RAT>jvh<@qy:!)H9;n');
define('LOGGED_IN_SALT',   '-=u1-0JHxI>P<Cz:<2/v67{Z9w&Si9,7cA*8sWWqVyI@Vf]0W~`Wy/Q(DJ/nDF-l');
define('NONCE_SALT',       '?^/_Nl.eg*%bZEuqt<|<5m9oC|wz8/(J}%<Sg Y6#fK^N-7++x_([p5?ga{*Z7AB');

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
