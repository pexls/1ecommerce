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
define( 'DB_NAME', 'ecommerce' );

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
define( 'AUTH_KEY',         'i1:y~f5!NA!qxOP}c06Q!lZ00fM`<}tQ~Y}m_MAex)lkyBdoOFc/[]! -^_Ru;2h' );
define( 'SECURE_AUTH_KEY',  'x(wm`h6.tL&48D}[E:H}8lMP^ps&b~!JR]9qzgn.Y^;_ss/D,t{|H^}_%RVTm@j-' );
define( 'LOGGED_IN_KEY',    'Q.g<o*<[Bj{B]4ktFxBlU`+iaKGKmKhR7``y`w4}+w+Wh%APw2uIb3n6^xN-IU4q' );
define( 'NONCE_KEY',        'kpvKTgo7<+$}yjB&gW~?hg.-7P0g9F5e,zv||p%_l`u}.1WZh}A_r`.UW. e#oU2' );
define( 'AUTH_SALT',        'm(6P0AUa @C/|EbLhL:DXIaoSTd+t9cN{@]=rMwz#<<55~_!(Gyb3D.9]~CNYN?T' );
define( 'SECURE_AUTH_SALT', 'n(CI= ;w)um=s0>8$r}oEh1<`KH_#IB42IkI!p=^dZTf(WZX2G#`FEfKsgGYFZj:' );
define( 'LOGGED_IN_SALT',   'RP_cHkqG[nlAM&9{t1VK(gUe[7)SbO-46LzWtsXJ9/9/$F<z>VhO@*Xm`OveR^7w' );
define( 'NONCE_SALT',       '87bf^2*36#}_c20EKV{yU=%<9/C`B6ASYJUZp 76ZZN8/|o$C8oIKz?~q_8]kAE`' );

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
