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
define('DB_NAME', 'wordpress_a1d');

/** MySQL database username */
define('DB_USER', 'wordpress_59e');

/** MySQL database password */
define('DB_PASSWORD', 'w9aoTW38_L');

/** MySQL hostname */
define('DB_HOST', '198.71.225.55:3306');

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
define('AUTH_KEY',         'EJPcf3jkuWsHMY&81ahOeY#qrm0lT1HVlr&dXKC^fWw4VQV6UMrkoug0!@bFsrAK');
define('SECURE_AUTH_KEY',  '1(YyXng21u(B&Lo7Q%OxKhvJ*kHqDHtqkhu9KiKSBQ033Es)fYymVx^nZj^)TWpz');
define('LOGGED_IN_KEY',    'CtiwLszY8Wjbmhq!cEh&yUMBQ%1aAUT%E%)rGNRd^QJNavl77qq8(QKwBu*5xLM)');
define('NONCE_KEY',        '&J(jy2D8m4)WZD0qiSfq4RB5N1fyJj#86^5a&636OsK)c5MThd4n5Wv)HpOumLMi');
define('AUTH_SALT',        'yUEuUzhED56s(qoRW(d4K2Xi1y260GGEddXW5mCEQ^RRdXDnLd(*dfs*aQEVxlkp');
define('SECURE_AUTH_SALT', '2NUApd0CI@bKg#2NvPL2dpfd^ZmcO^&@1P1pe7xuJL)LMbOwza1ZIMcUa(oV@Ayk');
define('LOGGED_IN_SALT',   'sHT9tb9VoM2vg0hf(Vr66xgaj5D(%Jzx6KZ%P5nLYyrObFDJDYUFcQTI(bbhygdh');
define('NONCE_SALT',       'tCLwOg@hIAY%HU2*N!WLG(nKqxv*c9m&(BJejQh0vsY#9HNTmgm^5@88dx*2pAn&');
/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'A9NjcaM16s_';

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

define( 'WP_ALLOW_MULTISITE', true );

define ('FS_METHOD', 'direct');

//--- disable auto upgrade
define( 'AUTOMATIC_UPDATER_DISABLED', true );
?>
