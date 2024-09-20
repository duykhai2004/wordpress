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
define( 'AUTH_KEY',         '&hM,i]Rk_sguFj}E$S(h+.EoN(>WimTlXqNA{[F-I9#W3%8lDwo3J0zq)Ob0o;,`' );
define( 'SECURE_AUTH_KEY',  '1z^(EFkANC+a%NvGP4G;TXxU3s{mf|x3fI(GLth*CwVI0sQNgv{p<FH+~%zrmsyr' );
define( 'LOGGED_IN_KEY',    '-u`N1AwFTTX{*$5_Rj@L3,MN*0%mhgw|#G&mp[a_BSYCGSZ,%1GTu<43&]cK&B9M' );
define( 'NONCE_KEY',        '{3g#C<-t=q6sGRXkH2kGF>!!K8{ Pq,5 iL#JU[v;cm(4E{9ocw>@SjTm_:BUIMm' );
define( 'AUTH_SALT',        '+I?L90T#A_`6a-ffo(`R5%b[5L qSt8y6B1Tp1(>#<xkMjzL&h5HGKXH4y?W#EW7' );
define( 'SECURE_AUTH_SALT', 'E{{e~d+/:=X^PIxJJ?5]kL}}U03;!_.Ib&hjUEMxfZB;z*Y+lGLVKo-pqK~LW3|0' );
define( 'LOGGED_IN_SALT',   'XYCcC#tePS$w:h``#}bVW*iE<`=w){bC1!&kjMv$.WC@t|re;F`(gnTU{K4+kd><' );
define( 'NONCE_SALT',       'LvzQB_%3sD-_a_nV:bY;t,p:fLWiO&BwbRm_4b%<$^mLy!9O)ZI9 hk33|{1$iWA' );

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
