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
define( 'DB_NAME', 'growmodo_db' );

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
define( 'AUTH_KEY',         'uZD=>{NyQ4~yI|.-<:tAtG,5#]>xkpfle;+*7JD{){HxoK. 8ws3XM;E/$*!.RAc' );
define( 'SECURE_AUTH_KEY',  '.YKY|@t]H.GQMx1LYsKb(@IE=!w&(lZ$@w0gk0,z!MkwO[)Aj4/#N R7I6h)5Py,' );
define( 'LOGGED_IN_KEY',    'U ?y) =o-ol!Z,BtSqs}cHKVNCUPFueShQ.#3gHK  dA#KUHn{MJ3,7:;<l}{w<~' );
define( 'NONCE_KEY',        'Bz%V3PEs0`Fven-wTw>gL@2jchsDbrN &Y`$GB=h3kPo,8<oGCzSi4y,b[Q{GCVl' );
define( 'AUTH_SALT',        '7WuV<5wCrjqj~xm#TJIKic;uTRE%gJ_e*T>Sau|D|:mr;+9LG|Hc:!kV2B[&xX8s' );
define( 'SECURE_AUTH_SALT', '@>7}RE`Aca;XN%]q>G.l:>h-XP/STCyO:!dPmB!qPO+&bJLQ;Of_$sSa5*{FG%{[' );
define( 'LOGGED_IN_SALT',   'F4vHIfrhlPwYHUA7{E3^&[Py4nt-JNwoL4[~*dbHVTB^SErNCY>BmJVX+Q$ZR#UR' );
define( 'NONCE_SALT',       'FFN?QD@;sUdDT8qRCWvV^2P*z#aO1uJ416h4*h95Mf$M.y=c@gc,U2}T-p>_5Cah' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 *
 * At the installation time, database tables are created with the specified prefix.
 * Changing this value after WordPress is installed will make your site think
 * it has not been installed.
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/#table-prefix
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
