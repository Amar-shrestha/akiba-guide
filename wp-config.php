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
 * * MySQL settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'akiba_guild' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', 'Password@123' );

/** MySQL hostname */
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
define( 'AUTH_KEY',         'z?H-E8sg!|&*@&%czi(<<&(1KC9v5-`|Y}65wFkK#/k5;yg:k^,Z#}gGZ(yJM<D ' );
define( 'SECURE_AUTH_KEY',  '#w{yWj%<&n=mDf`iEkO}i4:Xaf4l-68C3GrQvjOmN=oa*Cs[`U^;Xem{Bc(t&z])' );
define( 'LOGGED_IN_KEY',    'apU!`udLd!7-?dlgMCL:S@]q`p(9!GS7$[3M^N/k2wSi:Y4I^>!-Wyx#MV$~w`7E' );
define( 'NONCE_KEY',        'UOftJr6Wj[vHb8Mj-=wxU|=%E;EMWQK7DS Hk^RI+t(J]zEHU+)qx _s86:snQ^v' );
define( 'AUTH_SALT',        '{Fam&?mA)sgY[L~LI_f^-wbfK*MxL/tAr!deXG/cOuzHI904Uny)y1u^&,c>7_(L' );
define( 'SECURE_AUTH_SALT', 'Z7}FZgR4#JraDeCp[F+;-2.l#nGFE0W_Ibj}}eQAG=!8.l5ae+@bth1u~6B$/-fk' );
define( 'LOGGED_IN_SALT',   '$Ya]q$M:Ru0<0CjbTXtA_nq?c**?>Qi9iN7?<Qn^ixGvwYFJJ>m9Y% inn+7771o' );
define( 'NONCE_SALT',       '(33&Le[tWfPin%=j&mEiN3D>%?vIF&p4Hd.0hfE4=?IP{N4qO7<X!SBA7)|!Lq]~' );

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
define( 'WP_DEBUG', true );

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
