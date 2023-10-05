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
define( 'DB_NAME', 'education' );

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
define( 'AUTH_KEY',         'E>N:#ikcRjQoem0)gxu>wvrs|O:3eTt5} pm=|$us9QxD%3JRygj``N}f[R3`S1y' );
define( 'SECURE_AUTH_KEY',  's% R!FCQzYt#]+:8B^F4FI#rbTO`zcblV>g^Ob@3$E::J57?4~Aty5?3Q>BuDZt4' );
define( 'LOGGED_IN_KEY',    'XV~OeW5Mo{g$7/CsAevJ]^<t8&k5}7o8[O75a`!ZmnMkXlf1HsMdl*?4?#qPe:]&' );
define( 'NONCE_KEY',        'xh#bwN%f6*^v2VIVZ0[1}FRx5O>2za5trtA ixVmu^ePzc!b>Z=}x@q8MI3EYYhi' );
define( 'AUTH_SALT',        'wDC-edX#E^zNkt8-(#.i^5 &EAvywF}$Bw.?EEhX;7Q&6~9`dVAig9nn*xr|5;pp' );
define( 'SECURE_AUTH_SALT', 'j`dD[RxnkeGows#Q8GSh|8t`rM!=Z`,%D2(Ouom.F&TScK.c/%iE*nqD*L-[ub*Q' );
define( 'LOGGED_IN_SALT',   '2gLW@5|U?T9.0B*[feI~Ia8-V#]!IpyCP)^bM^0JR$USRNld7#a{}>|~7.>!|`-=' );
define( 'NONCE_SALT',       '|[d)2)bg&g~tsUhU*9~mnM}2a(/9,LILt7rQNUC|U%+_JGUfj[!i-7S$f PY 0B}' );

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
