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
define( 'DB_NAME', 'wordpress' );

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
define( 'AUTH_KEY',         'zji1}9dYKpIU4j<sJur3,|m?8#b..~XXH;NFz^V!23](Bf2zlN0)u]|}`z,!^WXr' );
define( 'SECURE_AUTH_KEY',  '!ntK%<YKkKu]O/0Tb5>+I9UluC>U2bgzBta_gSX/yyw&l#]+yv$IyJK5(dmti%UY' );
define( 'LOGGED_IN_KEY',    'KYE99k/rX;_xh[!Q|ea-;.|$AHnK9$WBA-;}9c46gE:ct:`|aw|8wWA3:Y}`[=}4' );
define( 'NONCE_KEY',        '8wMKEj$$4M/){`n}&*^a4}tlY?pYH_:(>RK9Ih)phBwNWv8V<`xAS1piDe!y)149' );
define( 'AUTH_SALT',        'G:$zU5ix}!M}5)b2)[S~BhC&=$y;M(|TD[zrs* ej9/D;ty6SK=18cpo`HIo~`{1' );
define( 'SECURE_AUTH_SALT', '7)bm+{m2qw[4P{g,h!9:SQLbG54X0 Q+s99p,$]+.tYjnla#)Q`vwhX/heSm!C5S' );
define( 'LOGGED_IN_SALT',   'eQEl{yNsb)-& gVEhL+?<tAZ3.@%BIt[+h**+YL;Fd[s^dIO3>}*76M.+8h2_1IP' );
define( 'NONCE_SALT',       'uyF{9#)LVwmggE9#VEU7KamQCogGXh3=~hLdR(G)BZiK]yr3bgYX>)XTKYBcSsFO' );

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 *
 * For information on other constants that can be used for debugging,
 * visit the Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
    define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once( ABSPATH . 'wp-settings.php' );
