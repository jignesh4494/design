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
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'wp' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', '' );

/** Database hostname */
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
define( 'AUTH_KEY',         '2;nIvfPk~:a87f$Pk+1Y~9878*=y>^!5OP^h&[(._9/;itqr5i<bzwaTdeVWf#f=' );
define( 'SECURE_AUTH_KEY',  'coc-2Q-9BgTT(N8&_/&ZFz7=@3JM%{`|+EHw&IZGEYTWIf*C:;nq@n^Ldttau6]!' );
define( 'LOGGED_IN_KEY',    'qWq9%W8@w{E:9RS+~!V[&F~Bx0$0|!!N0Cw7;+hY<T7JKH[K%Us`oHOzx>XPiYbS' );
define( 'NONCE_KEY',        '49IP{V-H RB1qZKcMk%jXr+Z^},}z:z[3y$,D-L+Yz9|Lm6pj#jJA2*FqIB^$ILa' );
define( 'AUTH_SALT',        '0u$6j3H;OUjpMfuo7<;6%Br >uP7gYmq0Qw}^8-aRo-sB=>zVllRS$XbSx%OVrm~' );
define( 'SECURE_AUTH_SALT', 'FS}9H7ZoQLM`M7eUcl=fr;yz7L(WK;d=JP9I{:;blyYGPdBB5L;`Rn~.S}tK|_(w' );
define( 'LOGGED_IN_SALT',   ';R1|yd|lM2Qg|fEs[|er.(hCq&!DQuny-!lQ1M?@P%x%m>OP?OwV15o%}y%k*3k ' );
define( 'NONCE_SALT',       'x(|uB_4&h<JcIe6yV:v<i[}u:w0CwlFIjf_CoDg<1G#^y(L,P)1wpNaz(iSB8XzD' );

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
 * @link https://wordpress.org/documentation/article/debugging-in-wordpress/
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
