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
define('DB_NAME', 'genncinema_v1');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', '');

/** MySQL hostname */
define('DB_HOST', 'localhost:8080');

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
define('AUTH_KEY',         'U1,uzo2Hoz*b)r=i<_O=~2pm 0ltV2dm?FjRrLM)GMfD6zRZ:!6d<iNF/lAgiAzT');
define('SECURE_AUTH_KEY',  'j`m.j~ib2a6]^E>B`HK.B*-2])u:3,l*)VJTM=0eNIR}0M0% h!<)SMB,<S[aqI)');
define('LOGGED_IN_KEY',    'mAKcn^MCkJx6>Vyl0|C2+R|&+#T=G.F0mZ5%&w#^:#~EDh# 1.Uog~U<xp%7>qc{');
define('NONCE_KEY',        '<MaD{m/DUTCFPg_oDTRl>Ja2M}K^X&QI+TS^DyqERgE8,br|:p_4O@X:.Mz4Ex1k');
define('AUTH_SALT',        'NY!lA^/sDK7ZYpMNyT3f`b250AL JgmHq=1_9Xk0U/iWPK.ae3=m%7%s4xAx>u83');
define('SECURE_AUTH_SALT', '+A0?eQsk4GRsf4::*7.sy@sre2_m]&Yo;8gyeiWKxeOp>$M{m/PqA L,j%uhOzCm');
define('LOGGED_IN_SALT',   'u$/MC|B@bQ08.bJreD6&X]t`wgRVoh:yZ0=N(![s[UKH)r~$GlL8|&u8YoM|?7O>');
define('NONCE_SALT',       '&B4-[z.yKvDK=<o4f.#adCSdvj4&U3`8+]eM)L)*ySbfnaR(~~{E>h&d?0ZaYW?H');

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
