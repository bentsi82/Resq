<?php
/**
 * The base configurations of the WordPress.
 *
 * This file has the following configurations: MySQL settings, Table Prefix,
 * Secret Keys, WordPress Language, and ABSPATH. You can find more information
 * by visiting {@link http://codex.wordpress.org/Editing_wp-config.php Editing
 * wp-config.php} Codex page. You can get the MySQL settings from your web host.
 *
 * This file is used by the wp-config.php creation script during the
 * installation. You don't have to use the web site, you can just copy this file
 * to "wp-config.php" and fill in the values.
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'wpdb');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'bentsiwebhost82');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8');

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
define('AUTH_KEY',         'LiG0J6AVt_{#q2oR2ZrlX(pR5KURZZII%pB51.`7[k4sU_!EWw4 Y&8u!n/QvMW%');
define('SECURE_AUTH_KEY',  '>dg~h<fD ~uLc}cU5Z0.Uy3zr=+z/8#P,Yu>SH}<vzWq)t;V `917D?5#,^w;NXh');
define('LOGGED_IN_KEY',    'il[5ZzuJ}!pZ7{Ff^]HNjYf/;f&pG9<2Nnm&h]iSlnK#L*(0YxK8+B6e|I&Tpwmt');
define('NONCE_KEY',        '!J>lx)(N8H;<i(f)WM$>VwFGzs;s5yBmzE#j{v7SmA;l(.EbF6sh[$c2V?L=u3GD');
define('AUTH_SALT',        '/+X~iin(iH*abU&xj=I,Yj`EJIH,Xz2VW?Wdx]x#QRbd8B5%rtGUiMWzFn7MkJX6');
define('SECURE_AUTH_SALT', '?J7~`uE2Q}lNFiFMuqJ#<qQi~{^U(J:+c,E?q*e!Ko2|S?hC{k*awgj`?mdEyr9W');
define('LOGGED_IN_SALT',   'zB=4u,(18bS<(k9Kib|udDv[f>VN`YK77O9qt%Mqhv]gwL-&3Ef3>LH/Bae^k>yI');
define('NONCE_SALT',       'Ma;w(`6]?D%m~;6W$jRwK+vV$y3#</yA:ddfiA2Ka<{u.xDViaZAqaC(;I2f;5=?');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

/**
 * WordPress Localized Language, defaults to English.
 *
 * Change this to localize WordPress. A corresponding MO file for the chosen
 * language must be installed to wp-content/languages. For example, install
 * de_DE.mo to wp-content/languages and set WPLANG to 'de_DE' to enable German
 * language support.
 */
define('WPLANG', '');

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 */
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
