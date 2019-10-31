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
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'rapidmovies_db' );

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
define( 'AUTH_KEY',         'M?sPk}KG0$9U=cv ,KP0I2aw`uU%>tWwqo>t7gk}>0O ysyXuOL}Uhz/Sue>NT]W' );
define( 'SECURE_AUTH_KEY',  'pENE@RRG3,v r`<;%-.s6+!nq{.4RbSka=QgQ; ^9^(taD@~b>m13[X&H`xpSW_P' );
define( 'LOGGED_IN_KEY',    'H8Hr#ttNl6?uZn0dc^G0PLE`Hs;y&#Mttp<Pzn;}b1gBuxz@b<<SwfYY}_%*0yF?' );
define( 'NONCE_KEY',        'ZCb|/d4I99K9Q>QattcSij<TQ,Hln1I^L!y41Hy0=H1b1%wU4X4p|wKL~2-^S{K}' );
define( 'AUTH_SALT',        '[zG+YFCp~D/zQ65h+cS1b_*vbGr`$#lDhbyvEqwdUHF5:6VTsdj5R?N-NW7WfkuY' );
define( 'SECURE_AUTH_SALT', 'aGCz3skZY#bKk8-B8FY_JdrVw{Yi.M%G)JZ9%o&]Q+=(m@EMaEabSlQV5ky4^i:4' );
define( 'LOGGED_IN_SALT',   'C2xFu`?ew{n`2;Lg.qUJSFH7t>X&i-e@XY@[kfkZ^1,9@!,9z2& {W/KT52Sp#K[' );
define( 'NONCE_SALT',       'Qxr*xiD^BZU2~kJ/tH|@vz|pnWj*W<XMhR,x(ML lifJV?(}Z6i~!&T~EhS0Uapt' );

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
 * visit the Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once( ABSPATH . 'wp-settings.php' );
