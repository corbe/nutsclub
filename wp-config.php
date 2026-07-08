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
define( 'DB_NAME', getenv('WORDPRESS_DB_NAME') ?: 'wordpress' );

/** Database username */
define( 'DB_USER', getenv('WORDPRESS_DB_USER') ?: 'wpuser' );

/** Database password */
define( 'DB_PASSWORD', getenv('WORDPRESS_DB_PASSWORD') ?: 'wppass' );

/** Database hostname */
define( 'DB_HOST', getenv('WORDPRESS_DB_HOST') ?: '127.0.0.1:3307' );

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
define( 'AUTH_KEY',          'MIpo}9I!Oi/Y}_)(mNO!5t~A#5^F>o>FTcB{s-Uquo!_Nr8Ay-%^5v|@]BWRr2pS' );
define( 'SECURE_AUTH_KEY',   '*slaW_0kL6468Swl^Gh;v#WV1kCPX6.0{feX&E0{^-/=4f|T[yS:6gjkhXr/qdie' );
define( 'LOGGED_IN_KEY',     'RObNoIPX$|qXZlh [G5_Pj/1)xK{3krX7:nCb{(F?j<5vm1 2B>)8Ut<1;_eTs):' );
define( 'NONCE_KEY',         '^E~%R9,}v#]$a@oNXK;l#:|`^LK$^WbqVEATAK6b*)z <vI&VCZ)5xX5OBiIc$3a' );
define( 'AUTH_SALT',         '?J1oWI+wk*@/ijeQ^.@[j!u8a9Wr3-FdXvj7AX9A~#)k}4yDDFm 60xhh?zKR ]+' );
define( 'SECURE_AUTH_SALT',  ',*|?EnuTw .w/xF>uZkPCwEd5LZx+>??VNwPWuu TZ|c3Miq6=Qp*t2GK&P;TPik' );
define( 'LOGGED_IN_SALT',    'EkAoY9QuQ{w!6G$vOJJ2:Mp-^E/|&0uG^p|DX#i`x6L@U(8H.ZbQ?Iy7{* @0&^p' );
define( 'NONCE_SALT',        '[ZdO@ed@b`Tn8n[:b. x-[78R:Y_]*[uEA_qOdS{R4ID}NTx}Q|l)7|;Kgxcw^% ' );
define( 'WP_CACHE_KEY_SALT', ')!_hqli2U.-wr}qgZ9;TGSZX~EFmdM=V&A48@|XSs|_2h85F`]Z/7~? J9`*O8bk' );


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

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
