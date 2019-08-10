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
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'mfaiknmy_mrstrollerdb' );

/** MySQL database username */
define( 'DB_USER', 'mfaiknmy_stroler' );

/** MySQL database password */
define( 'DB_PASSWORD', 'mrstroller@3475' );

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
define( 'AUTH_KEY',         '?&03vpf<urTH}8mGoX .[zEY2Lo700y/M`_go8naoENGfQ+Jkp:y~jOg$>*0@Tc*' );
define( 'SECURE_AUTH_KEY',  '0:s5h(Ef;d %)gvMmnnYy}S(1fy:f3[@H0)9gAx7rda,?b>lc#gY;J:xu{Akk -=' );
define( 'LOGGED_IN_KEY',    'D/RqB&!4=)IJe/n}tk-=F#PH+nI|I00;Pg1Xx5==?n+_@p(M*l(feQ3wm-IneXA%' );
define( 'NONCE_KEY',        'Y3{swxjwQv)wz]h(/0r!{pC2j |0g<^q6XDSe,oJ<n[,QFq,BmCOHTn=O71+r:ph' );
define( 'AUTH_SALT',        '3rVM1sfuUBKC()5g;8]~JTC1&R_`D<Ki+altglo,46AEQ+P#A&F/bp]d *z(`2D ' );
define( 'SECURE_AUTH_SALT', '!R wFrq=u`MjH/.a.b7~sp E2_20_P:3Zd5F>8~BGG3OV@-q0<B U+Z#@7$&k)s.' );
define( 'LOGGED_IN_SALT',   'LN 4X$10u?W9<+1KoD i*6b~n5x4VHt&L}|Qa5aAD$aS)67keG5|v^h#>2=;5E0/' );
define( 'NONCE_SALT',       'gc9_*cY{jV)(z -`T&Tu[m(~[{y4-e?N#G#4yQ_l4cnec$0U~}zH/)nt|=Cd{h{&' );


define( 'WP_MEMORY_LIMIT', '1024M' );
define( 'WP_MAX_MEMORY_LIMIT', '1024M' );

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
 * visit the Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once( ABSPATH . 'wp-settings.php' );
