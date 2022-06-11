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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'wp-blog' );

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
define( 'AUTH_KEY',         'I1#J_:VJDYC5iB.EaXDTJX4TJ<CwNfLx{@~{?BzogiSFYg>pnES]_Ke&F#x2Vx{0' );
define( 'SECURE_AUTH_KEY',  'H.Et4*u:[11XSS|:2b@qqG{g-bp2!~dy-~B{YM,hd&Vxl.EEuV.J;l]|Z-#f!RK^' );
define( 'LOGGED_IN_KEY',    '_BeKZyfNBK_Y^FQ`=x{#4PG4Fnz3WyMd<jpEO4B=rD=a6C7|TiH&R-}}oq<JRHnP' );
define( 'NONCE_KEY',        'j:RLoIX,|s=PlhJhk97p&_)+Ld]sKs>eD+a+/afZ_$lu,!whM]E]Gx(nG&>yQqg)' );
define( 'AUTH_SALT',        '6<k@QRIz.4S9R?qy#UHa3-04FBO],e=/D~Z,]qk-R<$8|ES& v)453L-q|gFDzTG' );
define( 'SECURE_AUTH_SALT', '=CHr!Tn{W> Wbk>DCPUwELerOp oZ@ jM>A9<( czo hZJd,mug_YTFoP?^zz*rL' );
define( 'LOGGED_IN_SALT',   'BFx0xr)M1D)Rl%9<Bd]1R7ES jV8b-Z caNGwe.dL,t!nfMNQkY8R~2ed77K]R0)' );
define( 'NONCE_SALT',       'q=$EInf,G^5yy3(0[UM,eM{i5X]k[rdv#sD1k}{IUQ^FeNTJI5!-eU/0XeS3HvCn' );

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
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
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
