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

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'jayp' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

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
define( 'AUTH_KEY',         'wR3jR7U+Q+3m3=>LwI}@Jj=[A`f kkz|)Z&}w*7imFWgj[con/op!?CLj 5G@Dt4' );
define( 'SECURE_AUTH_KEY',  'AQ&}x0*qF)LR<E?XbJ1rp-F#nJM`T`qV%xE`,?&Q_K#i5wL[.B[O%TjW*T_Bfh*X' );
define( 'LOGGED_IN_KEY',    'e&L0$|]1Q<Iy[mNwJ;+.&Ct[y7{O7yhZKhZfZP[-6[Jc/m&^]J?^{OC]R%PD`<bR' );
define( 'NONCE_KEY',        ' V!e[jkV;sGf3^}G_.3&7kq!HH3pDSj^,[^`STq-&;tJNhfPPlB6Umlnw48uspG@' );
define( 'AUTH_SALT',        '&]kZD#e:i|~4jlu=OpR`l#pKOGZ-&jtd/.QiBsd%$+GVOi}m34i48_I8Sb-?9n~!' );
define( 'SECURE_AUTH_SALT', 't1nOSlags|7{mqCU@RhH@p74K;h9f/hr%7L9T&Z#auL7p@3gV&EH-H&L,Su~th`U' );
define( 'LOGGED_IN_SALT',   'y;O65|<ZvM~ _@vy]lVgMu >r%J4bE!xNa:eUsNPh,68|e&zv| TBjkiOpX-:ZkL' );
define( 'NONCE_SALT',       'cGJ0Ez|dQdjPeL5IDhAZ:G$1|v;R2Br]6}m[Dgp.=UF9w6m=0N;>phb7`A{F&BOL' );

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
