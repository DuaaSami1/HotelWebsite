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
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'wordpress' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

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
define( 'AUTH_KEY',         'j@uM3v|BV<%,;W{rcMGMZTCj@.PfVto+]IUOM$?uY/RN{gPbdd|Z>;Rwk_c}v#k;' );
define( 'SECURE_AUTH_KEY',  '_mKa.)f[vC@PGk%9Tlf |,-SltPKuYziW<K.DS&b;87}| Wt !Yivzc&n8>wYR:x' );
define( 'LOGGED_IN_KEY',    'aR(,gm&r.DWKu. (Ru`1ZFi>{O.eJLj^z_Bc<=f8uVJ-R:Ne+r@B{XV=w|?2o<hC' );
define( 'NONCE_KEY',        'hQNKu|E?xK~)O$V<Kckljm5aCEO@mGcjggVCrYl >HDKWWq{0~oQI+lhEOXE}jqS' );
define( 'AUTH_SALT',        'h7VcG0zYNDzeEbMY9Lr|.y t9 )]y1?kAYB:C{k)dzNSyGa0pUqL}Nq9rw*2Ju{y' );
define( 'SECURE_AUTH_SALT', '(9Q5P>!kkIB$h)p%Uz5BZB*nsd|N}V%1QRvkGPPr4h1*%)z<Yg@*kzz|D1(Mn!#V' );
define( 'LOGGED_IN_SALT',   'F@nC]`kQ++qy6|;z0TF^D=t2pe|fBdfiQI1t4&A$`Fv^k*SrR5C>T)#3]+:x5o73' );
define( 'NONCE_SALT',       'OnS|;v_+BXxD/e=&Ww/?YS,`*^j-qdZwGN+sT%Aj6.f:P }.FSvhBl^g8@hp`Qi!' );

/**#@-*/

/**
 * WordPress Database Table prefix.
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
 * visit the Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once( ABSPATH . 'wp-settings.php' );
