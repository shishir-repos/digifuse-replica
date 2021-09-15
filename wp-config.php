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
define( 'DB_NAME', 'digifuse' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
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
define( 'AUTH_KEY',         'F-e#KTX^?xwu0sC 6 $0EBkRD{ZnL!36e:Yy-GKMtq#y0S~I2BTtHNSJAq:EcBTy' );
define( 'SECURE_AUTH_KEY',  'Ae6jIx1GNl L<YuB1J3<wE+@:jud/pJ7{4`E++bIQ]Bx!gXJ:j $s|O{9}fc3KvJ' );
define( 'LOGGED_IN_KEY',    '%u>ugQj@nM#ROgPRxq.,-{@m0?+|^=G~C3?EI]3p/C[I4m?Srzii5WHde6Sz0yZa' );
define( 'NONCE_KEY',        '=i~Y!f+7TpR?}$D|)yRM!mH(/8|H1~l!/BR@T$*F`#;Q/7ZMP9-{~GfaE|+wncCm' );
define( 'AUTH_SALT',        'e,*&s.uIIo0(l|0YQ%q3dI@-EM^pnR?iYIC_@]KT;q*aYurBwoJJW$:UT~uD+E6z' );
define( 'SECURE_AUTH_SALT', '1b<A$nXU#JhDdl(>WOCly3^jR.W;*W%_Hews*^o>n_8Q?6Y<?FyK:{z:8u/IN3lG' );
define( 'LOGGED_IN_SALT',   '+.{2M*SjeH7g$[cW=T%^[E2nk0#Ch,L;ICy5A+_zBi&9Q3cKbvjxd }lxXy_fx:B' );
define( 'NONCE_SALT',       'CaCq=fAb=zmG$+A^x!-^g$5>G;Sq]NpAx(`7[?[?IfX0tVb`Au}1,HW.30UH$7f3' );

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
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
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
