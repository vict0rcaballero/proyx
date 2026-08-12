<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the website, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'proybdx' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', '' );

/** Database hostname */
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
define( 'AUTH_KEY',         '[+@NA98)e4)k)b#CV#t2;rQb]FAVjW{.5Q+O-fe,VsH{~qU$ OH#v; ,y,w.]!6K' );
define( 'SECURE_AUTH_KEY',  '3Zi9b>AqNuFmxhy[hRLxMj?h$~[a{NlU_JL(c5}9n~hj1%)2<GN593hAJSLrTMQ6' );
define( 'LOGGED_IN_KEY',    'QP[7gT9@.mq-9.e`WL~=zg!=Jw%C|MG+;x%LG>YY%.z^8EbTh5m~x?xU^/0Ab3ZO' );
define( 'NONCE_KEY',        'ZZ/BcQ%S_UnK#K=?oB7H/EV<:McSZj}Vz|u3[y%+$F=S.|]P KV.%zP1AD8Qt+[F' );
define( 'AUTH_SALT',        'Y]cd-2DGpr^wq75;Fp@cbV09O;iXf{Q>/k^pG_Kc>9gRxCes#5+,]##z_Cpmm6`[' );
define( 'SECURE_AUTH_SALT', 'Co|$AGpFYcG;m/m,EKbq3L6_JXMu;HnF77 T4oF|,)hJ-lqbJf3~n-R3*4ma@+|B' );
define( 'LOGGED_IN_SALT',   ';+_:E5phqm} IM?iRK4~ |e<cW2NO`~a1E$UcvAr*tM`TXn-,mAmLnO}(!&<piYS' );
define( 'NONCE_SALT',       'QA%*R*wtn/1}]R@}.+O`-}[$~%IW+IPligq@3,lS=F}v{OzK`u,&Om>.$bcgg{U!' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 *
 * At the installation time, database tables are created with the specified prefix.
 * Changing this value after WordPress is installed will make your site think
 * it has not been installed.
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/#table-prefix
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
 * @link https://developer.wordpress.org/advanced-administration/debug/debug-wordpress/
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
