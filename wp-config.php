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
define( 'DB_NAME', 'hotkitchen' );

/** Database username */
define( 'DB_USER', 'hotkitchen' );

/** Database password */
define( 'DB_PASSWORD', 'hotkitchen' );

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
define( 'AUTH_KEY',         'V!VlcN_|3vo`A+tt.~0waTUgsz>eyt!_{<KWV;/kh&(M*tnCGKp3|(4in]x-bDI1' );
define( 'SECURE_AUTH_KEY',  'r>em9pTX:fS$Mf1BCn3sJJ~iJ]^:KCL~`{V}05zTYJ+w=E,0y9Z`c!R#pDc+/rSE' );
define( 'LOGGED_IN_KEY',    'Ukqnv#dQP_s[x7sX{TSE E559f2OCiBv1]6dJnjDtC{4wZMs8RttKP^&&79*Eai7' );
define( 'NONCE_KEY',        'JIkzSyN;/d9@R0}Rgz}uF0z4DEUDgI8t73nYi%<y4YI@e<]}U@wzR0t1n`swDz+H' );
define( 'AUTH_SALT',        'T6faAZhZx;ntj=FFe-4Ow;| t5jO}O4%sj3a=7kxZJNR5I@P>KB|}{e|!QoQ:7|#' );
define( 'SECURE_AUTH_SALT', 'JM>x?bGdG1POv1S-sx.qw$ewOrx$KZzdo#?.eZ~@6VL{w@QQwN5UfSse-Nj?==}s' );
define( 'LOGGED_IN_SALT',   't$h~7=<!9l,{0m8HIOyjf4A:<a7OLTKmYqq{}jkPuPIZ}dT%b{@W3hX/y.I)kKYA' );
define( 'NONCE_SALT',       'I+N.Wc]$!R(D6j/S4C*WC2h^EWRJ 49}NQ$@tfs#mb%Vx-Yq}v@5xDc_:8AV#E<^' );

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
