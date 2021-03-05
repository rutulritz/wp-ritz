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
define( 'DB_NAME', 'rsw_staging' );

/** MySQL database username */
define( 'DB_USER', 'rsw_user' );

/** MySQL database password */
define( 'DB_PASSWORD', '3Xnxz4$0' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost:3306' );

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
define( 'AUTH_KEY',         'Z;k-n_~ra3Y-Mlgxg33P#X;$Y`p&~-cH;0sEyoTdW9Tr-{DHAyWpn_8z-p^XADNr' );
define( 'SECURE_AUTH_KEY',  'FZXh.}/Hrw~S2 68@bPjAdB8@wcfU+RY#+Y_~AysOE-bV)4c7=PsG^|#Na,cQn[f' );
define( 'LOGGED_IN_KEY',    'pB_#I-h%Qv^quJoW,<Ja}/B1abPoLwm`eJ0ZDO(nTfUMS2aEP,Rn%Sb{qhUA&&1B' );
define( 'NONCE_KEY',        '?v}%o1B]Wk)[ONw2-*:?(#/.e9(S),4xr8aBuP?jiGc{)u@<wOK:;d[k|YKuX@-$' );
define( 'AUTH_SALT',        'g$=k2Xai>5xvQ:aD2#J#-U6`lM$@*u{xWW*0}TE@`p7:!}4V}6cpGiA*JVp$4wAp' );
define( 'SECURE_AUTH_SALT', 'ON;R16<tbM1Lc=k-Qpv;: wNi1<4bwRbn~,3X#lAxz%8XjT`C/`)F5us%Jr+R|Kw' );
define( 'LOGGED_IN_SALT',   ':X}:oY,V5pEOZ ;T {wBv{MW)%Q^:@?&Y/SWCM@Z4L%;a?y#L|Fj}W^(_d&u$.u,' );
define( 'NONCE_SALT',       'lzWTm,9&|Ip2c/-^7YwxivntJ&&$HaR(B<Pt6y<;1wTR7 ]w#.X8&G?NqRteM~-p' );

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'rsw_';

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

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
