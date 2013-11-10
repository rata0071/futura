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
define('DB_NAME', 'futura_wp');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', '');

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
define('AUTH_KEY',         'RFWo3Y1Xfc|r?g)WQ<*lH_6kUe|1e`RB@ByBXabPb*f0|v<j|pVd7;0~&F~G{c0W');
define('SECURE_AUTH_KEY',  '5u-u7;uR3Fbg}:b%C?=QDguY6+R#z%e-B:&<3zW_phj]~B/>_FQ-kJD`(b-W;DY@');
define('LOGGED_IN_KEY',    'BVIL9,$}:w=2Lji?-(f(.`Ce+6Ep1I*h.bMk{I6y|aZj- P2q,Q-{~V?p/+9A`YK');
define('NONCE_KEY',        '@.>>9A0TI/J4thZWN>[vl]7_JC6TPFnM;m;Sps=`<j3u~GUUqm!V(RlV*.SkuzZp');
define('AUTH_SALT',        'z8V&s4-RNQ1`]yL3.x`r|=1LB3dJBawSGA@XAg3o%2_75}Dt!tJhRmj9b7c[[S}8');
define('SECURE_AUTH_SALT', ';DkRD`P-xu_?eX|?D-+AI K@]JCP1|U^-pptQJ+dzDI!$&jwkF2+}GgOMQq@cWD|');
define('LOGGED_IN_SALT',   '@cr.oANr|Lr-S.)JNnh-F(Dc}_|gk;dY5)a4fc+=#?)`w^{L^oTS$P hYBkOXpDT');
define('NONCE_SALT',       '/C{m-S%*p.U|7cojT][D,g:j4kMpsZ/6[Wpn-EU.}!/(7Nlvif;KX}l5EkKdAf.y');

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

