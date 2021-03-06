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
define( 'DB_NAME', 'sodicam' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
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
define( 'AUTH_KEY',         '^eORgH6meEDyl]rD8S siqJu2|)qYD@/[^P[j:xpH&GPCe^|/9V$.t:h8v7u f+n' );
define( 'SECURE_AUTH_KEY',  ')  f|c>kXQ?;B*3A[fHfEb[+dl 5VD2M!T>PZB5*7grf6}`6yySnw>GXo&HLv9[[' );
define( 'LOGGED_IN_KEY',    'ti}6j+Le:0Gh U(~f]8gc.$?9{v81|h_-acwKeAWxTm*RjZD.ShqC/W>x[I;KWVm' );
define( 'NONCE_KEY',        '}wW!QM%>PC{RN%b(ObLLF-a|%e=eaAs3s&20{G%%8nGvH)_!=eRf/FK7k3L#&~=_' );
define( 'AUTH_SALT',        '$)$XG>$;j@HWwC=<;8i){t-Nz8JC@>aY|q&;ewA9IvSKP[m<77bod^`1qFO%<v_c' );
define( 'SECURE_AUTH_SALT', ';Vmg_QG#NOjXSXFW<BtL^CWsRRiG>N,w7vU4j^3-LY60G|&gCPg3FZ.H!NL HsHv' );
define( 'LOGGED_IN_SALT',   'w~?$$:4^6@(vx|^D~+;e[NJz012R[YP{Dn/2|MINW)m.5sN.+Uu 2Za*QTE77T%E' );
define( 'NONCE_SALT',       'lpb_&^BIa?!NT~]$y;k?~eL3{H=8d?bIm8laU5Ol,b:#|8P}d<WQR&{DBk0E; _l' );

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

/* Multisite */
define( 'WP_ALLOW_MULTISITE', true );

define( 'MULTISITE', true );
define( 'SUBDOMAIN_INSTALL', false );
define( 'DOMAIN_CURRENT_SITE', '127.0.0.1' );
define( 'PATH_CURRENT_SITE', '/sodicam/wordpress/' );
define( 'SITE_ID_CURRENT_SITE', 1 );
define( 'BLOG_ID_CURRENT_SITE', 1 );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
