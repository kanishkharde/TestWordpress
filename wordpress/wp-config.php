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
define( 'AUTH_KEY',         '3s :IYOtL}/3lC*qIVU<x/chGiu>z;tzKiYJ,H{tItB>VV@+/olnnf5fsD]NF:OO' );
define( 'SECURE_AUTH_KEY',  '2l!e8ihwfXM=X/=~M4DY3OKtdjcFX7kI4<4h1=sHLJc)QD;#VX:rc[Wosv}[X/sh' );
define( 'LOGGED_IN_KEY',    'm9#qZ4>tK[j;aJ KVkn6USS#l*E#.8G/iqIHEcN.B5bgVfl0fKDOhH=_H#13LYTT' );
define( 'NONCE_KEY',        'lN/S)Af1UpR>$_ BWAq=-I9?~dRT;1;5J0d)(/U/Fn(eor]VyTl|)OLG W`n42$[' );
define( 'AUTH_SALT',        'Jv@06.10hP{n=E~t%hM[~&4`gC@rv9 41Cjh_-[29C+)W@)l<xZu9me|BL`zp!(T' );
define( 'SECURE_AUTH_SALT', 'V?-ae}^Mzo#=@2uc9YK9RiTzzJVZlkQxt,@eh[Vk:0*z[{cOvJ+@fMm%M2mdU8,p' );
define( 'LOGGED_IN_SALT',   'v!x)2B3E7wOS[!])4!U&n)}2@_ZBJ4n|Oxoi0.,~~u`v1_Vo?6tmz,mDAtbb!0YA' );
define( 'NONCE_SALT',       '>WU9 o&{Lxow5ohCosrWp@rbtHT>OZMOyVQlg!Tqv::nN8jn|>g(]</nt![>x8v@' );

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
