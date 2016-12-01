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
define('DB_NAME', 'mikelauner');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'root');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8mb4');

/** The Database Collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         '1FRC%nhjyr{H!fQ|t>^w8RL6YKj`eo]$es^2D8vpz4Rk^pe!2m;>+J9*(^hkg@6d');
define('SECURE_AUTH_KEY',  'tvXZcJEodw34nzj)PXIZh`IKO)ho3)Uh,Yl$wb pIv!24+tVzor6DGb@hsp}d7M<');
define('LOGGED_IN_KEY',    '60{42q`b`)mpi:s?+M!20|*Sp-Gu5V=}8Kwv#wenh#jo3HxUPYS!98JA7e_5z![}');
define('NONCE_KEY',        'VVOI+}LO6L1/t|z]50^~p[lis]`jo$M/[cEL.IX;{)~|=mpRHMuIcr7O.qbX%8$4');
define('AUTH_SALT',        'UOfk+Hbhc2#`zSvi48$%1BOTkR yBiIm:`wV^_;Hv}B|wk)X-bHqoAtpQr1GUxWr');
define('SECURE_AUTH_SALT', 'U)vV;mPH4`mcDLz2lLmCWL<J:E*-qI9ijV9${>^LF.hZ_Ey]]?L9^1G/Ix-F}wh<');
define('LOGGED_IN_SALT',   'XJo)cKsZtRh>!QL@Kn^Jt_d[#*jn#D@f}1$II[31w0bFFnTeUyO(y}<pM5;/xOm|');
define('NONCE_SALT',       '%%}~EM<YXs9or69D5,-Z[i%}7@d=!#5v=f|!CO#8`U]f5IZe&<o52H9JU<{gn4SQ');

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
