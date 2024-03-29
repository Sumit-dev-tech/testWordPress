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
define( 'DB_NAME', 'testwordpress_db' );

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
define( 'AUTH_KEY',         '*&IfzSjA+vcac2z>~ b$`wa^$b;I<v9z+hgvt+7#lD43yu<_d,xGQ$UEEa@D%q&H' );
define( 'SECURE_AUTH_KEY',  'm=(8yE~=sc ]Ha*4L&iTH<A8%/*@o50~=YEQG4uChgpPt@J.H$j:W_(l/l~SyzY@' );
define( 'LOGGED_IN_KEY',    '8IH;4R*nY[ZE131Emw=ylk0&x}OG_qw).gmv}98n2(}=3_lR*Xu=ara:gM#:7C^D' );
define( 'NONCE_KEY',        'pc4K*(k?S}r7-NgC+a}>S 4SQ2H$l9l#t@zT<FhZMOLVr<k|Vj#iegLk2w^`9I2c' );
define( 'AUTH_SALT',        'P4whX8*H/nt,l>U4+tY]kMhI|(|wE(TFAuvr9YX](ACyQ<%!<OseqwNKB8oTK+4:' );
define( 'SECURE_AUTH_SALT', 'vKkC-!({k%yIB}sVCmDT!G?ybMudjw-D9,LEZ)%K%9#RT<g~_Jl+G_w~H-(HWNIX' );
define( 'LOGGED_IN_SALT',   '6~]2Tg)b~G1A_O5 RYrTY8%Dw5aYk~Mt1-*J[:~<M>$Ce.PeG*7Dc#do39r>0oFk' );
define( 'NONCE_SALT',       'R}v VW;cl=XN`m(=`^x~e~<,u~%? s=c[U*FJWHz}$lIvx)%*EhG.=!zR9&Mod33' );

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
