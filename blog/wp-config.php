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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'euymcgtm_wp39' );

/** MySQL database username */
define( 'DB_USER', 'euymcgtm_wp39' );

/** MySQL database password */
define( 'DB_PASSWORD', 'IIS[5.p1u2' );

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
define( 'AUTH_KEY',         'xdnv92jkhepgk31x7fkveg06vue34vdgzqbkisxr83re2xic7yhwpll79wgde2dw' );
define( 'SECURE_AUTH_KEY',  'fosagkiwoocdgv3eux29zdetdac3p8bgcaxs75ffg5dmxmsizsjbkpm3ago87trl' );
define( 'LOGGED_IN_KEY',    'n272ukxymwowq2aoqbj8ik5fbmiluwwil2efkikq4crz8pr9eplpfzkla6f1xatr' );
define( 'NONCE_KEY',        'ngoywudmrz3yhzeclficob7rsk49boms59apbghgpjvrxublfrpnajombl1nkjwy' );
define( 'AUTH_SALT',        'bmbwvnbhqlb7y6usrko5ovy63xmmmjwauglndsu0aabobxboky1bwlymibklwc4h' );
define( 'SECURE_AUTH_SALT', 'csomlnexrdufgm7oatojn2ifvsaaojmfqnn1kdfevytzesnhongubz0cqkj3bzrr' );
define( 'LOGGED_IN_SALT',   'scv21mafrjyinsgtlrb8xhydn2l7rucnjr7ayvfvhhj8scvelxoz9nx5sepdp4lm' );
define( 'NONCE_SALT',       'dzc9o1tiewy0igjmmnt7k1vk9mjsp7vyunncoatylychb8f5s0prxcpsedumsoh9' );

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wpdl_';

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
