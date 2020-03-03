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
define( 'DB_NAME', 'mysite_db' );

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
define( 'AUTH_KEY',         'Jy gM&m2&K)D|0dn)Bc||Dc5q[$71)YVdS~Jj501IbY{n.}H/%~fTvS$c#Zyk6<e' );
define( 'SECURE_AUTH_KEY',  '@^rc:m=~F[EXBmcd|e8{&e1?Eiqll1T|pwKK>FMvgWMRqit88LDS!hatpE5}wX$K' );
define( 'LOGGED_IN_KEY',    '^ Rw:k_<n oSC*[%Q:jRGutGAPd$Qr2k+*goDWoqTUJ7BC[XfI;QmF(PWO0ISc3!' );
define( 'NONCE_KEY',        'H 2?XVVA,q5hq?4}9(gC@6r,|U2`(g<b>#tX/,nrtKguLibldWksd#c?zmTPH<J5' );
define( 'AUTH_SALT',        '#X0qo^@5KZwiX#PF<wWIZ;OdzyRISe6M`X@q 1pXc#<$2$.Y{95=UV$5Rg-t:4I_' );
define( 'SECURE_AUTH_SALT', 'k7F*4/A12-K,E:P^j5*ov;Z[{-_7<FxZdL]y7!vdR?gBMssdREL8$1W;XKrO!T?~' );
define( 'LOGGED_IN_SALT',   'y[>um^N;NK38*gRg|.5^^UJ9eF(:!{HO{&=Z^K6ZV<:y1aepfr`9@TUVe{0m?lT*' );
define( 'NONCE_SALT',       'B%.Z$Z`L+ ST:;<6>;x3TDeb_CEke2.)R6qv4OI6Q5S873b^Tzood.nSl.)TfW`C' );

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
