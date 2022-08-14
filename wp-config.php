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
define( 'DB_NAME', 'dbwp_white_house' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'root' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The database collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

define('WP_DEBUG', true);

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
define( 'AUTH_KEY',         ':v(.dZ$^$2=ko4|Y[NNEni_eT0^Ikp4*T?GJqRPP*NRNc7<8wq bBO=~kT6MVDop' );
define( 'SECURE_AUTH_KEY',  '4N4){K*@5]!DNHT^9l;ci=?l|i!@#jnG8wm~^1I!0T@5W^Qj.8M}i6_$UeySl> ^' );
define( 'LOGGED_IN_KEY',    'H?#H:.Z4gDyV+Q|$&2[-?^~qcdP/6>FsjcvYV]XC?F1}jl14YBY!pbp2#wLOf~_(' );
define( 'NONCE_KEY',        '0hA,3YG@t7$TbH8d%+pd_rkSo|u2N[Xh;;;p%UCbi_i+hGcc(7%,<}L1]P:G4H_4' );
define( 'AUTH_SALT',        '4p2q(P-a)X[v{gz-t.EZM8E=N^Xmg/+~&G~eP;.AFwWD0KDRmoeml p5>==_Kow1' );
define( 'SECURE_AUTH_SALT', ',3e.-c=fD>Ou(BqfJm5grzr}1M2z}j&ygu(+OJi_rM-6X`h-%rKh<MPujS=TOZ<(' );
define( 'LOGGED_IN_SALT',   's{N_;aalpJjzah=&D6W7Jcq}X@i|+:E|(%d8]5RcdX*(llT[g?v[6SLoh%g9x$x4' );
define( 'NONCE_SALT',       'j.spH^TDej;cNLQFm8{NbzS#Uy(r%8=*eB8C(:$f).cl`IifQT9h<a ^(IE@lEm]' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'dbwp_';

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
