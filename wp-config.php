<?php
define( 'WP_CACHE', true );
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
define( 'DB_NAME', 'miguel-otero-silva-wordpress' );

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
define( 'AUTH_KEY',         'VF]OA($[p.)BaqK1Pz3$VvqPL$t2o8TMd^g]=0u4ZLwDLaJ/B4GF]|c8YE[lMQj(' );
define( 'SECURE_AUTH_KEY',  '53Fr,7D(`u]vV=K)~v2t<9$>OcM_;JA[Rx]5RHS!60bZxmyEU]C?jDVGUZ5?<e`a' );
define( 'LOGGED_IN_KEY',    'YU!kza{s-Hz@K!;V%1v_/7`|c4q+ DC?Dv #p!:)ke<c@u=|g<u4*DDWD@?AOu1q' );
define( 'NONCE_KEY',        '|+`lCSN//FY<h%5xTNv}rBv(X )+|+IK$,f0iqukKtPIg|@4+{+h.~VnauKNii&l' );
define( 'AUTH_SALT',        '-*MaAU2-!WwHLO |6=/5EA`<}wQy8|oGs1,gNr<OTCm.AKUKer#8C]fgHV/5Gvi<' );
define( 'SECURE_AUTH_SALT', 'x^(MO-#*[[8Bj;P`]%M63t/p#WE|+7rW/t?@7+v2ZO$LP57GMB*/]VioZ6<F*x|z' );
define( 'LOGGED_IN_SALT',   '.T/vZjnnA{(xxGp7bV)5q {w+R=XoesUjY-lnLE4QWX-ma%Zxf-3qrz0#w~G]QV:' );
define( 'NONCE_SALT',       '`oS1nR80Xxg}:t&mq UDJ}4HBI-oLiV*s3Y?)A@@M^Ta5R7C8M|6tXmH/8t(ToXV' );

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
