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
define( 'DB_NAME', 'cms' );

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
define( 'AUTH_KEY',         'SG^>f#56ZxSx8^ChD^{S[>uk?_5w)Us`P0SiaxV69&gb{b_8/Vnba!%=E@qsumdg' );
define( 'SECURE_AUTH_KEY',  'Wiu@:!__[jmHlw>?rf=.j4@0R~_3fjcMid}nx.%1RLS> KZ?gYAag/*3t<N*[2E/' );
define( 'LOGGED_IN_KEY',    'XfA[Rw5{c:vl-oU~BtZ4<bMY$d#grq!D+QO9hP6Nv)wAD(@aZz5f[&o/ )i9~}Gj' );
define( 'NONCE_KEY',        'Z=Vj<}}ib9zP<7@8 q9TqyA;_[<vWY|/l02JNt.{fWI7Xw$:xPtwqw)n@=p<DI??' );
define( 'AUTH_SALT',        ' wwfZ %W{8XK]SsW[kgC:yQ4FBGzuYdfoXw*91UJnb}byxZ6l:Sd<32s2~Uw@M2[' );
define( 'SECURE_AUTH_SALT', '[J@_z>}Q,)+7`J#;_c|kvDeDR[0 ?--%X~w8asdm^R1?YfyyfNJ`iTJsI1<9I(wV' );
define( 'LOGGED_IN_SALT',   'hA)|x-R,2)U:xvuJt6,4:k$=%+yhQ#X- (^!8K$!~h%ZG=JCj{_4iB[~L87 aV@6' );
define( 'NONCE_SALT',       '<XS$<Ag^9`^bsBU;C7j*A$V3:+J0)ajNsq=*b+:iVZLAh2w(6#R3P$-B9#[%G}%?' );

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
