<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the website, you can copy this file to "wp-config.php"
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
define( 'DB_NAME', 'newDatabase' );

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
define( 'AUTH_KEY',         '|;vqdoj[k!|c&/?VOh{pp/7L:w|uK)xAQa<?^>*j:R!_!~ym6 qpN/sTYs-v|Ctw' );
define( 'SECURE_AUTH_KEY',  '3r*tf>Jf6sGy]0pM|{I- Yp/C/bkoEBO,W]6^a|Y ~A0##>3BKpIrR|._;u=nJ$2' );
define( 'LOGGED_IN_KEY',    'yfKND0[ntX= 3|0>,9nXhE/7 UGIUCRwE~,^rx69/H)zNz8+(,Qn3>]MtFE-Ty$&' );
define( 'NONCE_KEY',        'MYvOuJN1(:yobB|>J|;%{7]wc^q&#.YnwPV@Faa,J>W+-}BQKbc]+mB0iER]B9CA' );
define( 'AUTH_SALT',        'f,_6PzbRU3YY]Kwvc,d`vo@zbw?r#rpU0#2TYisto{z&l#}w=i9&.33?5!C?v4mW' );
define( 'SECURE_AUTH_SALT', 'YnyC9;@W>;el!?7mich[CgUidTECj)<E9R7/lMT-Z_QwFdF37UB2ng,^4>83NokP' );
define( 'LOGGED_IN_SALT',   'Co0*;N*N~jAJISYtG)R3]9?|%t#Xsy,Y9/K!K%:h9TK+pB7](H[L2q%NN*XXcQ#O' );
define( 'NONCE_SALT',       'YWh^/9gBd4cQZXUpe}oGqj9mZ6Mf^PDg.LM( 5V>^cnp[:(x,Z:dKtFkfT`^p3s:' );

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
