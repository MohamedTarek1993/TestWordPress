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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'testwordpress' );

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
define( 'AUTH_KEY',         'qZ~n~E#QNm/WL#(8)Eq+4|D>Nu.R}N0T0.C*,3Udu%DZq{A!Sb;EiwTYc,%f;Ea_' );
define( 'SECURE_AUTH_KEY',  'Klxsc)#MEz7kDo5kr,`NXhJ2<zoejjj9bzxv3{2|B&-L.)Ae&^^|Y5(Zf?s]|h*i' );
define( 'LOGGED_IN_KEY',    '-_n3ilPq-d(aBm!gPA5v+3fI3f+e*0y]grc0yY~f?LIbS-bvsLy pFtB74+(N>?d' );
define( 'NONCE_KEY',        '5L=(yPREoja2Iq8=}6cc>))CPRPJw.!4VGju]qfU[8>L6TnMjH2R7 xCOzk$kyL/' );
define( 'AUTH_SALT',        '.Gw5N|$)a#tO;$`gwd^:.TJ9#I^k|0+Bp@O{M<6_|>rj&(KqqY<<D|H|h?S9MjO`' );
define( 'SECURE_AUTH_SALT', '}!VU+eLfE tAJThk(w&XZ&Mp-:>>!TH{[b$Cu,7[a^FWUHSeFuEQRvy[QWs!Ly0V' );
define( 'LOGGED_IN_SALT',   'V|e8Do*_(}]v*Am_`udhB&F/#/}&%hr9KYQE[w|NNYRH$G5]#,~1v0XUsKtX)GdC' );
define( 'NONCE_SALT',       '_amD $k1f`y&+w,JDRFR[ =Opp.6zb&,X)O>T%}!CQM>>Ct!fJVxZW9b[4/Uon8^' );

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
