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
define( 'DB_NAME', 'estudio' );

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
define( 'AUTH_KEY',         'uH8y9<|oZ,tORG*AmFU)&M7l/XKxh<W|G)?M^[dX~,iCD]xxgof<-BN^t;KeU7,F' );
define( 'SECURE_AUTH_KEY',  'CryoZp)`!)`n{d^Gw/iIs&GlHnNiGeX`Mn^p@3BMkk]V$]+B!J#atEuZ%,cjs%Vw' );
define( 'LOGGED_IN_KEY',    'EfBB^b*ZA~N+bM#Rf?c*`4Z;s#Zp.]~}8Xsv1m=w0JOi|G.5ay#PnQgx#=b) IBE' );
define( 'NONCE_KEY',        '0H5GE?Giohhohb#o?UPWXG3nu%^eu7#b/,^8U5[b,CkTo1Hc1s!2,Q#U=?RNwlY|' );
define( 'AUTH_SALT',        'aDDc{-89Dm ;-lG/[j~^p.*%W{3H>s&cHitBy[82:JE8?ex$,CA}OP*rrX0m=EHC' );
define( 'SECURE_AUTH_SALT', '^|~WV> ? ^k?U.a<J=:o[,~9B)ZDP=8{<6kwCXA)|6u1~,dKzKdvd!^!rdtaZN{x' );
define( 'LOGGED_IN_SALT',   'd!: ?b*3v#idxIX?WgV[3_18~LmMP5&-u72mTfD0A@T_31Yr0R4&SFi)hkZC7}st' );
define( 'NONCE_SALT',       'G1cfK?g(0g0cDmxW!KjG3TBs7agaL5**T=1DZ)oVxjw=U[]iA=137IwiAENox`TX' );

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
