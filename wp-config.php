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
define('DB_PASSWORD', 'levansonqs');

/** MySQL hostname */
define('DB_HOST', '127.0.0.1');

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
define('AUTH_KEY',         'TcuA=Z<V%!N]UG:1P1pz}{0C!)_-DJp=%yqa[u&HOM3{B&ycY=cvBj(~To8|XZ-$');
define('SECURE_AUTH_KEY',  'lA4B=l:x[`yJGD..&]YT$Hc*-:Lo6pvSnYj_z-It7ac4cCu550qY.<KLr og151Y');
define('LOGGED_IN_KEY',    'Shz[OlNnnMLSm:|Iu9;_Tp<]5&93{pM16!kjM,CZif{!B+>^sEN47oE7,K+S?R$F');
define('NONCE_KEY',        'a4FZ@/mp0_Ra-LkF$@Bj7;=4yXEpa_2m*{ILAbC@C2VgXdq:s T$|pGLDvtt#1}k');
define('AUTH_SALT',        'oBkzfb}K3({fkw=sk9M9CC(g$8SQRT`mLj&f[w]|zD:S`w(n3Q99YbnINcM&TmXt');
define('SECURE_AUTH_SALT', '5eKiu/}gK`4J ==AX<Vf_YlC.8uODVwU^4V=0^*Q9>`c/zR#{qhl+I#Lh/lA? E/');
define('LOGGED_IN_SALT',   '629>5}vKRg]09H({=xowavUME!K6Tjq1eiqAf`z28Aq0J6!rwh-DTnR9x.(3LbSN');
define('NONCE_SALT',       '&4/d}VD3wuQhYdCaNK:{K4*gt:(J_tg-GXmWvfyC<M9}9E0q[$J8_=7kZ2jRFQgH');

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
define('FS_METHOD','direct');

define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
    define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
