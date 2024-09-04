<?php
define( 'WP_CACHE', true );
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
define( 'DB_NAME', 'ndvduJ5G9csAyh' );

/** Database username */
define( 'DB_USER', 'ndvduJ5G9csAyh' );

/** Database password */
define( 'DB_PASSWORD', 'us9gD4cJX3uwaf' );

/** Database hostname */
define( 'DB_HOST', 'localhost:3306' );

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
define( 'AUTH_KEY',          ';G__I  )gs@C~uz dH?JQi]v=-2;Gso|uh;&E1JIG}sA|gH?j7{E2Y>n*lx$d21`' );
define( 'SECURE_AUTH_KEY',   'MbwP-++RCP YhSr- z#}4XtQuVrOeXx j:vo{9;TRFBY{H3kBSC|Yv4*}+[n~VYO' );
define( 'LOGGED_IN_KEY',     ')JA;D#Z^RQ9Xk``S,=#L413F~75YxwqAq7inI]V~%~,X[E yGIGR9py_6s*~An-.' );
define( 'NONCE_KEY',         '8WEY6t4[HfNTMiZROm=@1)Pwy%{]sj!nDpm}9<f%vP,KPk?(K)aTN)Dy4CJi{V5J' );
define( 'AUTH_SALT',         'j$V7/H|ql:LF6>Uc,W|A> *w-[;rv;9`d?+[[]QX|f*n._(c9s0Re2OlZoe,5&4C' );
define( 'SECURE_AUTH_SALT',  '@+r6)<dEWgi|rR}%J@gj<8c:8F$=jhR,/QF>}A_@+Tom#g3|-W%Y;M!H6Cn$krHo' );
define( 'LOGGED_IN_SALT',    'd2(ag:%&j4Ydv{G}lkL#x9-i2~LZqDSU9r6I6b^# $}4]R8_FESiNDI:+x F 4jn' );
define( 'NONCE_SALT',        'Xy~#f`2uRg;rft~]Q7t/BP=j+.9Ehm9UZV8=K!Q=;f?)2XCM S@uZ%joOc?0L4@{' );
define( 'WP_CACHE_KEY_SALT', '.z/UA#]Yd-|;zX|p|Rm>U2=nO;p/mOGZyh<|G=jO]-28:p:&R>3e61OLzzSHYS|I' );


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

define( 'WP_AUTO_UPDATE_CORE', true );
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
