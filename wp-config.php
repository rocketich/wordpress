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
define( 'DB_NAME', 'wordpressdemo' );

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
define( 'AUTH_KEY',         'P!8un4<JY:cv7r,@(xMJH3mP/s{,.&B(_lIT(NW[;QwG0v{dUAu-T}3fSA`MC5qn' );
define( 'SECURE_AUTH_KEY',  '*x3&N!.ACF~j.NyGPqx^Kmd0HU9[ v:T&Pk/ZS@*eH9m7-T,0NZ`O`j#bEq=%!w0' );
define( 'LOGGED_IN_KEY',    'K3T!4&~m|}/-:6Fl3Rv4c.)<I##2N*RWf$KIUfpe@&`FEhA=8G5KEUPZpUy*GM7%' );
define( 'NONCE_KEY',        'W~g&/ Bv1#hD/p4b8R-iQA+0qJZ]/rr$$Sozg_aBoD4koB)(^D5S9j,_bhYdHTw7' );
define( 'AUTH_SALT',        'FdU^qFJ>5j(eD5kzLH8MBwC1/Bn@j/]L9_c(E}v+j|s/Wmi1<n,h9Iv&TM~PIgmf' );
define( 'SECURE_AUTH_SALT', 'xdM<q&h36S^U1rS)=GZZZjHuG4&s3.9Zs LqGk!p#hP2rid C:+$D]m6$G>ls5Y*' );
define( 'LOGGED_IN_SALT',   '4Y`>CFxsPdT#ISn{<+{+^`1$+X?ib#T3J2U|_(:+PPcw5&RhT*VA4X*z7:`u(cUt' );
define( 'NONCE_SALT',       'miXl; I<jc++V]cT#$7^7.{)4{RNi|Wu,I;dAJAX[ogi$5PA`JV)ZwXEPjufOX*~' );

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
