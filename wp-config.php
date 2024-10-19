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
define( 'DB_NAME', 'demo2_db' );

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
define( 'AUTH_KEY',         ';f?ac6;n!-Gk^OLPv.tNeDxXA9oxykIPXC1RUj.)Rc5IdK@s^uK_`!dGQ/MdXBsW' );
define( 'SECURE_AUTH_KEY',  'Rg`D1T]{=-f^K-NQQwW:;H.ap*>`IY9)Zl$4Q9I3<EDPO)t?tEi{Rx-!vMGipkWF' );
define( 'LOGGED_IN_KEY',    'jfz>b2DCi9~)hRT6iv_s_e^CF0l+PdG)he[@qmT8`Q9KHZT>UNF=a3$]}:rYvSfx' );
define( 'NONCE_KEY',        'm`V%6cqV&=E`L7#w=sU&:Ehg)Q{LOBYbJ0e6HXuCLb[KwL4-s7Nl2]=0T838Fnsi' );
define( 'AUTH_SALT',        'h$k.ur hn*+^>jZNN8UgqIBFCY!dC8<.~]NQF/ef5W}Z6/{{BhTiD=X4DqYe%/1Y' );
define( 'SECURE_AUTH_SALT', 'xLc7:K(d?z*|DR]I(3EQVq-#6!haIS$Y[fT?a7#h:7Os%-vvtNAbJ[&d$DsP@j:8' );
define( 'LOGGED_IN_SALT',   'GLpoHls7Amde2B`zQN@e=_h|TI.:8FUk~0_CEugA6O/M&HsSD/FO UaQi2`Soks3' );
define( 'NONCE_SALT',       '@8|QeX8.q=27}!]}@`$%r9{aOBo:hm/8:,>cVEJ:1IUeL=#c@=6}(:pu8`Tqxf.%' );

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
