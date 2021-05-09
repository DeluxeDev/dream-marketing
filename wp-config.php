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
define('AUTH_KEY',         'E8iSIBe87NhRLXdI6vkWAHE/RhLqi+qhVEvtyFmZ9lwW9/DK6xg2q7h2uyaNCN0UB/DIy1npGTKPmP9FCGHsgQ==');
define('SECURE_AUTH_KEY',  'FbpyVHACrO/KR+aXKDfZdrsik3yCfFKUa3eJiJnNYQsZwKADjllTvZKMfC5+69bq8YykEGc2SutwrSMW/CJ/Xw==');
define('LOGGED_IN_KEY',    'iitT1kBB3TyFX0EpBTfllx8CnnneBYkoA+CyP8EP+dYd32W9SWGhntRM5XE/24ttzR+88Jhh6g63LUh2vAnioA==');
define('NONCE_KEY',        'xD/7XoMiak/Ew3cPFiBgsM2JSF0L2nQVeqGWwvHg4PRb4dQ9+qX9hz7M4/1vURaS6C55jil+N8UMielmGBNgXg==');
define('AUTH_SALT',        'qgkZgyXu/vM0QTZThT7W46uJW18ModsxgKooruBryX4NwgpJNjH5g4vnye71Al7+c2S0pymr2ZmT6YlVUjXd+Q==');
define('SECURE_AUTH_SALT', 'Y6IXb7XXbInPWRrkl0yoospSom90Ke6uBwsOJBMEAkS9+SDF6e1V5vLzJlIeUs5AwhlbVj2vfEJkVImZ7TtPCA==');
define('LOGGED_IN_SALT',   'boocO2SVrFtG3BSpzynl9XrmAij+Q7d1vXLVfRgAnOujTjhgbK+MyN1xLfek2WgD/oDdbaBed+7f6cxufc/gQQ==');
define('NONCE_SALT',       'ze6cRgKcekO3MA6TSlus23ujdK7al59wPLcYnRBjEaJRDfbxGjSyXsDg+bUd9ujVXXzLqzRRLsqej0dY9KI8yg==');

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
