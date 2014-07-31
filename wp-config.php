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

defined('APPLICATION_ENV') || define('APPLICATION_ENV', (getenv('APPLICATION_ENV') ? getenv('APPLICATION_ENV') : 'production'));

switch (APPLICATION_ENV) {
	case 'qa':
		define('DB_NAME', 'wordpress_qa');
		define('DB_USER', 'wordpress');
		define('DB_PASSWORD', 'foober');
		define('DB_HOST', 'localhost');
	break;

	case 'staging':
		define('DB_NAME', 'wordpress_staging');
		define('DB_USER', 'wordpress');
		define('DB_PASSWORD', 'foober');
		define('DB_HOST', 'localhost');
	break;

	default:
		define('DB_NAME', 'wordpress');
		define('DB_USER', 'wordpress');
		define('DB_PASSWORD', 'foober');
		define('DB_HOST', 'localhost');
}

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
define('AUTH_KEY',         'u{|VCb^IZ_.NS7:@c3<Q)^ +o5]6:wWItR8|+x(d^ -8`rn+#a_aWs2tcN(y]Xeu');
define('SECURE_AUTH_KEY',  'e:K=`[(_wTtbEce/>RO!-ep~H8RS{O[-{+?r]uL,Ib<AQ[dl%t2DYPR89,+ *ZG-');
define('LOGGED_IN_KEY',    '*H;x`+]dg;AP=8HRIGtKA_-g;l!:71w&B$iu{Zj-Y3or~{r(v|i+  k4X|zfzNmq');
define('NONCE_KEY',        'ulTK|@% ?*e)>VQ=ZNt-=fY&4b-WVvJUZ]R#/ pwJww6w@C+Qq7B6ZS`w%cLG(V9');
define('AUTH_SALT',        'Fr6r6!2!E+x9@`ye;*S7D|wR+dA%2Z{gU<q,P*M#BGT8)a?Xa9k7b%9m6H/LaXM[');
define('SECURE_AUTH_SALT', 'qzBlGGeDUsE@~|_=qPN!GNtlsMT<+AQMEQHF)Nh(YDEh)K&N[!ZyZq,PoF**AK()');
define('LOGGED_IN_SALT',   'wFAYD:dh.oFLi 3F-c!Jf(`tr!6M2@I)XY1p*f{QjVhz[M=*5kF5E$H&wc<-^3~<');
define('NONCE_SALT',       'Yxm8xAt0|| 2Cg= E7epjuB;5t_b BMXwi9B]|,tkf!Fha:m8mP>Bm[0DCQRif-?');

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

