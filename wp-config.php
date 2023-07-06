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
define( 'DB_NAME', 'doklaader' );

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
define( 'AUTH_KEY',         'XjJDAr4uM[|;(( 45[@tfVrPs1dJbzj-iQ(LlIe3,uiA3RNUG|p6pp<` 5iO)2d>' );
define( 'SECURE_AUTH_KEY',  'w{-e-5;V3?vYE 2ighok@q)~5&E -P6[pNnytTud]X_W{:]Sd?%cGiPuteM*KceZ' );
define( 'LOGGED_IN_KEY',    '?3Rdqpe+[n22WOEZ%zZ&)!c:=TuGWe_4k^mEDS AZ[~80~GRbTkTrQ^?^9SD!uOd' );
define( 'NONCE_KEY',        ':a_!:t&AFCr4=U8),${BQ-E}@@J6@yZk]1o%C]A}1MyO$v-[l/Xeef Bm2tNz/p)' );
define( 'AUTH_SALT',        '6%(VKHC1&1Fs |!sthso{?4=U:hFVwS$?N)5EF=2yI>!vp`Y7V+0&e4N-[2lKl;;' );
define( 'SECURE_AUTH_SALT', 'qU;.F)!$>y3RhKRlu|RWHr1j<_e5tf/)k3R@(n6,_FL*;R99lPg,U5hY+oDam!f$' );
define( 'LOGGED_IN_SALT',   '?)1@jR-[5;28*8l2I^+:8%AZi;W5/?V.?}7?*G4I^ET`n#`aL*07:9K84X`e^x*:' );
define( 'NONCE_SALT',       'E-NWJv8z*})1:&{9(s,WS/f?C$CD|#}E?AS^6/|qf0Yv]Y^$V/0VIZL@$n*I!GE@' );

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
