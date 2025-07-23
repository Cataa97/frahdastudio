<?php
define( 'WP_CACHE', true );

/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the web site, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * Localized language
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'u672199934_UooR3' );

/** Database username */
define( 'DB_USER', 'u672199934_pcBtH' );

/** Database password */
define( 'DB_PASSWORD', 'tUEaxZVXtM' );

/** Database hostname */
define( 'DB_HOST', '127.0.0.1' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

/** The database collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication unique keys and salts.
 *
 * Change these to different unique phrases! You can generate these using
 * the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}.
 *
 * You can change these at any point in time to invalidate all existing cookies.
 * This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',          'zH^Z:7bOV!:zRx=[<LSz@3oh>@gQmMN:jnU-zv[ C|;7j.EGe?5]qMhb3 E8RPkx' );
define( 'SECURE_AUTH_KEY',   '.V8RqF`wy~y0,bW/xSWt>V8 _jivk3Nl|J)4e(i[P^vQ[_70J_fiHrEFH#NiSg5y' );
define( 'LOGGED_IN_KEY',     '`bI($1Sm3M<zW@P-Z%zlJ!pNy2Qa8hL.Qr{vndVy.J-Ps5Qzth6YnDD?@``*.vT)' );
define( 'NONCE_KEY',         'wWWH=m.(6643?Pp#3/ZF|%)p(7U<~q(kpt9eboY3`b:m^ech/D-FPUZqXm4x3WyS' );
define( 'AUTH_SALT',         'vEZpAtNXmvRv]Y@9r@lhbzT!O;tvE5RPx x=^Tw>nJ_<^1uV`e%RGX%3Yq)[2e{I' );
define( 'SECURE_AUTH_SALT',  '=M%+7%jBzpDA1EO1(_jzvf-j9n(rv[v[XUB_Ol}#1W%kt@P(wP~r<Uwv6+{r.H W' );
define( 'LOGGED_IN_SALT',    ' we4c.XJ0(;.]6+TULKjm.aAKsA>cN<z?Q]`r{~z^8C39~su> &pVPy0D(m2j05,' );
define( 'NONCE_SALT',        'QdaR6}}+`/tp)rH~M-h83+b9e{`E5&Y8fyW:Knt|M./u$,IF>>b9}me#bn`(v$WY' );
define( 'WP_CACHE_KEY_SALT', 'O Of-! 7D<m-Uyh3!|$YF;~_GW1Teup]:JTSCLgty~l>f9SVtdnr]$7fflcfTF*{' );


/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';


/* Add any custom values between this line and the "stop editing" line. */



/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 *
 * For information on other constants that can be used for debugging,
 * visit the documentation.
 *
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
 */
if ( ! defined( 'WP_DEBUG' ) ) {
	define( 'WP_DEBUG', false );
}

define( 'FS_METHOD', 'direct' );
define( 'COOKIEHASH', 'ae3bb6fd01c209390ec2116d37d7b8ed' );
define( 'WP_AUTO_UPDATE_CORE', 'minor' );
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
