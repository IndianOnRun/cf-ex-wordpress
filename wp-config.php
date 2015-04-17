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

// ** Read MySQL service properties from _ENV['VCAP_SERVICES']
$services = json_decode($_ENV['VCAP_SERVICES'], true);
$service = $services['cleardb'][0];  // pick the first MySQL service

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', $service['credentials']['name']);

/** MySQL database username */
define('DB_USER', $service['credentials']['username']);

/** MySQL database password */
define('DB_PASSWORD', $service['credentials']['password']);

/** MySQL hostname */
define('DB_HOST', $service['credentials']['hostname'] . ':' . $service['credentials']['port']);

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

define('AUTH_KEY',         'W%]|Q{edNy6f]s-2(rxh2tQcK0rQ)F15T>gh+p&D)N{;3mHZbKa+@sJ3t@H[aBce');
define('SECURE_AUTH_KEY',  '=#xLY)%ISvV8*n08LDjEA.2Zb0qs<m7UK@:8(r<kQfn$4RrVVuguuX5sT?,XP;ar');
define('LOGGED_IN_KEY',    'kkH4/I$5gjSw`pp;*k8-~h*xLgBW5u]r}E-0@/q8 0hUA*H7Ryv$%%[k;L-(A<[r');
define('NONCE_KEY',        '[/KwCM:`nz_R<O-Bzz#Xbaz<<cCG@Kuo3^oSWO1tO8#!4QYgjwKvV~@NtD;W`VQ;');
define('AUTH_SALT',        'VhuAO4#jP,Maa@^}?XdQQ7%I|[Xr-XoU~@f!R!Qt};lSgWm7|D=5sc/oM|:qHKPD');
define('SECURE_AUTH_SALT', '(&+4z?:T$p&VJ|^Hmh?j>0hFb8(.9=BTS-tituLN0-iC+-zLEa`lJ%)h%H.j/E|G');
define('LOGGED_IN_SALT',   ')@=p-M+T_F9#zlClo0D4x-Whu7pDO=wS6PfN k/qm!+M|EMp49hY(A$C0!x=;|Qw');
define('NONCE_SALT',       'zOv jHLJ/bJ,92/DYoe@z$adIi)bMpU>Xf[!/IHJC?Dfbb+f[-XmFx.>-A/Z[Lah');
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
