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
define( 'DB_NAME', 'wordpress_ritzwebz' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost:3308' );

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
define( 'AUTH_KEY',         'H7% -mwOjARteLHxg4jpPRc@|nOz^%OtB4:Z Dl|!C1`gsRg5gT5>&%{DcyadJ~q' );
define( 'SECURE_AUTH_KEY',  'OEe<V#j*VocgA8&bN+T%HYBEbqRG#kv{Us(V71P6O=JKF!QJk7nCw9nC#&i<#wS(' );
define( 'LOGGED_IN_KEY',    'toN n_`o{o@l;&}:UUCof#b?0>T^^N4l/cCC<z0J/ah&O14dc;?tHLwAY~/ubDoz' );
define( 'NONCE_KEY',        '4v/rw_2LM.~ZwL(%[d[cXQA}@u.xO*trJCxK3YAt6[lvLd,[BfY6U(VNy?KHnW(m' );
define( 'AUTH_SALT',        'lue}AOJ20V)z~6U>sQ0|?|Ml3W2ux.R_I*o? -WK^tj)( 4dgm]XGGr6bEGd+{BE' );
define( 'SECURE_AUTH_SALT', '!{TL`I^8yX4b2tV.gNsNbNy|C5g_pd`Vl7e8&OeM/a!Dq^Wb3j;R+>}`S+},nQDT' );
define( 'LOGGED_IN_SALT',   'o(5>weT%f=;xOL~%PVhuO~pOP13,Sn[M v~e=6>xxFJ0zx@Le_-IK/r`1lhV@Zw<' );
define( 'NONCE_SALT',       'PfTb6fYu!MzZw^`y},WK3]sW~|N|Z3~!F+_7k@0}}38PYapu0?Gi$OI@ijEU0;y ' );

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
