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
define( 'DB_NAME', 'wordpress' );

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
define( 'AUTH_KEY',         'MiM[.4`Uv=WG!x]l{|7U98PDHy@ZS`~z&K!:zz`}+Q<Ye3RB;s9PtjUI3MLN(X=-' );
define( 'SECURE_AUTH_KEY',  'tTi%;4A1=bSBj]#<=!:xDU`JewL3%IkQ;ZjjWhIZ$^K9O2,&TW.bKU/zzXn3>wnn' );
define( 'LOGGED_IN_KEY',    'JIEXE3!u}lA{=}aX_T-iN)<CIsor|:L:Y~|^[:}kJ56B_%zV6+#:A8atpVs++Ul3' );
define( 'NONCE_KEY',        '-GPl9U&agPR^f[~uDoK-,4]bhNZ5kXq!P8[aQT-s)Br6c-S|?i#(a7D)Z0/pj N-' );
define( 'AUTH_SALT',        'k/F;=4y3`~u&Y?M-SG#rDSF .E+MWx8:5(%~;G|(|4/vjlu6_~uQ[7)n<B>$oOPH' );
define( 'SECURE_AUTH_SALT', 'bk5kWq,AszjWKzG=VDfx`yMC4|#F1}C_+6z[&RTI>ZYL7;!1WW?_QQw=XeGg{]_5' );
define( 'LOGGED_IN_SALT',   '+nNCb#@PRy>FP9}$FPy*e,3n&<I.t%^vq[hgn=IkU!>H~3Bc5x>kx{Q_%uT*z4rI' );
define( 'NONCE_SALT',       '%J3gRhY41>LPtv{3O*9!kIR>qXO]f)128g+-LparO$7k!yMyRL>x*c7e%z|PH@67' );

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
