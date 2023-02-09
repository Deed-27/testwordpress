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
define( 'DB_NAME', 'wordpress' );

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
define( 'AUTH_KEY',         'vhfJ38c]=_@}<,_;(5{IoR6UcPrQmqj0M3=u59.S%xfy:2jYW>53_RA8vH1QW:~2' );
define( 'SECURE_AUTH_KEY',  '[Zej7W#HUO;xy*g?Va!:NMcQxo-4v.2IBh?VD~+8rvhcW.wyMenC%nDWqCrqv@FO' );
define( 'LOGGED_IN_KEY',    'gmwvS`kY*E9s9F/#MV%wX!}to:M8MjKen6Bu:N*mY[`^[ls#eC*hpm~Kr8xO*`[6' );
define( 'NONCE_KEY',        'DS`V5(H:<2ujN#-~);/A28yD_ %4_-E%Eq]/zvE(_FJD@IP0]0cd`FK34H#4Qd^%' );
define( 'AUTH_SALT',        'n*9f>IT^s2:$PSbiMR!Z1~8 L!`J+d!~rUj]BDk5{-kI(&8m-,CPO n;IO>G>/mm' );
define( 'SECURE_AUTH_SALT', 'p)`dp?fJ]E7{[cj$;oSY[M!<Sif|gvy)/wtqR|9ul56]FE<J9h#j1!d/uAvw`k_G' );
define( 'LOGGED_IN_SALT',   'dmL7D?*v$2>0sXcCk] 30%n79>L?wb]:J<,vrmxZ(hC_dI?-@d-]F/Qkh:4&3_jn' );
define( 'NONCE_SALT',       'NQ#LAiUzXJZ6$;d(fnTpzPc#90Y;U3$!t-| e|2d^N$B^Yc#@,C)US;XT&Jp]/8m' );

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
