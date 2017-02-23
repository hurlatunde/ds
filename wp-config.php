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
define('DB_NAME', 'perosonal_ds');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'dominic');

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
define('AUTH_KEY',         'y)>aB[rH@FgQp{6Uq4_<<p=%WtJ# X:k}d1+1nB@mXN-p`SNKgRoxs?wy<9{J-[?');
define('SECURE_AUTH_KEY',  '2TyrTtfJ]MHSL+@BL51DR[[20(4f+dboo:c/$,QgM!3swInn}$},CP(8-He5N=;C');
define('LOGGED_IN_KEY',    'aN)4ST)o6UH-M#T?vkow89yPSMg,9RnnP0h$f]BG/CObNs+M]ctmJ8:c:E+gG]Ve');
define('NONCE_KEY',        'Z|Oh@`QJyjw<^pFAP.jP;?6UeEU-r^T<=h>wv>[zN<plz,YNM~(fLs/&@!?8NPqb');
define('AUTH_SALT',        'U) *%je3-zqmPDiYN?0&0wM$bTrhc>e9G6KAj[l&RffWpoC%P{^,QlX`gaYpR.cN');
define('SECURE_AUTH_SALT', 'S/=!|gYe![Ypy3$S{2Y1;:D3djJD/E,<?{:I~k|O!+rw?E);8+A,~z~sGKFBT(j^');
define('LOGGED_IN_SALT',   'PT.cwfHFbWTX?MtN?B/^@ebWfA>?bW_d,Y2+l_b~H(3Su;J:IQ{`U5{dHYT 2/r$');
define('NONCE_SALT',       '|-)$cQ,,vyk4YtS!W#DX)lD-IQyGO;PxH7zL`O]@p*s|O~r57(np7}gq*n!5kd!7');

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
