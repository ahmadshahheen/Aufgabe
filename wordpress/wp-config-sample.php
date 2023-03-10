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
define('AUTH_KEY',         'FeNq9 )ML,:Q1,)|t4#i3Vl09%S^O|WO[u;`aWm|*xTzJ[Vl`n*9`-;ARP/M.B@.');
define('SECURE_AUTH_KEY',  '|`K>|;]pEe&9St|d7lFQSHKV}t4s.-Zx{rGrr4+ePyQmcvVaM<qE-MHsOn2S6,En');
define('LOGGED_IN_KEY',    'O xJ@|e#$6+-YYro(8q&J9{-iM&YH=2FsQ.Y5$4lzjFJ$*t&5%XYjra;C&mEL/!$');
define('NONCE_KEY',        ';CP]PGVY&L;xBhW6~K<pSU_,%D/D1zZK,Sl5t*vY4+J%tq^D[|CS(<lLRALFvx|?');
define('AUTH_SALT',        ']xeDP]XF&u9qoR)~jKarD(AMs/-5ls|8ABHWM|Pw2X+o>t|EVO,+uBiWh*+S87TZ');
define('SECURE_AUTH_SALT', 'Ofeft4h8gIc`7xmD`W8&Ox2lIj@|,>-)Pk70tFAhPJO=M||9-gJ3Qm|j49DLqR=@');
define('LOGGED_IN_SALT',   '{AtJcihS-ZB_Hayc%okD$d3N/cm #+%/?<uLx|rb,_JZ0^bbV]h,9z6?r?1suY_C');
define('NONCE_SALT',       'VDlEKp<5X{F_.+?wz^ k]t:GGx3/)S;$qs*_]#L!02K`Q}FKy7B^M-h+4V}:|O-Q');

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
