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
define( 'DB_NAME', 'ifbf' );

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
define( 'AUTH_KEY',         'h2|6hS 2x8anrYu*1ZDsPcup+Cn>#q0}p+M;Ct=oP}>hP2]AnbRm][Qw{DyNCiQW' );
define( 'SECURE_AUTH_KEY',  'T4_7v Lk!Ox#}QP-:rB2ohJ|`yX[}fHj7ahHM>%#9,WtR)GG4lx@}N-7n(gCMnkO' );
define( 'LOGGED_IN_KEY',    'ieyq6,NSAAQ<98pj,QF a~k<(jVi|G:3(mbM-C Q6RF/>50ZA<#!6Noi?z.XW|JJ' );
define( 'NONCE_KEY',        ' 6fI#WATP5jT*wgT9cpho#U~leU;J$~Q}^=GG~Lo~;=F13Is&/`sD}umm!29|u0}' );
define( 'AUTH_SALT',        'DeA+=J+G24~V]H*;47bniv<d} gq!2(KB0hmco6AVQYtrc}Hyy<4ailv/lf2< Ng' );
define( 'SECURE_AUTH_SALT', 'DLR:HKU[76?pI!Kude`!S4?N[#j/)7Jv(g&RAOn_FCv/fpY?O y=X&J&EXuP{pKd' );
define( 'LOGGED_IN_SALT',   '@G+cl<j?{%,: o]8b@=A::w@b$(La7>M1M#O{98D-|]fUI}i/)9Bmk(C_09/_ndx' );
define( 'NONCE_SALT',       'E.A7pdo)J#>*X8S{J_Skuonl:cRD{^oIQ8dwD4Um]XW^h}(P?MQ#[bkrO+0RZ9=M' );

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
