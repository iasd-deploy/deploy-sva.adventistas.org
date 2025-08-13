<?php

//Begin Really Simple SSL session cookie settings
@ini_set('session.cookie_httponly', true);
@ini_set('session.cookie_secure', true);
@ini_set('session.use_only_cookies', true);
//END Really Simple SSL

/**
 * The base configuration for WordPress - LOCAL DEVELOPMENT
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
define( 'DB_NAME', 'sva');

/** MySQL database username */
define( 'DB_USER', 'root');

/** MySQL database password */
define( 'DB_PASSWORD', 'root');

/** MySQL hostname */
define( 'DB_HOST', 'localhost:/Applications/MAMP/tmp/mysql/mysql.sock');

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

// S3 Settings - Commented out for local development
// define( 'AS3CF_SETTINGS', serialize( array(
// 	'provider' => 'aws',
// 	'access-key-id' => 'your_local_key',
// 	'secret-access-key' => 'your_local_secret',
// 	'bucket' => 'your_local_bucket',
// 	'enable-delivery-domain' => true,
// 	'delivery-domain' => 'files.adventistas.org'
// ) ) );

define( 'FORCE_SSL', true );
define( 'FORCE_SSL_ADMIN',true );
$_SERVER['HTTPS']='on';

/**
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',          '`Vx:h|veSHrn#!xB3|0l4y)bR;CY&}Q bLl/>]D]]Xc]HBP:?6A:OOX)*g=,-leu' );
define( 'SECURE_AUTH_KEY',   'm7Ush%WJt)Dd{Z4K];Lxzi{_aE}B,MlrZE7CVb^2;TYkTNzeM]8f8E!w|X0^h-&P' );
define( 'LOGGED_IN_KEY',     '0(60oxw*-;TDnYhP[*.M:r6jSYZ$mMUJ7hQ.a*w.^y<@>Me,,&C?K2L^=i8,Yw}E' );
define( 'NONCE_KEY',         'JUaG= vYj$|e2R;~w>M-L?2AqF:UXG+8L<F1jw?a]ul8s5}#%Rq+3Z{CQ|Q<X|Aa' );
define( 'AUTH_SALT',         'C.hvw6t0cWul2KeIP7M[O*w 8,7BfWlNBK`g09Y*~qzB;;lxKyFUmKh-D%@}SF7X' );
define( 'SECURE_AUTH_SALT',  'eR%@@H&:;)@_vOp-vQ)brSKitSOR~#{5VEVd~ FesM^j0Y5u@T8i/lyN-Idc7=<O' );
define( 'LOGGED_IN_SALT',    'HU/qZqzD8te/v4t}qr}B}+:-YpN}zR!GCa!U^NIIa(g].o:?2a3DuN/Oe TkWu%1' );
define( 'NONCE_SALT',        '/83$jb;p1 5_Ir MR-<d Y }{rXD*d(EohZ.02x-pV()pjaVBacoKQjG uF=P0hO' );
define( 'WP_CACHE_KEY_SALT', '&=u[V+XPez%Tl6Z4%3Wkt@JrggvZzHLeB|L>lrbo}m09.;*3PG^&pPgja!4Oq}CI' );

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';
define( 'WP_SITEURL', 'https://sva.adventistas.org/' );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname(__FILE__) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
