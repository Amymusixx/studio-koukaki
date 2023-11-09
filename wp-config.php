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
define( 'DB_NAME', 'studio-koukaki' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'root' );

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
define( 'AUTH_KEY',         'wnrA%ymyvu/:l^~hD}O&i#dT PLL)w,7Ey*%C5>(59<OhL/LCDeWR9PasC):OkXk' );
define( 'SECURE_AUTH_KEY',  'Mv&00mYdDMVPC+u5JT>n]ZFpFpj-sC*Noe+mo,P#=YGprf.6B/oN#FC05(R/Bqr;' );
define( 'LOGGED_IN_KEY',    'DIyr$_({wo:m)F[w~+E572o20B]`xCb*q$:XnC-Y{}}K)hLkAxO!W!&Bosj{fc5F' );
define( 'NONCE_KEY',        'Z*z`<F,T#ZZ750=g4j<qut%{#~d[(VwL2%NP?$0HLg/8yKqQx&(s9&.VZ0IBSv~S' );
define( 'AUTH_SALT',        'o9y-,g8cr*Ui^|IhCScLc|5##./f?zE<Iw*I9-RT4%PcSDcGLV7x K1dkdAD PJk' );
define( 'SECURE_AUTH_SALT', 'jG1GD,Vs:R+{5g[,kSyC-ooO=c/e@.T<0rqmefuVk<Ki )3Mbhh:iHFbMcdXCH[<' );
define( 'LOGGED_IN_SALT',   ']Qv97RifPp!Vqu.3d MXOTc0,!@E%>e^ToI)8& }Qv{Aw!N.,n6;~rPhdmw|Y?W<' );
define( 'NONCE_SALT',       'I7BU2Z{^c!+}OD@VG-Sts.]@d$Uz;hoo8DmP5wFk}%u5]Nk#{jsXP~;-uNlm0u)N' );

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
