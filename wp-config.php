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
define( 'DB_NAME', 'instagexpertos' );

/** MySQL database username */
define( 'DB_USER', 'forge' );

/** MySQL database password */
define( 'DB_PASSWORD', 'oyf7JHCRCwS1ZW5O0eJp' );

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
define( 'AUTH_KEY',         'd@uFnA%9]|siS/J q]x]BsoIHN$!lw2p(H`d^O`5Iy7Kvfv&mBAy5`N[+9bMs6|,' );
define( 'SECURE_AUTH_KEY',  'E^Qz9IdW<L*n!|SSqguvO4w)m*/x!6#8ax$=u-ICV1RBS1@*.&z<7o%SNPXNSg/]' );
define( 'LOGGED_IN_KEY',    '=.G2$}D8sO0k?[xK/$ah|wJd`wZIU(rEgHV@  HTUp4h9k}bYAzwCvrVm!#10nmC' );
define( 'NONCE_KEY',        'D,+r,ZG[2*%~ ZTA6A#~Q<FXrM2A}&O35QE_uKEorp^AKd#?2z&{ __z3,xkLi=Q' );
define( 'AUTH_SALT',        'f;kG.(gl+}egZQy<@WTOh/#*L?CI=6MQY<b3x4$h ]1Jpq**-|Prdj1je4@xcAE*' );
define( 'SECURE_AUTH_SALT', 'MM>yRO2)5w+~dM%^1vZ<uAI!n!w+4p~?u#<KovpcXy-VOL8n{:54Olv+?UK0]eK ' );
define( 'LOGGED_IN_SALT',   'P2$^%4,@kEA6+DXz&C<sB_yw=#*Tj9V_K*v[NH=c)> G`0>I;mRMei<ub:;V`MfE' );
define( 'NONCE_SALT',       '^d`{]Hamm72#3IO9W&,)l]q1M_9oM<Mbj1W!TO)$pSX@35@|j<o23Lk&_M7*L~eH' );

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
