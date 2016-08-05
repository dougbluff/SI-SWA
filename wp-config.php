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
define('DB_NAME', 'SI-SWA');

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
define('AUTH_KEY',         '*aTK!do^+io^:ksHn+RJSm$7)3Sl{C>Q+SQ@E45QhAXf`Ac-S;K9TkZ&6!6s89>-');
define('SECURE_AUTH_KEY',  'E6EBOmRR}-j&#Ww5NPr@OxbKXE&HA4g|QQ#u)8Z2}|opcv3ZF^I}A1H-q[MpO,U(');
define('LOGGED_IN_KEY',    '{>;d=5)Uyiu&l)rAEBNvQNm*`),vF { xjmj;mU+{b0o|Dr;BV$SsA1fqUE#BB/F');
define('NONCE_KEY',        'S-ovS%Xk_27r:jw^S)iqKwh/F-BC[NJZf2*luWwJ*7qws[nGsy?<eArI>+H)lnn+');
define('AUTH_SALT',        'Sy[dBC(ExQ#q:o?c@~(}asXA&!#@$E1]dwy5$kFY$vV}EAO*A~vyZ}RZY@Su!*:U');
define('SECURE_AUTH_SALT', '>>bbo=yW@-}[5Ivks9bh8lC4.  hU{<9CXQ;1lBnfsXkDB9mVB^Kik4!P.t%DL6S');
define('LOGGED_IN_SALT',   'R1!A@33nY~qTn+Zy%y]sacpxf~H5!8u)wA1]x_e+=}xD[%J2v8w,.l]lRp^dv/Jy');
define('NONCE_SALT',       'o7nh1Eq~b7*<>K5&nk82[/W3ZvYmghW  ,hRb?)$.MH:`(8?.Lg,/46x7-Kj~xg[');

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
