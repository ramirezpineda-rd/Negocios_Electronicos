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
define( 'DB_NAME', 'wp_db' );

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
define( 'AUTH_KEY',         'QE0KB3fRr#<{84.mKp |c7%BCHn!pTA+>lm$0Wa$+pd]O*mu^h&~Hcp.U}8_QMH9' );
define( 'SECURE_AUTH_KEY',  '5Sr5PsE^u5}j}D.jI@k:E}4-j>LC~~uME{qwlq1/flBk%yOy{K9t8!+0Ytgbb <I' );
define( 'LOGGED_IN_KEY',    'F(KJy?r/!zZRC$)-G,d6DKJ4E+QKtpuDMS4,iDd)Q-6P+x-Yg(7+&yl5k_uw7[vp' );
define( 'NONCE_KEY',        '*Y+:([@lsu7>Jd(qgps8itXRn=bF|.jIWl&[Sk.Yj3av^tgo7GemV:5vU#X+h*|=' );
define( 'AUTH_SALT',        'cTl&J,p$Xa=^nv6hevou|#}.n;p(?]H]G=aMJCDD4A1siXoMY=-Y*A:RPGnL}hc3' );
define( 'SECURE_AUTH_SALT', 'l fgW5>jZY:)rs+risUM+1s!e%]?t4~x{%xo{XC56il%zS=}`I[)6R0|qfr_ezNx' );
define( 'LOGGED_IN_SALT',   '6B0W{RF>1[8J07vY!b.%n&G:7nv?P/En=~zMIU1NLo#1pC)ofN%vUQYRU`L3T34g' );
define( 'NONCE_SALT',       'M5&YJ>nfP) h5(T%2oq*|.Yhy<L.%ytHo:NH>oEtK8$B%=g|VtJ29*;5<aUnF7#x' );

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
