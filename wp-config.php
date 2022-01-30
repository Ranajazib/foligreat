<?php
define('WP_AUTO_UPDATE_CORE', 'minor');
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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'foligreat_445' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         '98v8yajo4e7y2wqyn1lf3ikepkpzpqskamxc7kzderglxybr9otqv5jflit2djqr' );
define( 'SECURE_AUTH_KEY',  'sta5xkafwoqzkxqpm3pzgadcmll1eqgol9t95kqpnrvjll0s1ibnt8mrbwbdyawb' );
define( 'LOGGED_IN_KEY',    'iyg2zztdiz0birjw6io8vgydwwhpqqb83f4mwush6caiaml38hat2myykdjw2svs' );
define( 'NONCE_KEY',        'dzq4tjsej2hemb4vkva7hqjhsamq2ovuisdx0xoq1wsnhu4hgev6mzq35fh4vlbb' );
define( 'AUTH_SALT',        'zmd2rqsbmz2veit9iwdmtfwweaf7frrwutjun6bvyyii6lkzisaya1iqmma7c4dx' );
define( 'SECURE_AUTH_SALT', 'nqds5iqmk31siu7kkdfc8ii7lorufldbjfele0wc5qwxgse5jdcxwtko7mkk4xx5' );
define( 'LOGGED_IN_SALT',   'olwqtnvfuyiqp9n7wrqe36bgrbyoqozihf7ltfjavo1fina4uhpvhitb70poxoce' );
define( 'NONCE_SALT',       'sbdn2kaxrtwiwmo2h6bllsodyfak52mhocoebruiarsekrcytxkx3ofzkqveuyxl' );

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wpct_';

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

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
