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
define( 'DB_NAME', 'woodmart_db' );

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

define('WP_MEMORY_LIMIT', '125M');

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'G}!_yt*9h;Ya.Bf]fc^o%S%Z?g(2.ZrO@5//kFNZcZA8oojURyYqqE@x+ZC5{r~K' );
define( 'SECURE_AUTH_KEY',  'z1)<-9}a1e|QAE^|266~V]ny>x(I5LK4g=M}c>k2W>`Kn[)S%?sW|= Bl{@G)AmJ' );
define( 'LOGGED_IN_KEY',    '/e::/*{^pD3f;+TGzS5IAxemgo]v;.26zDN`a(9md?n#?dsQ;2lLJLK4>|Nq4 + ' );
define( 'NONCE_KEY',        'M%W>@]!2}q5w,9RC~#mN|G.C@1;l,a2v(zvT}gA`,H7,7,PQ8~m)0{I%`&TWvjeo' );
define( 'AUTH_SALT',        'T=*-Uj:Wkhe9?~4ZyI8[Bi]T=G2lAZ@-_p~x1VIhWg3G7|,`qip{Tn2+r/0KCC@Z' );
define( 'SECURE_AUTH_SALT', 'h4Cy; 5BuAZ|InKF6}y;`W_YY/)B{vWXoYmPMrgH&Pl*[ig>uWd4,$@kooFE}3p6' );
define( 'LOGGED_IN_SALT',   'IlF8^bk_@JB,!3e^Op%ED0vWqG+j5T3t&uU>yrd}Jl_f0PG}#1MFjr3xjz@:vs=$' );
define( 'NONCE_SALT',       '+{EZ6H_U+$ON{`~Fi0bwGKd99:RRuMMC*m<%C2IpeAmK7<kF]^z&/Ibth0EB,)Ii' );

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
