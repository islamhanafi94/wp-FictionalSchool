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
define( 'DB_NAME', 'local' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', 'root' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'rpL1MUH+wFB+ef/aCResR6VffNYechsCfjcslY/6/R30mXoHf8YT9SdSuKHEc7ta1/wvRRn2OYVFc5lDsqpaYw==');
define('SECURE_AUTH_KEY',  'x1qj8vYNi7UHAucoIE+wPt/hbFGWdUohqFsdTTyz+uEtBtkpdhmSTKtDc0or7EZ/cYZiixdNOErsLS34UT6VRQ==');
define('LOGGED_IN_KEY',    '2/H02Nssi57cRKsbgKi9VJsSmE+4OgAXgFX7ooxOe7jW5nIIHxwmqfCxI2vqPT8+uDPYz2dyzFWS4kN1QH7qMw==');
define('NONCE_KEY',        '7dkP9rZkWm16ZUi4Yfz3XLy3O2ZRwdBZ6sF3SIKX9gGHBCbYXo3yab/A8j86QLsSBPAf8ON6VfKBq9ozoJ1EkQ==');
define('AUTH_SALT',        'vXYVLxSuCFwsMUT2cKg0WiZP3SCXgsJGap/beLm4JF3MdWO6YOcPAnzBnYnJColZA63h1ozl2+MjxNaB+5726Q==');
define('SECURE_AUTH_SALT', 'Euw0PKkoCBkXpLVydgnTyd2DreCtxmM6UwVbCFIBgxTyPzhfgNCMgUf6yCotpBaS544EHZspKbNkNg8mxBZtqg==');
define('LOGGED_IN_SALT',   '+k17Kr2evXf1wIm3Z8X1blWHdm2yprgN3y6+phRWU61N2C4molpU9XLBhGZLF7nJh+ihYsWRH04rat+1014OJA==');
define('NONCE_SALT',       'I3TQpAy81YJ7xBGZMwsKk+B0thr82ZfVlhLBUD8uDXyperBJyxbVxmW8PKuvxWqJwrccZRD0m5A7mq71PfCjJA==');

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';




/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
