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
define( 'DB_NAME', 'africansurveyors' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

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
define( 'AUTH_KEY',         '.YLj;4aT0da&^HKTA=nUj%;}fmvyAs0EX#g0NAVV1bl2<:kc!hlB>ey>?BJwCyE&' );
define( 'SECURE_AUTH_KEY',  'Q)/f}ze#z-5OY*J{^@Zd^Ju]JH5dNp/H7g?R@Iu_Ykf*JcEF-)G{cD]MWhl^;erb' );
define( 'LOGGED_IN_KEY',    'Q:eI*|W^>N]oB#5(A/oLvc#-L9Da:s^l.Qh]+tK*BSt@My~/23[,^C5%A7.Dxb^+' );
define( 'NONCE_KEY',        'bTWRB20/,]ztlGkD$jBo t8xD*RK4)16<A)AeN}9j3YNS:wRhm_}{sb<U.zq=|/u' );
define( 'AUTH_SALT',        'dM0Lm~E,Cz3;=F{?*8N$bbG7((NV^;eWY9@rL9_2ziB0iz7O}Y< U8 v2({[9FAr' );
define( 'SECURE_AUTH_SALT', 'vm_L8OIS#<N6Otf9PxrTE6,eL1+`xYtbSAIh%6eZdDZ Y1 iqvgy=JWxm3?ck5(B' );
define( 'LOGGED_IN_SALT',   'PnInvz,09,&k{sp!jMMDN$I`r|itOtiBVo*(2~*VzzDEiVQouLmGo?4.9GRFN}Bf' );
define( 'NONCE_SALT',       '}EEM_X^P<nA)Cz p/@Br{/{!Q:>.USmE0CJG_^:<[Yl!7>~^auQCU[@yT5kAE]qa' );

/**#@-*/

/**
 * WordPress database table prefix.
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

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
