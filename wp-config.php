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
define('DB_NAME', 'wp_niteroietal');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'root');

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
define('AUTH_KEY',         '=z8BEuuoC[n?)MxO(TCKV|~S{?oQUF=e;7n0T H>%N1|XS:anC-/+y&RSFzLO>A/');
define('SECURE_AUTH_KEY',  'eiS#*l9B*OcJg #d8E:]{zX!T gG`$pLbi+Wq0pcn=iv+mKL-fr}vfxo2$2$}dS|');
define('LOGGED_IN_KEY',    'M5:0S>MV]m+J6-HL}APT9SEPrMesA+|^]$C3B85i/[thS=+^#]cVNA$i$_HA6:8.');
define('NONCE_KEY',        'ej|fu*U2yXAm:>3;!OxxlryOP/pQ}&V(}l<.~WahT@&,9J0RS4R1ql!p`E&n+~wU');
define('AUTH_SALT',        '6 GRp J _h|+2&/CWxO7V7#S<@5^(SIFrlevi4,|4&5[l-Vt 5w$1g%Y-hbP~o2]');
define('SECURE_AUTH_SALT', '$QlDk6&WtO7fp)ocxU:k6MV*TM}6X|}d#o]oHey>)JDMmIV)+YMaT:clZ-A8 ?U2');
define('LOGGED_IN_SALT',   'Lv~wZV;rYDq*KWwj/L#fAnx,qHS+,K-D)Vq1f/#+#kz|}(b3H^z9N-qv HCoqm87');
define('NONCE_SALT',       '8ae9qrm+b+43w-R?rDontW+kOKvU((C+RoA :VEf|<Zqrne{&ax[ -ePYTPV?i&j');

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
