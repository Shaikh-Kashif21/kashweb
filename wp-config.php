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
define( 'DB_NAME', 'wordpress' );

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
define( 'AUTH_KEY',         '0+W>*sxBNFDRtG*Nl6D_kl*~&BMpaay7xR|t8|BY%_3?h^T=BI9ZQNHnLieh5Vgj' );
define( 'SECURE_AUTH_KEY',  't>1`ML(6^VYVDd%)RKKQT(,6,m^c1VcV*oG/dA/ka,Mz7m~,@?5GGvoFGg6GdY`s' );
define( 'LOGGED_IN_KEY',    'g2US|5hj<HEH>]UB(O>7]=_`loEpO6? X5aHcCW{.xEe0PLQ1R)b?t~g)rc!vH.}' );
define( 'NONCE_KEY',        '7gJ7~I54 oYau+=4IU$@9H&g[wF,6zR(J#tKlHrMIdUVtT<_P_;Ezz^N<>M=0Tp|' );
define( 'AUTH_SALT',        'Uc:-tI;i!(n5:-JU!D4bP4q|Uz<kn$cOJ56tD=XdGd=4~a;(+.0%ia9:LhWr,1[k' );
define( 'SECURE_AUTH_SALT', 'ah9gG-V#1er/0 yZS!xNuYpz%?;,zYeuCOh;@!GF%kNtAwC%H%.W]}yM+pz27*~[' );
define( 'LOGGED_IN_SALT',   '@=^A7}/#h9&ms}Q0~AOF/<tQVE3]zs<eUZo*Z~6+{rZHCl*_4c*0i7jl[RckN9pF' );
define( 'NONCE_SALT',       ' <Uc2r*!cUWM 3&mFB!v/tl|KHqH<b.c@_jQYPpNATz1y~mb%bgp.dJq@G2 uP:W' );

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
