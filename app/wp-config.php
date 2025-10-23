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
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

$_SERVER['HTTPS'] = 'on';
// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', $_ENV['WP_DB_NAME']);

/** MySQL database username */
define( 'DB_USER', $_ENV['WP_DB_USER']);

/** MySQL database password */
define( 'DB_PASSWORD', $_ENV['WP_DB_PASSWORD']);

/** MySQL hostname */
define( 'DB_HOST', $_ENV['WP_DB_HOST'] . ':3306');

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
define( 'AUTH_KEY',         'f;8:6&Liqo:^V(86<y]L[Id=I~)YZ@IQl1QSXTTuPHL^Ds6sYAM<!B>u{5 _eT.S' );
define( 'SECURE_AUTH_KEY',  '@F!;WRNcV5wV.GU>SYdEV!3;_`r4p}iV}_CWE;mStP?r)<`&4.RvT-9(n]4lmOtb' );
define( 'LOGGED_IN_KEY',    '~2[Ob(N~Oj^v7Sesnfo,(Y8?3iUU!tt<P3,sNYdjgBi3/?0a0vJEoBC(T!WQ+lxv' );
define( 'NONCE_KEY',        'hcp)FFN:=uE;6f<2n_p}CFY_XR p8|x`NwZk$&Ng:Sz ;f~zeOlB5GUahDwK9yC?' );
define( 'AUTH_SALT',        'P.ph1yTU/Xm*]YBHh5} |%s2z+N,<LRGR)#b$VxZ!xLZZ(`3*E8E:cf 84c4#6$0' );
define( 'SECURE_AUTH_SALT', '6/Ve#i_I){8G(9KH|G-bz<kHZz9EfkKt:2ChGJQ)};Ed4Zx^lQ$O/h=0TS]Mal,4' );
define( 'LOGGED_IN_SALT',   '9]y.gx}4wnSLmInoy~8g.-ydE}i<z.m|GOTA?1)<E*hfM2.OkV]Um?C.9~Hq_ZhI' );
define( 'NONCE_SALT',       'omGkL9YXh#)v!Nz-Hd*5{+g,!a0q$uu!}`R{My[|vrH*yjj|~*ATLlhzt.5v>{l,' );

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
