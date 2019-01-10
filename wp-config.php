<?php
/** Enable W3 Total Cache */
define('WP_CACHE', true); // Added by W3 Total Cache

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
define('DB_NAME', 'audax');

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
define('AUTH_KEY',         'TF(`o9gX8Z-0sprvcb,43TF;rqb{oABaaHk;0Mp=Vr`lj%SVed78lyj 9qL+t$QE');
define('SECURE_AUTH_KEY',  'XTt`=^=qVdO>4m/zI,_RKMJ:>.5YUkL+e7+IO?t#Kd*> 4 mDLjT21nyuz)xT]?)');
define('LOGGED_IN_KEY',    'OIR0;sR?fck$*w2Jen*)P{HO?SZnT6w$lvy>ovgBjyU7V-IEgR|=@FJ^^[<hbq6t');
define('NONCE_KEY',        '=7,wi*o-)w3(-LVn>9UHu(mWc*ocJ*h$3X+JsYnOl3M8|@:fjqs=h2fj3mB9ot`D');
define('AUTH_SALT',        'RwG,1-0Y- k|NXTtk4xTL_`f>)=VBryg,g{V30^RJf%<Mx}Ld(~b$&}oTOL3HOlM');
define('SECURE_AUTH_SALT', 'o{r8tFi?<hCL4?n^&NM]|FMzWSsz]lWm}OmE.&X;r8jg,0jv|o!TiQH=BaN~cgW@');
define('LOGGED_IN_SALT',   '],C`,fC`9Z_<VD7SjMIY`2@fF2M8b_|`?gi2JC+zP+;WnrW k0/DK}w(<>5&}9~j');
define('NONCE_SALT',       '9Z3&+[-fMvBN#55$+,gzeB{|rCmVlovgjzdi=Q^GFRF,eq5l)f$nKjP?qktTTSZs');

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
