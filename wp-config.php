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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'Ruffod' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

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
define( 'AUTH_KEY',         'W5 rl@4z4,(F:P33|s$8d/)QLLyqB1f-O[AyBGn5$.>n (M=7xFlM{ .S1~fzB*h' );
define( 'SECURE_AUTH_KEY',  '-,b+n:W@h+Q3wA=a/2*$@&_JkKBNK-oWTMp0v@a<U52QOx !]_;Zmh/KS2+9jX4H' );
define( 'LOGGED_IN_KEY',    'bt6S,SgE^lE;7jHzxw&RM2;R]X*{3;%*<C`63^}(ZO9iAzp;M~s}]i2b+%g7Ct`:' );
define( 'NONCE_KEY',        '_F06:F[zx<SE/vGs}|n+f%vDFX#S[E [/VRo-k!.i5x?wfd8UE9f(=Q;d`I$yKhq' );
define( 'AUTH_SALT',        'M.^ChO(+rmZ~cOvV !It80FG3JJMQhbT FIO#~4o(tu/{4Y (*qHp`WeM:cxlF 6' );
define( 'SECURE_AUTH_SALT', 'aWiTPKa-Hr-t5B%b)dY1E3bZzwv6YeM;,]Kzr0{kfwah#Oxg-Hx5]C?BCl^^5*4.' );
define( 'LOGGED_IN_SALT',   'qJHFW*{TZ:6hj52VSDMt*Z8]Ha!;CmT/w(DIz7^saQyzcjvjFNq=AxSIH%DW|RoL' );
define( 'NONCE_SALT',       '5:&=YsEG 51{XPjdr`EN%AW~VqU1lD:y3Ez1KGD~0TmM]y%8t;.`|EC,@#E$9m=E' );

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
 * visit the documentation.
 *
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
