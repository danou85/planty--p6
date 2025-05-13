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
define( 'DB_NAME', 'local' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'root' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

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
define( 'AUTH_KEY',          '@9Vg8;tn%:N|`bjOi*<scLRskC[W*IGVjK;FFPH~9/zV]Zl8;]zutouSxV.#j)-k' );
define( 'SECURE_AUTH_KEY',   ')H%rr)&[111=U#dCIb!5A66Gl7m>ZwX~;:s55Fwm^X(yttg6$R m>/:MonN[+2/5' );
define( 'LOGGED_IN_KEY',     '%opnm0~Q?xM0C(<eZ`cdgVH,.>_UNRULLqT<avJ?a++Ip6)Bpw||J2}yWh*RrFnB' );
define( 'NONCE_KEY',         '5gF>0_0~&*kXh,[,]+fGXKi$+kJ}e[f[Amd}1gYw~!=A[shnzcOPhw*ywVaK/<er' );
define( 'AUTH_SALT',         'B9U@A%?mzV LgC_Ll.=C_Q slRt+LxDW9!Y`l=MN:TY-raGVqg/cok2vgkL<L_j%' );
define( 'SECURE_AUTH_SALT',  'IBmzTPqnOV>~Nr:sT;+D+%8j)4,yjV_qG&;L.-TTuq.9<4 3$dZQ#%`kAA/`}b1}' );
define( 'LOGGED_IN_SALT',    ',MH|0(&wpfFbs-HFqGXyq~,;c@}#<^TyQ&-6z92:l!#1EWe-B6{C!IPUe>S`ECXk' );
define( 'NONCE_SALT',        'tW8Ap9@5FCpjPgU^oY`,HuTm.IHol9bIL_KI3N(z.>PXT{OS1AkoLPnKR3%aj$g;' );
define( 'WP_CACHE_KEY_SALT', '*;T!5aTN0O#0OCa.+4U9[c$% r(WolYmzd44&r0[!5!RkrApC[42ir&c|B>)L.GH' );


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

define( 'WP_ENVIRONMENT_TYPE', 'local' );
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
