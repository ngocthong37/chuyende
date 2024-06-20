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
define( 'DB_NAME', 'chuyende' );

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
define( 'AUTH_KEY',         'Z~D%Zp>-x~w`+],BU>$xeH!e[jGk juY4AWoS -7J/w:&;A-7!v`j.41BkMlOrcW' );
define( 'SECURE_AUTH_KEY',  '78NT]&3]/a,f )?0NW$@#]UQDN>5^;.@ABECUYK8q9+0/FGz`OBD~H;yYQQn??ol' );
define( 'LOGGED_IN_KEY',    '[P:z:^Lw c)V# o~O% r?~m [N8xF^r+]Z;SbewYjj$&yP[I$iyNWx<&[>>^</kZ' );
define( 'NONCE_KEY',        ':r_p&I0nbSadG,fD4l2xCY{X9EDf]C3<Er<E,~1{-#DoJ%N)%),=@Q-[J&DypsKN' );
define( 'AUTH_SALT',        'S2pjrliN&omZOLxx~D5p;6b]4sB}phzz58P,oa[2cB4i13]AOyc<h>3)eG&Ph8mR' );
define( 'SECURE_AUTH_SALT', '#h^Dl9,G. D2qFa*k1cSL]]E{1[%N3-F^]?5FbJ@YoFJM&Lx7Y2?=Y~2iq5t/YHl' );
define( 'LOGGED_IN_SALT',   '>b [YtN3km$!menoa+a`EaP6u_T4m<!;EF}=K:77jDl>XS5:V#CUj^}CV3v${dr ' );
define( 'NONCE_SALT',       '6Q54nsdneM)<?(Pd1eIJfug6M;nk3UYj]b49HmU*Z|Y#mut&MT5L-76U]WuW`ONn' );

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
