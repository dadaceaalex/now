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
define( 'AUTH_KEY',          'hRkda5<I>.8x@yLd+eF4.41w)`2S{!{4ZpRclzNjAgis>/(Acvhj=1,mB[4[MzPj' );
define( 'SECURE_AUTH_KEY',   'N@i#/]MT`84515^68?){u;|Al{IZMRz ()bv,657X;KV$-1o0W>Yse:~f!%?G<{L' );
define( 'LOGGED_IN_KEY',     '<U,emKx07//s]xU54>^(/m_xi]8>>*2S>?ONgoRxxGNl@=HL9yb.T?u.@sI{.kaH' );
define( 'NONCE_KEY',         'VRL{)>S.YNFqYRVCFz`M)A=YqveT&J+HFW8UD01zK}Qa:6:t E_z*J6Nd9 <Xr.k' );
define( 'AUTH_SALT',         '!n/M}dd~sfo{6&H%.-u5L4^B);MvyS?(Sz00?BPNGX,X@9+YGKTA>uLY^h7RK9q>' );
define( 'SECURE_AUTH_SALT',  'S-Y&Lc*wkQ?nvk,39&6QV~LY^Z-0p)F@Da.McQ;pLi`nMP*pjTaCK.%`!tu]|Fpd' );
define( 'LOGGED_IN_SALT',    'bo{/!w< U:DzNT@kw%];*Ya7sy6nF5O#QEQv?y3{D5$~t[r,VVdNU*K{,I.2x6X}' );
define( 'NONCE_SALT',        'W;m@3KuZ9]s7vNk+@I%yG)P-6tr&JI0GM7%?]w.G2Z@gP>Ci70fEB,ogoX,(#{d_' );
define( 'WP_CACHE_KEY_SALT', 'O`8{r,:XA+%ZPIkj<;irJXBIIf>>@-p02ts0VqKvOVC}KU}}[Q ss zoHa;Nank{' );


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
