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
define( 'DB_NAME', 'ecom' );

/** Database username */
define( 'DB_USER', 'huzaifa' );

/** Database password */
define( 'DB_PASSWORD', '112233445566' );

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
define( 'AUTH_KEY',         '*OYGD4^#&y@^$6BW<~?GGELQ+h900y8kxyVkV#!YITFUC}!Uk)QJY#9#wOfyb~Q7' );
define( 'SECURE_AUTH_KEY',  '.fz07B-*-V4t|Z%VzN^c%kC9cWke1lOu(]RC1N!9H]:VPLC-|aBX+H,j0/$2[p45' );
define( 'LOGGED_IN_KEY',    'dQ{Q>XOKz-)m(&*hzm_YTcc~09N)grv9gk]wN^$sQFIpHS> .?QTz{Snn!U#jpek' );
define( 'NONCE_KEY',        'PrPCJzp:Li)Ggu|*bcpCFup6Qmc5t}r%zqHY&AiJiiGAyXVH_*DH@iZY$5f(6.J:' );
define( 'AUTH_SALT',        'sJa]|po*4&uI7TQIyz|.(2mm[yVKJ{zCs<fS`0F_{#9G:>DC~1|w98S!]hR9Kw(3' );
define( 'SECURE_AUTH_SALT', 'Q Clb.~Ar8(n3CN8]U,QCMur2Va5b&r*.r?BM/DO=lfRylJO0)rD[>P):) n,:aS' );
define( 'LOGGED_IN_SALT',   ':<y~4dWb}21neB)m Utffrc$/K#9iZU)~hwfh4K_RoQQ!g,~.%JrG<2xcVfq4r$r' );
define( 'NONCE_SALT',       'f/UxC:+$PTA17Jd:+3i,xvO3(FzP/Po}@fGctS5R|5oRCel;,nk:E9 1MRPjB~[N' );

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
