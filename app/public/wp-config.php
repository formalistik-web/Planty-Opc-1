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
define( 'AUTH_KEY',          '<M>+!!UQgyZ/@=]MrcM7X|#[#c3sxn/^;Pr$!; b]g.t>VYeww6j4}U=dZ |I3XT' );
define( 'SECURE_AUTH_KEY',   '*?P6M8hVk-=~+:,w>UmrTf^i*CdtjL@}13,Dr5ux@$&+KziUZ~ nig+0x,KmZ`T3' );
define( 'LOGGED_IN_KEY',     '50S,SK9XIZ<m**=Ohv2%tg(Vx$zJ=y.t@IyJXoqigpaDl7 E$|).7F~JRMcX2eWg' );
define( 'NONCE_KEY',         'c.aDbj4M[Pl~pKbDf^^yJF;]*z3FDg/mNqK/KNjlJt^-=P#,]6*x2$tXC6&1.)H+' );
define( 'AUTH_SALT',         'yuE8{iR^b[W`pv;fg@zl5NNuuG~R{}u>AI79O^vSDrjRL%Mf%S#(ci-?1FivUEUO' );
define( 'SECURE_AUTH_SALT',  'z<;k:v_<#{}W<oDmC>WV_A0!ati VX1fWH=BTI~ui*h9]Gb=i^[O8,boOPgQkY(L' );
define( 'LOGGED_IN_SALT',    'B=$NITCj:oH3O4wg%U_[H=9z!Y68Blf87rNC[H;Z5*IBQ&:|zSRdynD+%sd3z} E' );
define( 'NONCE_SALT',        ';lE/V,s,f(ptxfxKAK$/D`?<|Rh}t,oi%}vPVD]_:ypyfN4>wv,{Qz9hNgJR({yk' );
define( 'WP_CACHE_KEY_SALT', '0Xu>(X2wqJ:ia-V[*~0VRQTl](6EUt:H`W5yvXL}zGy#1AaxGV|MDSrxsYzA9xt<' );


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
