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
define('AUTH_KEY',         'zr9jl+e73Bi4DaXLmV3xaoiIqfkkw7/dNVuUVj9v1m8rMP62qXRvgOv21RtFn9ESZneO8o/3mo54Jy7M5l/9hg==');
define('SECURE_AUTH_KEY',  'fwS0F+iCyHRgpHE2Tlmqpt37KSwQ7ZdDVei5i7Jysd85tk641Z2DCRDT7ikeMWrfrRxlJY29j/KJd06QHe1RAA==');
define('LOGGED_IN_KEY',    'tiFLnoRpiryckWGk2IXYAKJ/IzwGYr6QRo72w8uSeUJKlX8rRugxgsixOriKNaaOGFaFOQomgfiTGbgrXhVFhg==');
define('NONCE_KEY',        '6Bx2PSitnzuadvZaHu7pHjwh+X7My3mRW8qNCJIzNxC+t/pLS/9CylR9F8oQt9kWzwW2qWXIE7ftjkGCE/Aqyw==');
define('AUTH_SALT',        '+hcq+CQKKUS8LRIP/FZzYUEZYMK5xo32cGElUwDuXDAx4O6NupSntIzEf4u+3HmUttGj05YWbvi08FfxMXYipw==');
define('SECURE_AUTH_SALT', 'fdAynYOqFnet5UgVjpiu9dADWHxzVcxRYJfq/CCgbt9pXc+oAT8e96KU0iL43FboDAoE2n1nTdeCtq1Ybi1V+w==');
define('LOGGED_IN_SALT',   'BCRGIXAD7F2rAMgkytpM7MuaWYGAzu4AnC/RUVv6NA+47cZ6oHyOgnbru+nsQfC+/GMKG1s09f+/UbWlQ29/eA==');
define('NONCE_SALT',       'TQrnvZ4y0zNXy9pmckQJqw/Yzmd0x1n/98ag4Sz+l/35vRmfUzoZ7kScDzvYfUKEP5xv1f8MDU4x77o8B5Phkw==');

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
