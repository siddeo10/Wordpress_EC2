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
define( 'DB_NAME', 'Wordpress' );

/** Database username */
define( 'DB_USER', 'siddhant_wp' );

/** Database password */
define( 'DB_PASSWORD', 'Sadiomane@123' );

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
define( 'AUTH_KEY',         'G>*#E@-=dCksi}+F&!KQNh}/X5@){8{75&tYf$369Oz3TiN/e@txikrsRMTCc|{2' );
define( 'SECURE_AUTH_KEY',  '.%>=u=C!<k=0vIbjgHXOP^(%6l:{;f q&g0Gy>l,?1K0xIJMXD|G`$_go] )+@%V' );
define( 'LOGGED_IN_KEY',    '=X5^b+a2rF7[3xgx%:obmKx&ZPgr:$E9S>+C_oN@rt&;[1]J]t^^le}}|QWg$LGY' );
define( 'NONCE_KEY',        'XQ4$;@vj7Tp6LE<CHryyA,N!#l+}FR:HJ{74iW3_[G%GL@0:(H[+FkWgJ]YG|N2p' );
define( 'AUTH_SALT',        'FT^V/rdH(]E,QNth[gG{N^X_1QjV[aUR~~g!:1 yz0Ok5K=m/0#k`IO[,(^SW UX' );
define( 'SECURE_AUTH_SALT', ')H/7&0Wq*>*ay5rTt2D]mhoZ%)}L6Cy@E8SvsU16eZmpZ,I@S/9zdtNb@C3AZ?Zq' );
define( 'LOGGED_IN_SALT',   '16o{A}hn/&zyKmWE?(|I/#OV1wtBL_Q,g-]U_y6+Jk(HFbmbw{JD,c!)4!S(?/U;' );
define( 'NONCE_SALT',       '%|z[V)UU<$a0dV0EY-n5jTuK5dM^<Q+#3M8,5.L`>KTalI`7Wsc3/34NH}Z{G{On' );

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
