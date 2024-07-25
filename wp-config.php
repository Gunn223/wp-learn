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
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'belajar_wp' );

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
define( 'AUTH_KEY',         'CtF<}S&uW@To*o=?~gve@OVE]GI0ZCF#gg$`Sy0Dj<z1ak#*;pAu0NeZZiI)[&X^' );
define( 'SECURE_AUTH_KEY',  'IwPu:1|%Fgl[Y0S+3Bw*wtSy^/TG(QCwE|aQb.BksR}lmD,jUB=[^d4>OQ/QA[JH' );
define( 'LOGGED_IN_KEY',    'zMB/9-(LjA_L%HBI]^xI*-eNrG@QwDcyEKL.a:+vTtALon4!YmX,fhk0zSaa*Y$9' );
define( 'NONCE_KEY',        '1exM<p?3XPQev>ljexL);l0PS=[dU0Ty:n;J3uA#UVPq>xYKBrDg){+p;1lWP.2S' );
define( 'AUTH_SALT',        '?@L+L_~ba=[K~b+-)FnI5Rld3v>*@fL0Wk^]sDk(9Q_n+*u7eYW#-8)3Vck}^K#<' );
define( 'SECURE_AUTH_SALT', 'bz3K`Kw /IWau5bE{};/Bb?jSv/J%__}t#CwU[<%LWLgTG?_JtG3GZYd$ztwm.Gw' );
define( 'LOGGED_IN_SALT',   '5TZ1{Z7A@A0=TnUZz4p$PRcb%NagO;Q@D[s/9gAYEojSM^J1ZK7y$yBW]$0Z;59[' );
define( 'NONCE_SALT',       'lD7=:[(I_d8x*e+Iic*:pPg|,nJ!Xna4SSp,c;X 4azdf0s@|H, +g<t4ip$]ReR' );

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
 * @link https://developer.wordpress.org/advanced-administration/debug/debug-wordpress/
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
