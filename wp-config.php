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
define( 'DB_NAME', 'bd_winnifit' );

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
define( 'AUTH_KEY',         'l96xd$|ZFa 37oeqlk6!UY1)Lse2&yMhOz(F2m(]kgiY[3(PZ7MMpwR$A7N )IBf' );
define( 'SECURE_AUTH_KEY',  '0t$V9ZMY5?~2RE7h8.LL=$)u[.n725K=C-94!kU|Et_6cn)9/_H_vHX. ]-MbA/V' );
define( 'LOGGED_IN_KEY',    'G]7T(e}-aAs2_[(]#iP;U}728YVFXF~sKm5}fmBVN~$U&5/pK+TYOB+D.,U;Aj E' );
define( 'NONCE_KEY',        '1=)o|LdNKfPB9!-g$jvqS6TI/WTJFr`Gnz>4Q|3Yr}d^vrO=8&L# kf_Y/%zBdq=' );
define( 'AUTH_SALT',        'zfer)Bw@5X[P)h%]f4_pTA+I<Tw KJ]/#0gr]R<8+(5ggpY]C2km9lIk?MJLESFp' );
define( 'SECURE_AUTH_SALT', '(`Z|iOU-9R?NIPWzl>@mW$j65fYv1k1UETN?qcV:{l9*-HGZ(`E3%l_}EgEq[&(e' );
define( 'LOGGED_IN_SALT',   'izQ7[F@ZkkVx^/5(Bcx^~0P%Fz>]7M$p!^tZF`t^(ud=Uhj&$>0+5mbg0k^>`A$X' );
define( 'NONCE_SALT',       'z37{W$3z%PIGr4.<O1jHLg-C#|`^t>S[O*9wL_U}tts^RMd:u7!-t4uh65-R~5 L' );

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
