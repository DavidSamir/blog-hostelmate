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
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'wp_dbfW6zz' );

/** Database username */
define( 'DB_USER', 'wp_fW6l23S' );

/** Database password */
define( 'DB_PASSWORD', 'ys#qOUuKceW5_A5@iBZZzzZf' );

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
define( 'AUTH_KEY',         'Ei#4~HB(u9|d~_@5M_m1YmO}EQY$EZdl6)B.$q!UP`Q#uD:dwM/]+G)8AnNDd1L7' );
define( 'SECURE_AUTH_KEY',  '|1V -M$R)8>,Zjvje!mHh=LoZ~o1%A9AK+cg<|;6):SV;8@}>9A5_WOY^7Xad3|l' );
define( 'LOGGED_IN_KEY',    'Z~23 9HFnM;}z/Saq#PKF0$TGnCRCSz]MpXFBd:G.<x21Q91M/]wM$e*Ta*s}qAy' );
define( 'NONCE_KEY',        'k)P>hIYOjOFL<}P[]TRqiCUz&_euCwgyS#gLqu 1NH)W$xM[moi3Q!>fjGGN9*Vj' );
define( 'AUTH_SALT',        ']V<:6%q&)KRZt*)JWFk7Yx`uIIHl&q6ShQ8[_?zv^A=8?}& 6 U[aaZy`:WdfWc0' );
define( 'SECURE_AUTH_SALT', 'tpKEQGN:6yWG&^mQO/$],JOJb.MwR4Cz87@y5k4e56ai[O%q<yKpG.X7AHt3Iohf' );
define( 'LOGGED_IN_SALT',   '`Jo,.{U4GDyI/`!vQ>[(%wBXBWwDU]`&YqOekqf]_#=i_FeA6GF2j0ixm|JKm(g[' );
define( 'NONCE_SALT',       '6+9&0;N5{MFUgHrkaD#14bUNOw[_#Pe0D1~u^?h=4(:+(t6eY)>&e-T||#_[(E0B' );

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
