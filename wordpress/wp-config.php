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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'wordpresstobootstrap' );

/** Database username */
define( 'DB_USER', 'Ahmad' );

/** Database password */
define( 'DB_PASSWORD', '09322' );

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
define( 'AUTH_KEY',         'bZ3*ln(!,5Rn4}beh@2F_yAe?ReuogM]/w+pkFS@,iog+iB;VTUDJ1vGFhvKb^XB' );
define( 'SECURE_AUTH_KEY',  '9HvF*Q6HRF#]uv0-x<%<Px>|Vu;> fo_(lRS+J[_9(iz}HhSmQ<X5e&>7hUA#%}k' );
define( 'LOGGED_IN_KEY',    'o^-?mnq:#%x-5=!q-(AQ]0D-Q)o&ApV7n0`H[g+|:WY)*quik.cN%83{-%F|`|yz' );
define( 'NONCE_KEY',        'MT}HK&L!z}RYQ]$UJow$g6#A,1|m(2!<qp6_0mg}&EM75g83X7_Lj7hP?T[E*PE/' );
define( 'AUTH_SALT',        '`>Sa?]848]|S~~>*E1W{Qb<7#^aJP$814>`jr$l9Kb}jB3 UaY;P=We]N!5 fI/#' );
define( 'SECURE_AUTH_SALT', '7%39LYEHjE]R.8pLBcp@501*QZJ]0Zy#oJ*ZX% #_C]/G,nRA$t{}_Q.holca/#j' );
define( 'LOGGED_IN_SALT',   'S#Zgn9:o2oD>9wW~*X;|zP-SHcu?LPS[oYxh.sg1THj9^~mXIAN6TFIt/x@`AV>[' );
define( 'NONCE_SALT',       's.kT%6M-}-@UCO+-?x.99(7l}`)(ieC=O!qmD~gdimuTW:~klt?m!pVUZJ3<EkaT' );

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
