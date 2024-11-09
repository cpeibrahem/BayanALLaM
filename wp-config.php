<?php
define( 'WP_CACHE', true );
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
define( 'DB_NAME', 'u828479444_OU4YQ' );

/** Database username */
define( 'DB_USER', 'u828479444_ZI2oH' );

/** Database password */
define( 'DB_PASSWORD', 'akgmktpjCX' );

/** Database hostname */
define( 'DB_HOST', '127.0.0.1' );

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
define( 'AUTH_KEY',          '0j)V^,L!R)Ci|DH&]imwU/5z4PS{Gbuyp1g*]v^>^@A{#Wh]sHJ.?!uU<F]a8y)1' );
define( 'SECURE_AUTH_KEY',   '1G$0UzJegD]`jNwXEwuQ`,O*tvnYE@~V{#aZTWj6h{$BonHJBr?nb{9ELPus~hV.' );
define( 'LOGGED_IN_KEY',     'ED,=l7t?l,QCf%5Of*!Z2AN;k?(fm=z{e?KtM0&w<-W{uOQdI=}boPx&6:Z(hG%-' );
define( 'NONCE_KEY',         'V-.nqfS9huUaX~Le1 [&r2Z*Q/R,9]vV;Td?[0s}>-o%*T$:iy[eRQyShD1wqel0' );
define( 'AUTH_SALT',         'Q:z|%t.s1}+(2]D*qaFl<.>mJy!u{|O;nu:/#v^@BrY%.g83h,`}On+CFj!=9zWJ' );
define( 'SECURE_AUTH_SALT',  '[NJ8d2}>M_P`hMwWQ4Rq~=XE&mw^oV9@I34#2k5T%O$XL)HG?lU8]t%&_pbeRXsM' );
define( 'LOGGED_IN_SALT',    '_o7E<*+-EBI5P@{Gr40<aJ[w;<~@nGuNTLa(hcbEY7ShYZfdh^Ql3rqT^oi32!_Z' );
define( 'NONCE_SALT',        '$t;S({q4]FMp)<?LgUgRFw/ UjzhX|P*6QVWU1rN/R0 APsH4[+o`GSsFPLj([KS' );
define( 'WP_CACHE_KEY_SALT', '`g(-8pGr41~,>h!a+_v%C(Fm`%PE+*VCvy:XTgXMzl_GI7JL#5$0xU.{BIBYL:hC' );


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

define( 'FS_METHOD', 'direct' );
define( 'COOKIEHASH', '025180bf8b47b13a1752b7d69e2d0de7' );
define( 'WP_AUTO_UPDATE_CORE', 'minor' );
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
