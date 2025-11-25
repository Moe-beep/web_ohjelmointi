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
define( 'DB_NAME', 'b2025_moe' );

/** Database username */
define( 'DB_USER', 'ares' );

/** Database password */
define( 'DB_PASSWORD', 'ovcyh97lSIv4zCQokEVbmifc68gprgK1' );

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
define( 'AUTH_KEY',         '}PRy{H7GG2h%jL (&>E>Khz[GIkJ;5S81_2iAiha8g < %Qkkv:~PVlv$2-cUZY9' );
define( 'SECURE_AUTH_KEY',  'v0cLknvsoRgmjc[gb$:CkIT_y-+=+hM/btjzbl/n3m)HNu7QtjI,-W$U0EWP2Yj:' );
define( 'LOGGED_IN_KEY',    '?HiP^Y&zOX{wqLzK[qsyBym(#F:D?`fqm_3.At}+ZefCLaw=MI+r3U)TTr2!UF<=' );
define( 'NONCE_KEY',        'j`p7uL|TMc0Y7H^F^5xm_F>(;Q6i`xsO[9jo(EIG+bS6z-$.s|vTv72KurwJhvsT' );
define( 'AUTH_SALT',        'Q4ne;fC@Wr1S ;*o7bw:m:<<;G88,zYtV#T5bBuL2{5=LwY$4lkRVW00UB}M;s9i' );
define( 'SECURE_AUTH_SALT', 'vKf$V! aOnln_)Ti2d}Afpe,9J[L_m@|CiB!q]Ej#En>X9J@Ozmm5B(}1qwaq5Q|' );
define( 'LOGGED_IN_SALT',   '6pg>ec#/2We$!|oRaxluY8,Yuc`[cz$*T9ZP87RTyn>[wtuV=1-n<Gr<Iaa$y~YY' );
define( 'NONCE_SALT',       'Q8~J,|4zcxyo&wER;D<Vn_T#[0q|h},[x^<| gt3_F~wdpu&_j`nlLIEVK>SX)@&' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 *
 * At the installation time, database tables are created with the specified prefix.
 * Changing this value after WordPress is installed will make your site think
 * it has not been installed.
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/#table-prefix
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
