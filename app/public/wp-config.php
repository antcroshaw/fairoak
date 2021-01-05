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
define('AUTH_KEY',         'V0kcehC1TkZUUDlvvdB97CvjJ0ukc1nOWzXTtmrf72ZpkZVj2BOJHBHOeRZ/K2KiXHzUqBYYefinPyLg2zW5mw==');
define('SECURE_AUTH_KEY',  'weATZW+Ua5o9+zmEzZ+t2GshFGHAVxv2CE1f6zm0Xffzij1jPal8NL4+p9DZKonVEJZ42puNbku6bjgUVOvekw==');
define('LOGGED_IN_KEY',    'bmIIkdSc6t5O8ggSu81fleiQt13GV3lAGuudovhcQF/G5+stGOsHNVLuf1SOT8voWRLRKhBArXi1QAumwZCR3g==');
define('NONCE_KEY',        '5dYLgOaTs2rh/jKlCV1t+Ke9ptaOY5cgSFu0chnLTDU6b+Q3pDJE+unEwenu/7d5n5MSy+J2171bb8E5rOypyw==');
define('AUTH_SALT',        'r7soAAhZM6Tg4A18ITFDfjU1FoHIym7y+P2+aiwyRO4BwaU0IvAcSqmS3aO2Wj2vcX9G4YMufAAgarb//JB6yw==');
define('SECURE_AUTH_SALT', 'HfUtcdhAp7Ck+7Cp9NaK4Z4qDHCfh9ZM2+YqBrRHAlWdvbski6nZGe9xHpYL08BgAIxE/LTReAvHpiHbHCa5GA==');
define('LOGGED_IN_SALT',   'EZWJbrMEsbuwZB3CcWG0sQIOhmZZwNlXQ/Y+erATZkdQIH3fdnaAHAcAbMQTqHH677MsBzibZFgtMv+smKX48A==');
define('NONCE_SALT',       'xvWsvc2PcTI0+opYChYyKN4b6IYAHsuFmsjCkY+Pnm0Sq6WPU1qUjzAP/zlPfhF6+wP9Lb3XH0sZBn7RbKpHUA==');

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
