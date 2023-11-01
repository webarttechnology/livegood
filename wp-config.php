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
define( 'DB_NAME', 'livegood_db' );

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
define( 'AUTH_KEY',         '$}%g@t;c+Vn$*AJp3])gc9!p]raaxQ=;/Nxl0<(`#tRw&=wg&c*JFwVaHlp:V`bV' );
define( 'SECURE_AUTH_KEY',  '3<Vk^~HNj_-G-#>9OnkHM8hqsap*_d*U$1v`Stp#RjCC`2_C6+Ey-isJ&2<VK-|f' );
define( 'LOGGED_IN_KEY',    '<T.9=)2&1As?WK~V_{Pik$~q3vx .HEPzQR&ZP~9l/cRe^C{vAh)5p:W;l-W*6tB' );
define( 'NONCE_KEY',        'U-7~s y/B_%F;_nkw8T@{!8lYMJlY>G`Oj/]L1}D6s6M[<bRjF12c!QU/7n=J0Xl' );
define( 'AUTH_SALT',        'ZWU>+gNUka7X`m.a[J*$0AZBIaj|>ISae6~RiG&DitP@GT)m(BwM`#BkmfG 2=l9' );
define( 'SECURE_AUTH_SALT', ',1miJjH8FGC2b;Z#,)K/&jME3~g/,Mw.{B$.d1o+W%=pj^`M/`X9bUT1IO-eywAh' );
define( 'LOGGED_IN_SALT',   'AtYRuPhXM1B/G)g&U7] kW|U`EgtqJVl_crOoO7<P[~oF/2ZrH7X(spSS)CghXL4' );
define( 'NONCE_SALT',       '6B,:T#6tIVodp!IRGWTWumIh~@$m?~T7(Ilr.dHcSkTgbg/EpbQ}K$Vnv_-!TZAN' );

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

define('WP_MEMORY_LIMIT', '256M');


/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
