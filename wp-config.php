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

// ** Heroku Postgres settings - from Heroku Environment ** //
$db = parse_url($_ENV["DATABASE_URL"]);

/** The name of the database for WordPress */
define('DB_NAME', trim($db["path"],"/"));

/** MySQL database username */
define('DB_USER', $db["user"]);

/** MySQL database password */
define('DB_PASSWORD', $db["pass"]);

/** MySQL hostname */
define('DB_HOST', $db["host"]);

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8');

/** The Database Collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');



// Local Configs
/** The name of the database for WordPress */
//define('DB_NAME', 'wordpress');

/** MySQL database username */
//define('DB_USER', 'postgres');

/** MySQL database password */
//define('DB_PASSWORD', 'tigger01');

/** MySQL hostname */
//define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
//define('DB_CHARSET', 'utf8');

/** The Database Collate type. Don't change this if in doubt. */
//define('DB_COLLATE', '');

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'iP}_cN$1OPyAxbMC)=VW+3e5tvVx?=oDD$GRU]]WdUfBSq(|a]u-h%~Y-pfS_6(g');
define('SECURE_AUTH_KEY',  'jxGU2yt5>|(nT7|.#[K!ETry~}k,,<^BIpxwYnF+ERd@8p9N-m*ua^K>x-{2UK*e');
define('LOGGED_IN_KEY',    'T2Al~K9&yI?T>wx~EzFY!<|l|<^)yEH5zf%=x&Z?6!>xf&2:).wyMiQ=dxckz( m');
define('NONCE_KEY',        'Y1mKiVWi79L=b;]O8B+V$l]mTv}K>k(FY|(x!@zt]eiA7C`Zk~mne<wQzhf,_6xo');
define('AUTH_SALT',        'A7ywQGSfz)TF<j-oVjIT6;%H%aLO`.xWUD1<1)?4r.i4 R8<OLEW,j$j!h+%-Yk9');
define('SECURE_AUTH_SALT', '5(uP!pdmV~xf.]j[v()|}dCtsY8>n[50+Y$BKB&[]+,RWF`q,Dr2vA?BCy/G-yH{');
define('LOGGED_IN_SALT',   '`gDke;RSYIW&QnaG)Y}N/ET0REF}02T !:z7hV||,Jy[%9Iu|PfI4s;,vAe5^GOu');
define('NONCE_SALT',       'raVI]i|}+|6P59vOn(;OTJbKXAu5SUe-Zwv=;)S(buUTm;O~s-?)CK.U7|?uA/^X');

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
