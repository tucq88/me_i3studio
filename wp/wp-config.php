<?php
/**
 * The base configurations of the WordPress.
 *
 * This file has the following configurations: MySQL settings, Table Prefix,
 * Secret Keys, and ABSPATH. You can find more information by visiting
 * {@link http://codex.wordpress.org/Editing_wp-config.php Editing wp-config.php}
 * Codex page. You can get the MySQL settings from your web host.
 *
 * This file is used by the wp-config.php creation script during the
 * installation. You don't have to use the web site, you can just copy this file
 * to "wp-config.php" and fill in the values.
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'me_i3');

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
define('AUTH_KEY',         'D9KJBH?3C|j|r>AFKO0$o0u]guhQG[BJfBY@r3v|#>Q!nvYjixs `QP-5-iZ{,4(');
define('SECURE_AUTH_KEY',  'IlL|li|MN$%Hi](?kA:zI7lG4o~w8=1qX[i-?(c|Z07bd$?=`IO|&><e)YO^a0j=');
define('LOGGED_IN_KEY',    'I.d*e`{Y!~(#dYv(y|V!iF`8O%7eI-(QTGX>|C 2RNE?AW.9m]-+4P!f.uPM]5IW');
define('NONCE_KEY',        '3X*3L*{s %Bx3Y^C?#[:.dG&Lw2lZy/<zakwX$|Dc~|vuq;bwqE3%%y0!gyf&ZEU');
define('AUTH_SALT',        'i+>CMTUJi:fVL3!%RL_uFXZtQt,|z<qKl&`v/`k(]Qy;F0C%,Z63Ju-eQA^-}}|6');
define('SECURE_AUTH_SALT', 'qwpOyRzbHJhA6#Pdg5,K#(an~%lDMgGL[k -4TId2}b`51TQfsZGodS|2W_f:B-y');
define('LOGGED_IN_SALT',   ']f]3P=dCIv)f`O&++p-uE9|ogJQ.N}pd8C0:dCO;%h3khFC -+K%]mHJ{JbL5y$)');
define('NONCE_SALT',       '-50 ^chP#JPJtJ_0DWN([1d+0zAGT~Re<#`&e=!A0sgP.c[k<}yZ,r+F=&g...|f');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

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

/** TODO:Remove when deploy */
define('FS_METHOD', 'direct');
