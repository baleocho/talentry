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
define('DB_NAME', 'wordpress');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', '');

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
define('AUTH_KEY',         'nP30Q$q~go3&~Wrwt1WKJ?Bj+<{%s}+oBBC22_(pzO}%>xDFzuLfiIO&#WH$>eUQ');
define('SECURE_AUTH_KEY',  '}5?-n`%BEV7M$>4Ojp EL}zedOvXe^S(Fbi#wK/w-P(4f35{TY`!X]EJMhtlN%~L');
define('LOGGED_IN_KEY',    '$}u*@t6oE^G,6R$J&sCs9!rO)?G.[3*y4HTf%^vn^$2$E! 7DPnzaSvC@9K;*ZY+');
define('NONCE_KEY',        's+8lBov_E?h5(;Rt)>BSYK-u7Ugh$Gh;Zpu$WCvq^wQ 2/GbxDLiiW^yWwn*@fw&');
define('AUTH_SALT',        'dvP1qp*bwjY.*5y uJ#W2o`iwCVPL^ 6Tr`Z^T:a,y>-l9lOY$G8 J-$ y<{hbDQ');
define('SECURE_AUTH_SALT', 'QI]DQv5#q~!!l+Eow*Gwo!`Qz1Iu1z*jfsu7Oi.>v/,t6Er@EgB+:mh=cY[,4uji');
define('LOGGED_IN_SALT',   'gI/S,>zB?N5!`$f6_P@,qf1/zh&KZ<v=P-5C+r_:Ag~cqEu&XtDdvHit~?%a0eNe');
define('NONCE_SALT',       'yBkG]vjl+=cDsYRc1ty8p7HOh2gETpgpQ33SSG[aDwar)?%*.Cb;ODg[k(;zDdtO');

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
