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
define( 'DB_NAME', 'sinevert_shop' );

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
define( 'AUTH_KEY',         '~t#?QA/(~?+Sm/!4oN:-Y/U*r`LnD%-I7vR#]]8S|57o{u!mVfCX8n+g&eBu2U%F' );
define( 'SECURE_AUTH_KEY',  'C}GAD^[rPJVgtVu<N_INg67Zx>MqO(4RVahP<%;wa7lto.Wg!&{q[52m =v=rJG1' );
define( 'LOGGED_IN_KEY',    'v^{<wW5+hvvd RJJ$(D{%XaR^d|`qm==mf#g8+2tJ&~;{+99$vE%|c gpZ]h$?TY' );
define( 'NONCE_KEY',        '0WM4Y!ZcqJ;N_hZI0OI~zSW0,:3>(T<|D=+_oHr,;>}MU?2e D4.K~Y(b!Au>lNH' );
define( 'AUTH_SALT',        ',Avxc%P&C@ZSyzfyY+EKmxQ1HM#c`fV`aKD=1wK]6>~V:E~bwS.c5Yv=|is]B^89' );
define( 'SECURE_AUTH_SALT', ',|3wXQFk1]Bs1ap-wy[ryapgMd9y0~B|i<y`BuseR:lKMjJY(=H2W}xfnA`q.lE5' );
define( 'LOGGED_IN_SALT',   '5ryGULZnU%hNq_}2k00(2-R8OZhb*!M<=*6(!VJo%IFp]~<c6*DW_cHrXK1cQu*6' );
define( 'NONCE_SALT',       '1M3FFT=ok4#*yi<uNz}m=B56|<t/{*)v--za/f:a<_8k1z.`exvcUbDf++pYoB$I' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'sv_';

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



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
