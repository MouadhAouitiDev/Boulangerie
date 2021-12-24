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

@ini_set( 'upload_max_size' , '500M' );
@ini_set( 'post_max_size', '512M');
@ini_set( 'memory_limit', '512M' );

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'blg_db' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         '2ks^[L`q/tuCM1t)Gv(UOF5xH1*?Cx1:>ht)%b;p@I>_0f+&Se@crT:jzzqaa0KB' );
define( 'SECURE_AUTH_KEY',  '%3!|[bDs>F>y^I<vsFXN#,RMO;I&vq[f]GVdO8^mUUV0ocJ$XeJ/vR+I*ICYgm<%' );
define( 'LOGGED_IN_KEY',    'VsL!P>::}5K+ux[ceH5;4g=W2]dB}DZkx:2BNVk@^8dYVn`h$Y?Sl(zpgm+$f&Z{' );
define( 'NONCE_KEY',        'LGN_Fa&x&M-=JrK3-Xob3aT41By qt<)a7*ynu-fv{b8_/Lx-s~r*}WM,[L,Dw  ' );
define( 'AUTH_SALT',        'E&,UF/PamhbUW<|LKzA@|~]Usu3D5R8R&4.Bd_x8`T4P`piI(WYbIf]4)g&@K>3D' );
define( 'SECURE_AUTH_SALT', 'U(6Fk$/QS?d=7QS~9Q7;_}s9wSYITTSL0}P8V=oHVy3PuUWnG/N;z1}wQ>_%-}r8' );
define( 'LOGGED_IN_SALT',   'o){M04qMoNSygkFWxyIsm;1oa`<M/YheC{&I_8r~KdniX)~`@O%u@*<7Pe~EgT#z' );
define( 'NONCE_SALT',       ';KSAH&08`wF)z:0YV+w^pED_q3mSqdA;_OoWh?aJp41R]eeh&_B^J(5J/c;K|9#4' );

/**#@-*/

/**
 * WordPress Database Table prefix.
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

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
