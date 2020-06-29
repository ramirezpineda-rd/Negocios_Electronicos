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
define( 'DB_NAME', 'bach_db' );

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
define( 'AUTH_KEY',         'vlx58n&uExS:S|>k7qUrjqCnktHY*LYg0t}PsayS|{5,.Dqlx~=)HN[nv,8{<Fm^' );
define( 'SECURE_AUTH_KEY',  '/VF{Bk-8myxH6Xvb1x.+,Y]<;Hm;.f2>;pu{uCRH_L,DPV.]M}Q<!WduQ%ovm(h?' );
define( 'LOGGED_IN_KEY',    '2xNFqZx7aE5:6SHeQaLdL*852;cNaOJzu:xPv40fdSIT^2 BeTY!)1g}n_0|1jY(' );
define( 'NONCE_KEY',        'EV<63%PKkEK&@46f{om 2P]i%UNAv/}4#LOwMKkPJZ+N[ILXa#pU^gmum_)]M)e`' );
define( 'AUTH_SALT',        'kjy{&6Ebg~1GDG$Ei<[}N:/S3(S#0!9<S4=j-Rv^k!3<,Z.FvZR0rblF2+c98wHz' );
define( 'SECURE_AUTH_SALT', '?2EV(EizUrR~]gr$S=|:80w[g&Kz2&z)c1oCfiy|M8QsnQL[P8-r-xthaULEVFo9' );
define( 'LOGGED_IN_SALT',   '+kp~d76nu65&=|yko}CbN@w`o&7*C6pWQ-=^.m~?*VG-k[z^aUBxKQ,61|8JC,5X' );
define( 'NONCE_SALT',       ';h^$*6X,{fg!!,`?-#_]g+r{%I&v.5tdbfa{oo_H}0OVU<%Mr;qPN+dwhU6pMs&E' );

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
