<?php
if (isset($_SERVER["HTTP_X_FORWARDED_PROTO"]) && $_SERVER["HTTP_X_FORWARDED_PROTO"] == "https") $_SERVER["HTTPS"] = "on";
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
define('DB_NAME', 'c9');

/** MySQL database username */
define('DB_USER', substr(getenv('C9_USER'), 0, 16));

/** MySQL database password */
define('DB_PASSWORD', '');

/** MySQL hostname */
define('DB_HOST', getenv('IP'));

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
define('AUTH_KEY',         ';,q3)CA5{;-q{T <hD]JP[G=$*ZgyIT@967mSN~@BHpIuCv3?.bp}aXzPU!XI1JO');
define('SECURE_AUTH_KEY',  ',xO+cFXO(faJ!5w0V?oM5|hx$^W<ZO;MX1+}!7qJ&Ti}lbNB3Mn)`3D+>FV+6r^0');
define('LOGGED_IN_KEY',    '^(M+s#9cz45S~.0RpadxwV(Fju$Pv4Sbq9TWI+-as-~.~8[>ON6FB`qioK[+m 9F');
define('NONCE_KEY',        '_2%K*R|hJ0#+Ni+.UuL>q++hO7QuT`69Up-OmA3i}ppdh[v&HL%.L|R}$FxAnd8?');
define('AUTH_SALT',        ']+YZetFY)F@Y8YjDQ[XYm#C-Kgjl./FwZ4-?vhrb8 ^;e68f4!6?Tc|LJ]mR[eQc');
define('SECURE_AUTH_SALT', ':P9AG9WJhNhNrNo-M8AQ62<cy8v2TD-m=Q ZH;pr|k|L+;FW0n1o%J;_N64)D|~+');
define('LOGGED_IN_SALT',   'j+3nV-H!~WA<#N[$G^U1#~}W9wu=Z>f^E-p<c:>jjS6dlPO&f{+s`h[az).!{~Ir');
define('NONCE_SALT',       '#|+B.$t,Fn-pUj77M)t|>z_h.3}bR(_h)9vCOr#wb~nBKcVoXQ[$2uL*HHa%Iq`d');

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
$_SERVER["HTTP_HOST"] = $_SERVER["SERVER_NAME"];
$_SERVER["HTTP_HOST"] = $_SERVER["SERVER_NAME"];

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
