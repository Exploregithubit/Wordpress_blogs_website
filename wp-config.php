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
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'wordpress_db' );

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
define( 'AUTH_KEY',         ',_sFDl9tiJUi5oHN6mfB!!.B`Ak.Nh<[Zl,)!PyqFprV2j]988MdO.xs}@p>O~v$' );
define( 'SECURE_AUTH_KEY',  '*&LHto<gSs-Rq]ghf+0T&#f}A#%(2Ju{L`Ta3AVRL6cMG,>DVQ%qsac lg=6s&=h' );
define( 'LOGGED_IN_KEY',    '`&@_H>LDZK^smhKvM$6X>o5rSG9p[!R{kaaTjnkkr<rw{ QVU?I^k2Tjaw8uwQ.U' );
define( 'NONCE_KEY',        ' [SjZ2!Adaph8m.N&@ZG(^^]_t&b0><1]YQ2?fyZ(D yce}pCP(**]B!?qT7EVg2' );
define( 'AUTH_SALT',        'BS(~f_8)Cl4Vsm%pAE>RA&R=q<[-MDN2w3f@v}UKlP3sThMhrzW NDwF3u953wh)' );
define( 'SECURE_AUTH_SALT', 'VI13cn]KR|AJy@EJxFNKdv4)O3o3cjebD?KPdg*^jW(KvSHyOwmn}@U/~+u%7cM#' );
define( 'LOGGED_IN_SALT',   '$-%]ZPx*k$27%snysX%,CatScjG@Spjc4%+-HBEYlA<7LX%F42jw;;4NyYBp?un$' );
define( 'NONCE_SALT',       'IyX/ c)K}<<QNIgS>~Dpk~v+m~X!%=<ndxk)0^Y_FG~.oNPf4Mf[iv#eA6_9+LM%' );

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
 * @link https://developer.wordpress.org/advanced-administration/debug/debug-wordpress/
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
