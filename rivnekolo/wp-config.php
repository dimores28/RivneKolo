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
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'dr523715_db' );

/** Database username */
define( 'DB_USER', 'dr523715_db' );

/** Database password */
define( 'DB_PASSWORD', 'YWhbWBxC' );

/** Database hostname */
define( 'DB_HOST', 'dr523715.mysql.tools' );

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
define( 'AUTH_KEY',         'm8bkYnOdxQR;x6`O<(gZ~xd]D%6X}O%q+/xM  Nb.|}D48LxPI`)ogB16{i<K98T' );
define( 'SECURE_AUTH_KEY',  'TmJ 4Ba^W,fzTk)KT09mbN,&u-(:.V3<ERPn!zVJ8k_71?l.? t8R9Rxgp0V,E[Y' );
define( 'LOGGED_IN_KEY',    'PY>c=a^83,J5Nb`k-beIp}?9Ga%tygt%&Q(*8~2-9<MFinxavs%Mq9f[8pbKo1V5' );
define( 'NONCE_KEY',        'vQ^ucrn3-Q!y)BYhjX,~fE^`O5o`7McB^H:G,zxE*3Y+5|*MpYWj2I-w%,)2!4sk' );
define( 'AUTH_SALT',        '8}m9,e(pU:~[r.Jl7a0e(8*bS,JD6=v?g0(Fe%?)vFCNm-i}g3eq@c Kf//n=/HU' );
define( 'SECURE_AUTH_SALT', ']x/vNU9Xyv/JVoU]2:E=Ttqm*:Q&<&[ua}M![4yZU7f?/4`Xz,[C,VDL$|c-}%KC' );
define( 'LOGGED_IN_SALT',   '06c[7~eg4ax#u0HVRtpPM&4:f!7_o/Q_ c?En>/|a-s^Mf6[8Ui7./]Sz0;GYRG$' );
define( 'NONCE_SALT',       '?PzgkCy-EhoedD-$_6cpZ~{1y!a?0uiNX^XP*_,fmF@kot.U0>9;647{B{f;|6~g' );

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
 * @link https://wordpress.org/documentation/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* Add any custom values between this line and the "stop editing" line. */
define( 'MULTISITE', true );
define( 'SUBDOMAIN_INSTALL', true );
define( 'DOMAIN_CURRENT_SITE', 'www.rivnekolo.com' );
define( 'PATH_CURRENT_SITE', '/' );
define( 'SITE_ID_CURRENT_SITE', 1 );
define( 'BLOG_ID_CURRENT_SITE', 1 );


/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/* Multisite */
define( 'WP_ALLOW_MULTISITE', true );

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';