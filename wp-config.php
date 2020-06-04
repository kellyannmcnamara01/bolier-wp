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
define( 'DB_NAME', 'wp_localboilerwp' );

/** MySQL database username */
define( 'DB_USER', 'contextadmin' );

/** MySQL database password */
define( 'DB_PASSWORD', '&3hdKJHC*@9vuicb(*' );

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
define( 'AUTH_KEY',         '?hy?zDV<#<7&.F)}1-!MQW`vjgD]AV+veP#X}O()!a/kQ>AeGFh@Umlos!l2n<sK' );
define( 'SECURE_AUTH_KEY',  'S8yr=64_^j;e.fj@G%;e !@.*2L9?*J3EH6BR&-gQ0qs{M^~kb40j/SQcVnG,J,,' );
define( 'LOGGED_IN_KEY',    'k^p1#9RA(Ub^&u&Lz)?L[yl~^Elp%IA+YhY:=N+DD.|rN26L}L}$AEl!j.~NP}@J' );
define( 'NONCE_KEY',        '.uH+D/.+wZN&8D:)`rg.0I Ql4@C<D{OuK!!|Ta>uZ}Wzk{xR<3rupUAAI{0qB//' );
define( 'AUTH_SALT',        'p@,*;h?KaOgs &~S{upa|a,0i<+cfxR*I2`TlZ,D%[pR6rVX!!1!K$Vm#L|F># +' );
define( 'SECURE_AUTH_SALT', 'bNnhz&dEH.AQf5CoBE<.GVZq/(&mEHKDCsmzWx72oL?n&;x5it(F<7>=Dj{&d}[U' );
define( 'LOGGED_IN_SALT',   '[+use6EMs=#Y{|P7y6m,B!qz+eZa!E?yL7O,S&AKRBp0q ;;v29#]o~$)9ujn-0]' );
define( 'NONCE_SALT',       '&dW%_5gl_-lS>i(BUvRygU) fmY4Ba.c}oO MV}zS:X{E/8|I%#3+Jsp6/ecCC2]' );

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
define( 'WP_DEBUG', true );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
