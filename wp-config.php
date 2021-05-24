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
define( 'DB_NAME', 'ivybrico' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

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
define('AUTH_KEY',         'L#9}n:7uoh3.^.BefL8l<<ABkc8~+p#/ALQ(KqP%A9E&kDA|bM#eHbSTo|d%2n{E');
define('SECURE_AUTH_KEY',  '.|`$-vHBK.wawXRNXoE897P@r) 2cO2o2tM[R-}|QeCEm,6m-voIc1s=,VgTUiTL');
define('LOGGED_IN_KEY',    'TJm+8].4M >5S}-O@O(>0@SuGB!@CA: |]`!sD%@aHOs(Z%xEda{^l?t-7-!+-|_');
define('NONCE_KEY',        'p2eU}/-njx31@N+p|!L$Lqf]x6e5nCA<^pM_1lBAt:WUFt0~y2r/a3ynzz:zbmNX');
define('AUTH_SALT',        '7en$eU=SuE+}`81{sWx]-j~}htSLE9>hY<|yS;zkidPKq2=d2+zn`Shu>jC[&eQ.');
define('SECURE_AUTH_SALT', 'rv)@D<8f.;P>1vHMJ|}/[1TO)V/w_M3[tkCsNn]j:2_.-H+}mQP{-[L|Pq_Z|I&/');
define('LOGGED_IN_SALT',   'M+{^M&O@j!q0:y7~UhlWqf 9:VFXKf-M~Oz7%V 8^-EWR~)af9*-]S+[1pR81mOO');
define('NONCE_SALT',       'iY @Hn!I0?VdGgqh|:b~8CJQ 7/:YZH$g`[Ut*W0|Y/h7jkC[p?H4pu[@*PP!?i?');

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
