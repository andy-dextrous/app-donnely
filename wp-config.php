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
 * * Localized language
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'local' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'root' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

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
define( 'AUTH_KEY',          'O0q#3~J)J>ywn||G1tg@WF)eS+/bsWW(2X`b?fj#M%u7~}#c,{SaQ<p54#;{6/!Z' );
define( 'SECURE_AUTH_KEY',   '<GwhVQ121W VeJ]`Z<{gu87,5B35)E6zIET5|q9}@>~dP?H2|p4QQrP0S@y/l>m/' );
define( 'LOGGED_IN_KEY',     '(zRDX4YU_?!qG5 |,+=);2~_y9|RD)k=$%o!3x`Cd3;@ZB FRYT,;H.|oWuji++~' );
define( 'NONCE_KEY',         'Bkglw/5+!?.}Ed_<Fy/;>jDqKu~=*7F@[:*cB%>9ey@a/OtGt=K07;! pZ;M%;o(' );
define( 'AUTH_SALT',         '=Pb2bxA}%$<W?rbL_y#56iT(C5PKY(*j)G|F(U e*T0Da#?E66(&W?,DH)CK=dJT' );
define( 'SECURE_AUTH_SALT',  '?.!WN@-NV>jO^H+:URyYwfI;^>a[GN)9*[tD#hLNh{FhnZ,u|Bb!Uq2;]e% I|<(' );
define( 'LOGGED_IN_SALT',    '/amL?r>wdBRBl8],f::./o;M7kDm)lt,AI3u?|;`YkH6YCF&oTQvg^*9C(oj9,`Q' );
define( 'NONCE_SALT',        'HKTNW4]uIV 0wVkA03(I}D&ddri%gf0BL.gnevx$HX;Z7Pur}T7@$lF<{s|7q0|t' );
define( 'WP_CACHE_KEY_SALT', 'dnP){[uXSQgf+u2EK8xir#nx9~42AKqA+Nvv~E$w:Bl{YCbhUf0NKm=#[`}~?DT(' );


/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';


/* Add any custom values between this line and the "stop editing" line. */



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
if ( ! defined( 'WP_DEBUG' ) ) {
	define( 'WP_DEBUG', false );
}

define( 'WP_ENVIRONMENT_TYPE', 'local' );
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
