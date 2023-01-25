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
define( 'DB_NAME', 'cjad_db' );

/** MySQL database username */
define( 'DB_USER', 'cjad' );

/** MySQL database password */
define( 'DB_PASSWORD', 'jad' );

/** MySQL hostname */
define( 'DB_HOST', 'mariadb' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

define( 'WP_ALLOW_REPAIR', true );

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'jinxm%F.&[`[+5a 6asIgOF/w5Bk.8l=o|V%T@j#-|A:FbK=4a-9^[)yz`k+)Eo.');
define('SECURE_AUTH_KEY',  'PUkM0-^phpvVszbr969r9r&Bd?Jz)%q^2=,m/?>#[,b08U:>6R7X||,n1P9epX[t');
define('LOGGED_IN_KEY',    'u?G8^-*@p5(T|I7v9b-+~|[rmp?B.P61y{R*iYr.iA7S=%p;FQZ6C^(,eSqSA?]*');
define('NONCE_KEY',        'u#2Eq_BJ+zLqE{c8.cP/)n.,7[[DjudJ+Ram4`K-q+G6Z?*8DJL>5}/xBt5`w__z');
define('AUTH_SALT',        'UQwwfs--j V>}q|yf%2OYC*-Q8D+`PCO:-_|$v+I{QO6xp;fEU7dL|$w7k`I2r+0');
define('SECURE_AUTH_SALT', 'IQ{J)@G_M-4&w1(:Hk!-hCKi+eeQ,6gn2un+xd2(p:61C:DLS+${H=)99?<$L?4u');
define('LOGGED_IN_SALT',   '6639QK? 3V/)PBA!4c+2Hc)q#@F<xe-q%]yp>([B[Gfq=vAwX,}.e1su;t~7*lHF');
define('NONCE_SALT',       '|@/[}Bj|vqy9(g|6-F#bzE`4[Ec<DdiX2kZRs]+k;rIrU^m-R*m2qi%J;J2tr^Cy');

define( 'WP_REDIS_HOST', 'redis' );
define( 'WP_REDIS_PORT', 6379 );     


define('WP_CACHE', true);

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
define( 'WP_DEBUG', true );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
?>