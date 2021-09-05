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
define( 'DB_NAME', 'wordpress' );

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
define( 'AUTH_KEY',         '2LB_aR90r1hWG<gM>9Rb^[E%G;eq(N 5[B[g;{=sesBDQH1>ha8,Qg8!g5=b0zK~' );
define( 'SECURE_AUTH_KEY',  'Ma[#iPR%NAgZ]S;r.&M+_bt`TjZp=<D?Xar/4N@dgR9v3D>q$CV*L<o<g!Qe7N&>' );
define( 'LOGGED_IN_KEY',    'F|/E*MF.7^#JQP_gactt}AD@ r6cWd,L68RR800M*jS3Ch:o1Jk G;z!r6iUb+*O' );
define( 'NONCE_KEY',        '!C{,+()[[_ aF{;q$biJq[ Bj#]a^D&bc.u[A93c/8QKw^|+[*-KEj~V&]r}}j=<' );
define( 'AUTH_SALT',        '>aN{~3~Qo{jPFv+qQ@POGh?%(#`F]8[gJ^P}Mq#&7+ESa,~gYNeiEQa2aJ7-6e{#' );
define( 'SECURE_AUTH_SALT', 'wr(}}3~}[h7s_)ck89nRHnIe|mhtpE3{z!*H}UByp}&sd!2q#Xx>P4*Z=&x!&DyU' );
define( 'LOGGED_IN_SALT',   'wai}P&t[:q2+<oSQi/^kvknd]7P>^i*wwGv)DIJ&:,@/8IZ)FQK@!P;IQN)fKu8t' );
define( 'NONCE_SALT',       '<c^f^Jl%^+1&1U(jefc=-,;cjF|*I=wf#oY!~9_x94(YK+)v^6uIZ_2CqffuCVQ_' );

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
