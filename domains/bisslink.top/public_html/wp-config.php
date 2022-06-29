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
define( 'DB_NAME', 'bisslink_wp673' );

/** MySQL database username */
define( 'DB_USER', 'bisslink_wp673' );

/** MySQL database password */
define( 'DB_PASSWORD', '9!]89QS2po' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

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
define( 'AUTH_KEY',         'ufifjsiwjhr5gtllkizdvfaltjcazr0xfsyavsalaquz5lkz30wulnlej0p2nsms' );
define( 'SECURE_AUTH_KEY',  'omwvqrwccblvxau9bx7kygtirged3vwajwmn23t1et4ft4kwspoklgphty9slmm8' );
define( 'LOGGED_IN_KEY',    'y1vtf9csfebs2johxqykvl9rkbnysbmg6yjjb3jf4pxiwazsbrjz7ny4znd7ok4e' );
define( 'NONCE_KEY',        '2nqgtrr7dykg9nrcsmkdzfaik05wxdwikgzz2wzastk5344tqb0nvr4qpxvmvmdm' );
define( 'AUTH_SALT',        'okxjwmq1y51u47yokpptql8smvxqaeabulgz5eqxfse7f6bk95vyyvtppttbvt9w' );
define( 'SECURE_AUTH_SALT', 'haevdgv8ek8dsgufbzbxr3typ3goi85yk65jhslug8jgecc0ybf4ui5erm620r5j' );
define( 'LOGGED_IN_SALT',   'e9zjp9itcgodf1etek61wrnlg0llo1k00eoijhscedu2prlrtqkawefabuh8zfp9' );
define( 'NONCE_SALT',       'wfypgfvdjdynomh36fv1ir7ozoz5ehv1jaqzzlebjazqptdg7j7yi56m9lju58wl' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wpw5_';

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
