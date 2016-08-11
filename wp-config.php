<?php
define('WP_MEMORY_LIMIT', '64M');
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
define('DB_NAME', 'wordpress-db');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'p@zzwd');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8');

/** The Database Collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');

define('WP_HOME','http://52.67.115.29/');
define('WP_SITEURL','http://52.67.115.29/');

 // Enable WP_DEBUG mode
define( 'WP_DEBUG', true );

// Enable Debug logging to the /wp-content/debug.log file
define( 'WP_DEBUG_LOG', true );

// Disable display of errors and warnings 
define( 'WP_DEBUG_DISPLAY', false );
@ini_set( 'display_errors', 0 );

// Use dev versions of core JS and CSS files (only needed if you are modifying these core files)
define( 'SCRIPT_DEBUG', true );

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'kiTspq1?55Br,!e9d&uDOROk6!TFc-Ww+9mH1~FxNpF; &T4/Ds^ DQ@7+<%v)h-');
define('SECURE_AUTH_KEY',  'f>2e}b]u; K{|t*HVv5c(J:&p,!xsq~)[Jqv_j>=?RY#=5x3D.EBLG|?b8{de+;6');
define('LOGGED_IN_KEY',    'K!<MU-&t7XT[QriQ+aX?+3glcsvGS%p`gK,+`O:f-J!<Ymc/ > l7_zde<uXw1j2');
define('NONCE_KEY',        'wv~ZHXEm 3;M,A&MHp#<S2BYM5rn#j+JHc9i[X.Tp@H+O8e,7d~+Bj 6&A9M.an-');
define('AUTH_SALT',        'v:{+)9kkT3Z1 #NJuY6586+RQOB;9_AkI?H%O.@4+%&p x<:-L*^Y7gGO(V]kb*7');
define('SECURE_AUTH_SALT', 't#Y!F9%$bH~Eacv)v)m<%R_U|ygu6RZO_w95BM@}5I*4$9%Ag}Wf:w, ]k5lO071');
define('LOGGED_IN_SALT',   '-}S+^TYrn9HSEqAnG(XDUM X a?:$V:lwC;m|8F1?OE:[/OFr /(|oaLb@vJHPcQ');
define('NONCE_SALT',       '|{4]r2K6hv=6RZ0I+@9GHQu/-^W.6.|tFt(QbmjsySR4dLG5BkW%CPTmvN0CMwp ');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

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
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
