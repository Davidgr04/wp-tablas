<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the web site, you can copy this file to "wp-config.php"
 * and fill in the values.
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
define( 'DB_NAME', 'wordpress_tablas' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The database collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication unique keys and salts.
 *
 * Change these to different unique phrases! You can generate these using
 * the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}.
 *
 * You can change these at any point in time to invalidate all existing cookies.
 * This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         ';a6&@<_Qv455q!yJ`CMs.C*~dGgl/@X`XVpRI95@qFvIxWVIC <OJUcG, dLfNGv' );
define( 'SECURE_AUTH_KEY',  'n_r_~?XLR4 tz5/k2)pv5V^ZG^+D1PMj c]GLb3(F=nJD`ERz{Z|z_B)_uFs2ZYR' );
define( 'LOGGED_IN_KEY',    'BQwXgnK!?hqpD$x6Akx$SnW 5sr)E1~1>7.p^;pc/Wo!!6zn6=L)[i}&b|!&I)/,' );
define( 'NONCE_KEY',        '&~l%N#HyP;yB:R#}nym#r!FdZ_v]t$;7mTYyg. >[Q[y}HZvK!-z5kq$BZu3} U>' );
define( 'AUTH_SALT',        '0<GLGt|Ig2d^ToFQ$.g1JIS!JV/YgF*xe{C321ky;D.Y0[~g(Z.7Es!_6#q dXqD' );
define( 'SECURE_AUTH_SALT', ';O<YQ8T^3s.<H+XxV)69NL@UR=#H_thMe|sUJG(8-A``BO+:jGKhG:nL9@G9:)5Y' );
define( 'LOGGED_IN_SALT',   'GobG*yC@n}Eae%l!V(%/?p{q!bt0y3%42Mix1,@j%,fr<=(]MyBx4n2^X:XHGz<>' );
define( 'NONCE_SALT',       'qD9J@^oW9OYei bX8vyDg#Ib[a`O.y1/O_T/q+$1Um4+%yBmop;pXQ9yF_oZ_[;R' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 *
 * For information on other constants that can be used for debugging,
 * visit the documentation.
 *
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
