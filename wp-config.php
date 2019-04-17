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
define( 'DB_NAME', 'stardew' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', 'root' );

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
define( 'AUTH_KEY',         'b?/r;Yn58j0RX`E#?NP-YPEN/0V!)8 ,>*e]T*2swCtK&$r?o[p*M<r 5[vIb$8;' );
define( 'SECURE_AUTH_KEY',  '`KrFc.c_Fx6CH=:iJ,eNX9G-XS7 /q_/KWgapU1[BJ=Tj3hGE=UAr3X.[{tQ{uJ`' );
define( 'LOGGED_IN_KEY',    '`CY4F|Gt?2{)Bx7Fzm@K]6A6-D*qBXiil5N.8sO7v|MT$>>[y,sgb2sWiZ{|k3~:' );
define( 'NONCE_KEY',        'j3=8y@B>gDvrhN, v.t?J]pie!!n^hI69}bWj./p<CBNY0&rko_m[f#IBkrj)]t=' );
define( 'AUTH_SALT',        '&a6TV?x}b#+*ke18^~VRwTW&geoQ%z]J@5$$Zy%?,<3biKOKua*L4/V7T{P>|wqy' );
define( 'SECURE_AUTH_SALT', 'TF HcY/5KLz`pyI?I/pJi T&=jSP:S{2IAqp)Yn]hw[@Ll*&j%[&ByxU_7,BS`aV' );
define( 'LOGGED_IN_SALT',   'n,Itx#~i3zYl6nSTMj>0UdpnCKk+*[a,PX.?s[b_Z)2o$_5:&_FoBKv Ir0F?jHq' );
define( 'NONCE_SALT',       'lJ0j:bWmU_=(u*sy,#[4$ncgWAFgES/~~l]zMu*T=f$Nw#%Op{a$z}boUW@P($_x' );

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
