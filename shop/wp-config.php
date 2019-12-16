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
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'shop' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '0000' );

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
define( 'AUTH_KEY',         'Zf$]/%#>Sq 3x{5^`G@LICKr&9qM2spzT++H#n7C{vSJL0tAeZ[7g}9a8YUyluLc' );
define( 'SECURE_AUTH_KEY',  'z=~oR3hZh ve8}(rL,T`ad1:8F:A?-h@m@;+ht4Bk%}dXWa-&@u+}yu<)REdV!@ ' );
define( 'LOGGED_IN_KEY',    '%[@M2z`PwCsge9IwM:e`..Zfi9P?)4cFlefV.[#c1.V]u9+mm%q)=)Jxdn.SrrMW' );
define( 'NONCE_KEY',        '6$9viQZ|q/r[0W!:%<uRms.W6{:[){UPa`YxC:~&I`$$L#w#:)#f1!mp87k::KG(' );
define( 'AUTH_SALT',        'EQlHtTAhZ#COj; a^#^<.:D:+%R7)K=}C8ZrjqJRU[@%Z`6W?Np]+V/{Y0UuANSY' );
define( 'SECURE_AUTH_SALT', 'o);+!}Zo#%{kd>ofcPt+f>L_zEnq5FqGR_#`( Bd]mx61ff:+M9hgD[JjR@i_/N#' );
define( 'LOGGED_IN_SALT',   'z&{`@BsT+6ktUBrN<AINp0]:~&QGFf1HM1G&Sy@Yd3 !Y7_TbEhq82eU[CY.at4~' );
define( 'NONCE_SALT',       'Tz!m&h-6f|X[%+D5$bCRQF7$:BkrQWu4C$ O87=$^ )!7aa(8UghmHZmBmrLY~Dy' );

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
 * visit the Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once( ABSPATH . 'wp-settings.php' );
