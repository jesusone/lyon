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
define('DB_NAME', 'yeah_lyon');

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
define('AUTH_KEY',         'aZdT;v& ~mdE 4Z6,<bHP2/v`lG6mh)px2gZ_RJIMRi@yaU9Celn>,3M`s9GrjWj');
define('SECURE_AUTH_KEY',  'a}J4O2|$pI4,jP)mvRVUM#u~1mfO#S}TVehc_ET1GTm2d1N]kb eQ D6H+tFZrcM');
define('LOGGED_IN_KEY',    'kI><C;y|T.(@04u_{ygFq?Hw;U|U~TZtdxmCZ2VxH}w+Kr[sL*c,uoM*+V|LdVPq');
define('NONCE_KEY',        'F[[:W-]f@cN!q5rP&3Y(X`/;}3N}YCitFp#.0x7jQuv7*g_00z.K,=QL==y;`hSl');
define('AUTH_SALT',        '-.^3NEAc!AM;i+$.KV]di,3Kc$pt1sX+bKkn1fT8k+[iCrwV_UKIwq8^laP_Qwn+');
define('SECURE_AUTH_SALT', ',mUPu`HByO!m9u_..=7iiq;@V=l>mBGU: H1/St/^((~N_rJC)*l=rVi_ZC%tReQ');
define('LOGGED_IN_SALT',   '{L$_a*c0J/r#6DmtZ;<uwwh8_T*@PQi{dI])9g).}jom#,V!$GIg6V%_kQ(_#r?$');
define('NONCE_SALT',       '0Ywwa%WQ*=N99<19Ng>A>^46mkvjwl{^P((a>L.w>J2>;OI3[[SQ`u{(!vL_C@ j');

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
define('WP_DEBUG', true);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
