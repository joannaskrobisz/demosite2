<?php

//Begin Really Simple SSL session cookie settings
@ini_set('session.cookie_httponly', true);
@ini_set('session.cookie_secure', true);
@ini_set('session.use_only_cookies', true);
//END Really Simple SSL cookie settings
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
 * * Localized language
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */
// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'local' );
/** Database username */
define( 'DB_USER', 'root' );
/** Database password */
define( 'DB_PASSWORD', 'root' );
/** Database hostname */
define( 'DB_HOST', 'localhost' );
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
define('AUTH_KEY',         '5LToSi3R3EB4UiuZl2YXt3KupE0Zvtu46m6PP7CttDWz/RMQ+wD63XFzFHHpfUolb5dC68kqb4C7S9KsbVvBhg==');
define('SECURE_AUTH_KEY',  'P629t/zZ4xxZo8G0QCoUVv/TQLZuasE/SPutx+/+NttTUJ1LypUEwWMo/6REItWKOfEs1sT14T2IHdF+/28rOw==');
define('LOGGED_IN_KEY',    'x108T2WV854H6QQQ+JBMTkEPsoHlkbB+5T3lFQoBYsDQlfEy6eSn2jNBLRDBFlzzFSy1evyXhIdOi3syz9rdVA==');
define('NONCE_KEY',        'RdxK62cfxkM+KlMbCmfNqwR0eJ3FUjmUqdpFuuwQlBbWBtxQHgHW6PvWfKrePm4JPNYbybxHtVP9t0VmJadOOA==');
define('AUTH_SALT',        'l5YjvG2XfitQR46wSigduT89KTTTME9ixKI/EjYzuEIoaaKYcfTzhJxz46Z4Ae96VEaM/cdkeyUVtM2NW9ufEQ==');
define('SECURE_AUTH_SALT', 'bdKqD3JBdzir4NM38cMHROlDB77f9f+8//t3Td0BbKnQ+bwZ4FU97VYWxCiuZevPpYjlIa8TTOnTSV+hrgUSQg==');
define('LOGGED_IN_SALT',   '57wg2hPgDKmES0AP36ZYCHXqw86AchgPpKElxyEvwgVfnT5vZpUMrrHbH5CdjJP+Sm506nCr6C0c7ihuez8aAg==');
define('NONCE_SALT',       'Wz/gHDBwz5hMEwaHqHsvq75J+ljkU9kYc7UnfVVriQ7KmpUZcq1eGYJ5ubE/qa2+Wl2UHjK6ObpJJ3HQzaxs+g==');
/**#@-*/
/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';
/* Add any custom values between this line and the "stop editing" line. */
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
if ( ! defined( 'WP_DEBUG' ) ) {
	define( 'WP_DEBUG', false );
}
define( 'WP_ENVIRONMENT_TYPE', 'local' );
/* That's all, stop editing! Happy publishing. */
/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}
/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
