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
define('DB_NAME', 'i2399300_wp1');

/** MySQL database username */
define('DB_USER', 'i2399300_wp1');

/** MySQL database password */
define('DB_PASSWORD', 'J&[nnZxm(T9sMLOs42[89[]7');

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
define('AUTH_KEY',         'Zizmc084zRxfBHYDPNCQahiqbAno5pSCtPMlpmoLFD48WlWZCuXig9SBjA7a5A7g');
define('SECURE_AUTH_KEY',  'IlpB6KRQ6LjXiqyGHZRlURN3SZ8mxdDTR3X1DpJlLIzdfxgxkh2AbpiQUqyGRWS4');
define('LOGGED_IN_KEY',    'qYEnKNY1io7c3Z5P2DSynVsyBZtcf79guxOPPWoWDl5kNFrN1KEvxZTahLT737Wz');
define('NONCE_KEY',        'rDX67Hqn28MGr3xVQHRInF1ML1CivsBhQ7BdG4JGRZgdUl40f5ERmMfpvsHQ6wpq');
define('AUTH_SALT',        'Gm9uu5vV1kiYsiYuwuRG9O7W3Ikm2kIVUu4A2eHNwPLlPUJIaYWMyU4HOLtwHYEq');
define('SECURE_AUTH_SALT', '1YlQMvolSixYz5YfDuUJDJzWVarPDIX3EGIsCMz8C3vCjWad6OCfrMSrLDihHEMf');
define('LOGGED_IN_SALT',   'JR3d8Ohwzkgdr7Ucg5SqpHfm7fDtqC2R98Pb6yvMzzdTsm8OU74ZiYeWuhfU9lpb');
define('NONCE_SALT',       'YIkM9KBi6xHsJOs249UbZJ9XOoo0uTH7yrblZaa14Ju2YOA9kpFNdLDyzgs1L4ML');

/**
 * Other customizations.
 */
define('FS_METHOD','direct');define('FS_CHMOD_DIR',0755);define('FS_CHMOD_FILE',0644);
define('WP_TEMP_DIR',dirname(__FILE__).'/wp-content/uploads');

/**
 * Turn off automatic updates since these are managed upstream.
 */
define('AUTOMATIC_UPDATER_DISABLED', true);


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