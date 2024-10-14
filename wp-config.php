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
 * * Localized language
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'wordpress' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', '123' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

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
define( 'AUTH_KEY',          '7jR_D%]/$tUR!7hF|^D:qL/gaee;(oast~t At}h^uYDej29MjE3YRBFF<8_<AFv' );
define( 'SECURE_AUTH_KEY',   '$_*b<8tywlC(VcuVzTgv0,7qd20$w9=dx;w;fo!RH+nq2,b((s&v7=wM;&QNVz0+' );
define( 'LOGGED_IN_KEY',     'I+6+n5/w,,;mqxcS|Y?eVd1(Dn9evp?t-+Y/r6A#@I5E^|NHolN]/Qr60L*s-E}K' );
define( 'NONCE_KEY',         'rm|F2u>B.d^}Y86:#gc1I:5z*/a%S$|79%cUoh8i(CDs57u>#JXlGfJmSjUGN ST' );
define( 'AUTH_SALT',         '5L/I`!&b2p@,n]5:-z[efVnJ3FF&*2^d3pma5kQGeBTWe<1rymun/O,Nghld[mxQ' );
define( 'SECURE_AUTH_SALT',  'sQ $C!,~bv) :})L;z~FOxW>|<[$[)c.ARXvK_&&cc+VU;0 <_0R&N1n@v<R]!8C' );
define( 'LOGGED_IN_SALT',    'HE=onil9-.Q mf,p^S;0OXhe7eMoA-a}Xe}+cRhQ;+uS#<wd*l3X!ZFEdL0*Zisv' );
define( 'NONCE_SALT',        '$)(HPjf[}4(nF|dw!M2.2~ZXm#izQ`@_Y%l$+uwrPpp6U81Hh$tqzFu5qc%y{7Xt' );
define( 'WP_CACHE_KEY_SALT', '_tWWJb[]Sow_|pZ}+}0OIB+7nF#6[U4F)h~mnx[k]IO J>F(W#|Xn:b2daTjy.h|' );


/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';


/* Add any custom values between this line and the "stop editing" line. */



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
if ( ! defined( 'WP_DEBUG' ) ) {
	define( 'WP_DEBUG', false );
}

define( 'WP_ENVIRONMENT_TYPE', 'local' );
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
