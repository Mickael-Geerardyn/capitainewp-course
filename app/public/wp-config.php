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
 * * Localized language
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
//define( 'DB_NAME', 'local' );

/** Database username */
//define( 'DB_USER', 'root' );

/** Database password */
//define( 'DB_PASSWORD', 'root' );

/** Database hostname */
//define( 'DB_HOST', 'localhost' );

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
define( 'AUTH_KEY',          'M64DXgM$lR.bC`Kfb>+NgkoYcn$NSl|=nA!]PSlNf+zT^?l3)tT8,LO`Pb[PW![w' );
define( 'SECURE_AUTH_KEY',   '&N&fD2b{_[<V3.c6Ym[plr`#Y8jg&v:7Y-nx5&&Q$,~-t@!+jPuqzvet|[@Ge2zZ' );
define( 'LOGGED_IN_KEY',     'JGYp[9*tuHU+zM{7PeIA,{Kv/O+p%,,+bKId]5BEd-Zfn*E?>CY?YFq}:~yt|%md' );
define( 'NONCE_KEY',         'EqQVM3mNpxq+K;@dEmq/f><.@;5B^=fd8Ale?Q^kXy@Q&Wfx@Jl}|nQNf0p:;Rf#' );
define( 'AUTH_SALT',         'Rg?!C2e}d]qbJ].Dw9;pdaG@~C>0H!YxS?Y99kCTdeL5uk;Xy|t4<jHuH|Hfe6:,' );
define( 'SECURE_AUTH_SALT',  'B59!*-?6.%OX7#{8,IoIa`tdy lY-GMzH^n1Hd+WWqV]zcg059D?7ElN8kF.Y-w5' );
define( 'LOGGED_IN_SALT',    '%can}-vO-&$&l(}:J}XGfqJ=aE@0cD_]Fek:l6+(U*4=pJ>*4AklxB}r(LWFH:2R' );
define( 'NONCE_SALT',        'EXhQslyMXl7ePecPE0dHQqTNR1@jzQO;$LFVM{c8(YjxM=LCd)R0*BOAA@;]+{q`' );
define( 'WP_CACHE_KEY_SALT', 'tz.j%ni~~u+CB65/PROSap39slv]5|T(j(fBiX,|A4^_PRoVhw)~vPBHyH[:oFh_' );


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

/* similar to : define('DISALLOW_FILE_EDIT', true); */
const DISALLOW_FILE_EDIT = true;

define('WP_POST_REVISIONS', 5);

define( 'WP_ENVIRONMENT_TYPE', 'development' );

$is_localhost = ($_SERVER['REMOTE_ADDR'] == "127.0.0.1" or $_SERVER['REMOTE_ADDR'] == "::1");

if ( $is_localhost ):
	define('DB_NAME', 'local');
	define('DB_USER', 'root');
	define('DB_PASSWORD', 'root');
	define('DB_HOST', 'localhost');

	define('WP_HOME','http://capitainewp-course.local');
	define('WP_SITEURL','http://capitainewp-course.local');

	// Activer le debug en local seulement
	define( 'WP_DEBUG', true );
else:
	define('DB_NAME', 'capitaineonline');
	define('DB_USER', 'capitaineonline');
	define('DB_PASSWORD', 'AZERTY123');
	define('DB_HOST', 'mysql.db.52');

	define('WP_HOME','https://capitainewp.io');
	define('WP_SITEURL','https://capitainewp.io');
endif;


/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}
/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
