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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'mink' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY', 'j:F6q51:v&P4!SKWsAs[IJ8)XnvFA61Vkp]%V61d5772m8-vDU84a8z-iY1oB9JW');
define('SECURE_AUTH_KEY', 'xsmV]h7jADpRYh3wz9N]-JU9&7l%qQ/daEq%7]]K6&G_NpP4SPG*aiIFDP0pzj]C');
define('LOGGED_IN_KEY', '|D%;I18#+3lt&+6L&P12X:08W:3g;u~d0ROE1#|/)cR4WXzRt2&vYF3_#b;U34at');
define('NONCE_KEY', 'B_fs-r52K/@|9_45&O:/@@f~3N@re-j5p6n@-5BxOM3uv)h7[7s1tJ&k+hviJ2/y');
define('AUTH_SALT', 'VXzV96d21-aAv34nzZ[r16ZViF54v20/90]wB)S0*ZC[14IJMNGBt46jHw0jUeM4');
define('SECURE_AUTH_SALT', ':j9Ci)Lw1rz1Qo!iV;Z*2|IcJt4*@H4I0]1Vl0!1p%tH;9p3rb0En0n!r9N7@quu');
define('LOGGED_IN_SALT', '84_hwL8S/SK4aad6E9o-9*x6y]KE9P2K@Vx141&|+TV4iV~V3!0#uqI2o7[+s164');
define('NONCE_SALT', 'X6#Rh0;ew|h50Wxy4_9Wdeh41oZhmPs33Au**M9_3869z9b0g4&@[XT17b9KtCIt');

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';


define('WP_ALLOW_MULTISITE', true);
define( 'DISABLE_WP_CRON', true );
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
