<?php

// BEGIN iThemes Security - Do not modify or remove this line
// iThemes Security Config Details: 2
define( 'DISALLOW_FILE_EDIT', true ); // Disable File Editor - Security > Settings > WordPress Tweaks > File Editor
// END iThemes Security - Do not modify or remove this line

define( 'WP_CACHE', true );

define( 'ITSEC_ENCRYPTION_KEY', 'OVVFeEUhdS9yfWosKXRdbyxQVVNlfl12MlhwbjRJQFVHbDNtKTdQdlJ8Z3h5JXUlOlUjK3NhOjtFZyNbc2h4fg==' );

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
define( 'DB_NAME', 'elearning' );

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
define( 'AUTH_KEY',         'uP3;GSB[:}$G~ryS}sgK91A@/}v3LK5zzG6oi`Ip&$^AH#;zGVb0@WX42sGauft ' );
define( 'SECURE_AUTH_KEY',  'G*0~2VH6l /TgUV>jp{YzT,+!mm#QoI]D9PVbj}sRuT~s+DGoy|a@_[f{KLo2?to' );
define( 'LOGGED_IN_KEY',    ']R^hn_D%SlkZoNha6C2=2nO7L-Xg!d6X-5`B HtMlDAr<TDc9om26?Dn.Oz&39bs' );
define( 'NONCE_KEY',        'g}hIf$=6;YAX@a(9@qJi$s)>Q-Io37(,}NjAg)[rDmb8FbWM=t_<kd3wBI_&*`%n' );
define( 'AUTH_SALT',        ' zPP2X<O90GFli$]{?Z*IKwpNIuC&yI?`9dmaXd%nOA6NC3S[F,Hd5nmxm$W4~!>' );
define( 'SECURE_AUTH_SALT', 'xG^u!Wdd<81++Q&.A6gH.EEFO1(xtnV_p^xE9mwL}9tT|DWYt$*plRS:gZ^KXmTI' );
define( 'LOGGED_IN_SALT',   ',{z`.vo:1#Aa`hQMV;!s,Zqbm}y38_=*E]f~)%JYe#>D @-llAWoe/~BQO57&A-h' );
define( 'NONCE_SALT',       'S(^C=cL.Jx`LK&~R?&TB8tfoJ}rZ4qF}Jb8vtivT&kO&JG}V^!^ex%ZFsEj-v20b' );

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
