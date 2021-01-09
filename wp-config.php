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
define('AUTH_KEY',         'lZXGtdE0XVdvaxGZNMsnTf0w7d1kWL0YEZrNVsjHEhyHVW8cIrkn3YF6nPY2M3OC1o/xAGJ1cfBQMS95gc9vng==');
define('SECURE_AUTH_KEY',  'OUsf04kjON0CAFhf6nf0MHim9qlGpalTyMOGhUZWgO2FOYAxe14xWXTzu986+bmW9W7QAeXAFsuc3QJdUr7e5Q==');
define('LOGGED_IN_KEY',    'p0H/P9lYSuBCPhwHu3/EDNarLTdPARVGIERyYIllcyxgE43YG/DUNf1/3+5L+yIGrlzknXXtOZQZ3a3lhwBvcw==');
define('NONCE_KEY',        'xgr2neYqxSyesG4QidXdJPNcp/Aclc5rOyhIwqiAPJG0VZB93J5JR/OK/TtQ5HYlxngbtDu7iwKJHRCmXoO5cg==');
define('AUTH_SALT',        'T3G+Rth1yX1SCefPgSjCrx0skOrMOcuvbQ8Dt74RYvV7JGhpDZ5YpRtBmVa2VKPpJDxAdNAWJVOOqKvDkz1iIg==');
define('SECURE_AUTH_SALT', 'D6Egf2vK0umyr1qijMOfLOTwLJSQz/Y4IAXVZsgkoJmstm1+6HxZuwn0e93nIVU+1LjKRLJiU6j0hE7Kip41Kg==');
define('LOGGED_IN_SALT',   'JGvgPsI74Kqq1OaHmSBwM7n6aXCxS6YANxeUFHjbKQrnmnb1kGGTxkOHKyurVZ/Ae7ERPq1jTULkU58GfPEd7w==');
define('NONCE_SALT',       'X+oZl/8LFSXjbUbISFshXO+CKAcUrQItTNPpqFtsBXXdH81Ej0KCMnHirS+Qon17JX9S4jFnkXPk9fVZdQ1t6g==');

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
