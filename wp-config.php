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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'exquisiterecipes_db' );

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
define( 'AUTH_KEY',         'e$/CHe?eXze/x$$>nF<^H^*%S77(0;gON&Vs7zWIa2L_of:f0zt Q+/U5ED28{iP' );
define( 'SECURE_AUTH_KEY',  ',*:|}Rq|Q.H@z1xO71Q2[CQb Pf_Tp$D9]t0SV~$aArKQ?U`(4S0=9u}n3E >:;;' );
define( 'LOGGED_IN_KEY',    'BmRnZQI4BG%<Za#B*,c{C&`^o$5Omtcg1uZ5.{}V>xUuFP{y*4q&{!(`M6q)Cwo`' );
define( 'NONCE_KEY',        'h32#{zu1+-*x+Z9v]),e1:@b/&c3<N<Zv9&hB?*7axg%NKPWouN^;6dy5dw@4ioQ' );
define( 'AUTH_SALT',        'I0)/3cyKh<0ed9U+n{7!^9|G++Yj[CUd6=I5k>xOadc*stEL)Z[l;~rvC-vu;-@;' );
define( 'SECURE_AUTH_SALT', 'Gsy_]THxwWWqtT07Z^by~J,!_gZV[h*vfHO:7>cv j^8h-fu,UwJ*O&{6+I7ut?1' );
define( 'LOGGED_IN_SALT',   'y{6K|lH5r.c8|rB72q`$*uioNTJQa[Mmyb|y5j?%`k21@>uVzr`oc2fbc=7j9G3/' );
define( 'NONCE_SALT',       '2efR> U8T=053Hls2q$u=La-%}P/&rw,}~E[ji8D:t3Rb?LQQy+qi)R@RU#VDMb[' );

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
