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
define( 'DB_NAME', 'my_db' );

/** MySQL database username */
define( 'DB_USER', 'my_usr' );

/** MySQL database password */
define( 'DB_PASSWORD', 'G2@Ifan12' );

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
define( 'AUTH_KEY',         'S^@NV;{~=C&.nk$Dc<N$PBg]CLHu2fk)PnYkqIKn`$(3OE/HvV7<Wm?{%yTTq,1c' );
define( 'SECURE_AUTH_KEY',  '=f_,_BA#D)V`09wue60tV0&Tp_M[HDkfL//rj> <S!IPc62cG47jvFc(}i0OE`D+' );
define( 'LOGGED_IN_KEY',    ']#%.>KX[v5/cmZfXTqn^@vO1n-(Hv8KCWpFAb^q|EG9e[dy)W|GL$gS0SSc_sRjU' );
define( 'NONCE_KEY',        ' +$[#H9k$4=HP1Qv%F,{l.Wyay!y:O]MJLw*gg- Uu&b+BH(OSX<Oa7bY?,-wiPk' );
define( 'AUTH_SALT',        '5^2~FY24PXbW;qgI-<l<A(bLR3+]8))Z6yAc=u-T86Pw6u&!=?7d:a(05%img^[@' );
define( 'SECURE_AUTH_SALT', '}QPxkS_ij[y8ModMV=2l[lygR#.eh)FI7^g*Q#fyqpLs`9tCfl9vDNd)BV5zwTV]' );
define( 'LOGGED_IN_SALT',   'RyJ,dKY>UV]ICfiLr;UZq!l5zoyyw#$L81#bLw PW?,ZMjUx59Ey]Xm!~T_(Ly5_' );
define( 'NONCE_SALT',       '7Y)8[l ![_/WxK!sQI?^s#p!gzhQ !64;Vd=d0nlrk`,[(2_UD_apb|^O!.67s)i' );

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
