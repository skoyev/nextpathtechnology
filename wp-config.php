<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the web site, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'selfimq5_WPNEP');

/** Database username */
define('DB_USER', 'selfimq5_WPNEP');

/** Database password */
define('DB_PASSWORD', 't7A}cqpM:0d/vAqiH');

/** Database hostname */
define('DB_HOST', 'localhost');

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

/** The database collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication unique keys and salts.
 *
 * Change these to different unique phrases! You can generate these using
 * the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}.
 *
 * You can change these at any point in time to invalidate all existing cookies.
 * This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY', '60f15566e71dfbe37cf03622b6ad82745b97d48b88a5263512da25f0d4f77ee5');
define('SECURE_AUTH_KEY', 'e2a295eee140063f9fc4f1cfdd79e357fd7e4fe9835428fdcd0693be417e13dc');
define('LOGGED_IN_KEY', 'f75ee3bfeb26e3f7faafedb6a98987a4516974906b2e0dccac33ce1fbef339b8');
define('NONCE_KEY', 'a0ac799e2451bbb81aaac3c7f67343313fa260b4ced41c3ae59dbc7ed8ce56bf');
define('AUTH_SALT', 'e8f4cf9a3c2e5a2c2de3b787a260ad2451a3eaa8a254354971ebfdfc2874b84c');
define('SECURE_AUTH_SALT', '4eab18c8a1369f0494d5b08c53fee0488ee31a3ea51a44cd3366c0f988ad5fd1');
define('LOGGED_IN_SALT', '33d3800d0dfd3d8c392f84383222a6b2fa5ad0349dffbe0cdc240ebccf607e0f');
define('NONCE_SALT', '3f78d7705eccf7bf015d80a2614e07ac6e96fef8627b53844b630b4dd99d1fbd');

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'z9L_';
define('WP_CRON_LOCK_TIMEOUT', 120);
define('AUTOSAVE_INTERVAL', 300);
define('WP_POST_REVISIONS', 20);
define('EMPTY_TRASH_DAYS', 7);
define('WP_AUTO_UPDATE_CORE', true);

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 *
 * For information on other constants that can be used for debugging,
 * visit the documentation.
 *
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
