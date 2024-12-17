<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the website, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'wordpress' );

/** Database username */
define( 'DB_USER', 'admin_wordpress' );

/** Database password */
define( 'DB_PASSWORD', 'wordpress' );

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
define( 'AUTH_KEY',         '-QT]1x36_|(2Ue|B13ex{_g5QOlF[xw;1hMC,J,E.ZnJ>wXkI5!-3 rc_$H6ods_' );
define( 'SECURE_AUTH_KEY',  '#kQ,Tvz/RSM__sts:XV8{o=_0jB)qG=JNR({xa4/BtdYfG*ayOz-^&1y`a}[&T`_' );
define( 'LOGGED_IN_KEY',    'l(4oQjT#Qc^!c=rJh&[3qi(>mDnNpegbG1rZD=oeGls>eViUQnXd)a4E(HGG:R[C' );
define( 'NONCE_KEY',        '1GD 0&Kt1EEuJTLz{%GvcD[%BjxCq&G5=QF]*L8MJSd_bIx0o(8B:_0k[SjQv$X=' );
define( 'AUTH_SALT',        '>G}IPABv_NH-@2c=SlitI}!=trjxJ<jyl.m^;ja1m:x27VyD<PVE,w/C[Tc[~o+Z' );
define( 'SECURE_AUTH_SALT', 'y7zTw~^ieKSKosnk/Q9&s1Lfnv~0oODIaD+Uc0+k`>5.%6Ew{1[+#^vC;+Jo+Zo.' );
define( 'LOGGED_IN_SALT',   '8uRHebdK0)W7Z5B^|i<tYNZU_(NKb[`n~k6^|1O d680p[y+@cxQ.WYW!poxHfa]' );
define( 'NONCE_SALT',       '~%ck7l$c9():)H]/n0H}M.Bm*EJ9dPJmLoA2$syEiOKrKVR^7>(JE~Fq:}5U``}{' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 *
 * At the installation time, database tables are created with the specified prefix.
 * Changing this value after WordPress is installed will make your site think
 * it has not been installed.
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/#table-prefix
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
 * @link https://developer.wordpress.org/advanced-administration/debug/debug-wordpress/
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
