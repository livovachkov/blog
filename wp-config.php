<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the
 * installation. You don't have to use the web site, you can
 * copy this file to "wp-config.php" and fill in the values.
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

define( 'FS_METHOD', 'direct' );
// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'wordpress' );

/** MySQL database username */
define( 'DB_USER', 'wp-user' );

/** MySQL database password */
define( 'DB_PASSWORD', 'leoed' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         '?Mo;<?i+5E*Ca[2 9ho|A>$Ar0#kz?HiXng,vklB1j{xydOc8M1xu,yaat&L67b)' );
define( 'SECURE_AUTH_KEY',  '$Svx0Y%NqFQ:68a;2;HLfW:=r7B{d`ZmMANy[)!dd233/#bydl8Iuo/[z,)_fb77' );
define( 'LOGGED_IN_KEY',    '$sPM&k/ xy @]86 M$>,tI98f71s3?M)MUX@:Wxn|>/@rf]2E:l8uIzoYvH$h@R]' );
define( 'NONCE_KEY',        '}>dk}X)<d9u7odfyt5j 97VB_2rwX|8h8^Zd>G*~xG+0Jv94{9.3RMQ+2gRIr-ok' );
define( 'AUTH_SALT',        '34djj-OT``ZckQs+>udVFp>?&I{YTaqH&6Q,1,p}zT](RqVXRR9=Wsnml_}GO,Ne' );
define( 'SECURE_AUTH_SALT', '?vfdf<y^tUVFn}>C6V]+>$~mH}AoNaUU,G1Ev:]@bbx/[N/t5xQc]E8rVeSm<l7c' );
define( 'LOGGED_IN_SALT',   'gp.kZ$U=5MMo`BhxE>yt?PSg{ {?]rIdhfLyK6I4-J8:ltBVK5E=Z 8Ry%x_{yMI' );
define( 'NONCE_SALT',       'BmPq(nNuUVhYVHu896CCXlxqS 2<|=_mnO#hbGwGR[bu c0yj`(tp(XJ*R.7%.hK' );

/**#@-*/

/**
 * WordPress Database Table prefix.
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

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
