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
define('DB_NAME', 'liveingreywp');

/** MySQL database username */
define('DB_USER', 'liveingreywp');

/** MySQL database password */
define('DB_PASSWORD', 'https://liveingreywp.frb.io');

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
define('AUTH_KEY',         '/I7n_Hggy&o(hCa]jpNr`tKBbrF<9,4l?i-_e`9$qQ%])-)GD.U$MDuD&0u;y$A!');
define('SECURE_AUTH_KEY',  '(ZJxw[#Jt*gVq|NO8g3 .JL$J`g3)f!Xg1cd#]qs^HSaxwGI@C0+~T5-S@7I0aKe');
define('LOGGED_IN_KEY',    'hElb,Dtx9!?zksf9B{)rk?IjE+9NL<}PCG@jB^_ ZKK^bKH%~nG#T.MX@u`#:fFt');
define('NONCE_KEY',        'i8=/qN!I/}7o7Tyj3$ Gz~##2kOx!4-#~`uX*SU|b3&GuM-Ibe+ n_1+(Jx=|?W]');
define('AUTH_SALT',        'Vlk_orB5?mA]U6Kk31&IX#GMA8ue v!F-:kZ-dD_)=3aHH!bjaGYu(ewUPd,q$4>');
define('SECURE_AUTH_SALT', '!T$</QNW1Hl-Wm23BF[|j|@XJRZLhk-nk*~iBq/>,seFN,o=JmDJqWz!,EtZ?jo:');
define('LOGGED_IN_SALT',   'DH1h?htZ{%z}jCz!;-q1hStBZ2F}A%d3/Ih7&nZ`.Nw&K1e]5]wiWx(jU2a9AYzP');
define('NONCE_SALT',       's4xtTT~s[tv2Dz%xiGSn8X^flvYpn]%{jNr&|:Y;|e{]_O(vjv7n7,3yFc8)]h++');

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
