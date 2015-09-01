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
define('DB_NAME', 'artex');

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
define('AUTH_KEY',         'BiRC_uKg.o,y-yoMv.q13U*u|CA@pi^T@/2*g+{~i.+N:(|e|*A8HtGRNqJ+h>P)');
define('SECURE_AUTH_KEY',  'JJdG8).M4=aA$y*d%UZidOKP:iEm5%$U30]sp*{scEg.& d-O~=Y S^s.~#u<~[d');
define('LOGGED_IN_KEY',    'qgq+j1v*5;uwE(|iZ#H|Yrg6O>):6GS_oq7fF^hjhaAgv2;Q0U{`&vXMv YIgYH7');
define('NONCE_KEY',        'W,W^]G!r`~D&I!<=L+f-mC4O/L>U_T|R76?2pxlp(yyLYirA_@CX=rYdC{R5/az8');
define('AUTH_SALT',        'r|sJsGlbiw***] &yT-@YA#q+?h@9|;r.v$B%K<3bdzFlk@LUHwsCp-BC/{^j8a-');
define('SECURE_AUTH_SALT', ')-GnD/.9|>Hk(b[2Mu+=b^|+-*r$%.QN/W<?LaG(A$u|c|-[2>W91~K%afQ07;<8');
define('LOGGED_IN_SALT',   'EP[pGy=X^NZ5[Z+3.0*c4&y8 ]LSTTzoxm.d!d9S:= K5WFhquCJEDJ+u$1Pur(0');
define('NONCE_SALT',       'iv[YjtAb/SxXZ[,+o)PJmF`kJ:rEx&&OwcPJIV$||L}%;=}~*:j#H-T$+);*k3U%');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'at_';

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
