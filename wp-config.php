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
define( 'AUTH_KEY',         'MSrz9^nc-9kYNZB5zGSv-ox8*@=]Iq!Q2z=CA3|2re$eO=3{PPs]= T6^vuu_$#M' );
define( 'SECURE_AUTH_KEY',  'W|PDUDU:nH.g?cXaL|!C]t+vxydk5&46>aDR__~<*-/Fmpzj,`>50)5&},XE3Sws' );
define( 'LOGGED_IN_KEY',    ')JV%k@PImkDOy.-;8g=f|!=|ii@5c IOq,(Vn/q}_1c,6MZ$NM^JWZQ __!Q7L$S' );
define( 'NONCE_KEY',        '/:G{LHjH6%Pz ,LY:cN:?}NhgR/Xw_]/?-NCMf~yDvvaK]MVV5%{1FggS26PV4CB' );
define( 'AUTH_SALT',        '6+M9YvpQ7#toS+mRud]=0ZjooUy$UrsX%+^]~Z/FF/6RE@*A~Dx9y~Q 5V8#-.)H' );
define( 'SECURE_AUTH_SALT', 'rj=$5[B!UHeN5/WhKPDoLM`eo$5/Ok?yqC;WGcCr).H$aJ<rOcbh@CMNh%d6HN[e' );
define( 'LOGGED_IN_SALT',   '-(Az!F1{=ygCW-MT>$YN?qdc}I+blQlG6P;QPztqjm>lF1}c(e<hV?{lr&!uyd46' );
define( 'NONCE_SALT',       'hAY-UU$| ():lPvUzsJ@p4D|Q^pQXCVc%[%@((9I9K-Sc`qJLLUG/bOtfl.xeUG^' );

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
