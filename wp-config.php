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
define( 'DB_NAME', 'ex' );

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
define( 'AUTH_KEY',         'Wr>C;|LY]J~gf]>-bS|^{1FT[2v#)6%;$xoC_?@^c P`=pKV]%W^i:qOUdF.W^7w' );
define( 'SECURE_AUTH_KEY',  'x(B2-FJQu/TG=6Jr_SBf:i@trrOJX,L6r5oFdgX~hqBu;JvT-2m;mQUc^hjLXv1Z' );
define( 'LOGGED_IN_KEY',    ')H&,16m0FsG+B=BmD~d8>QT|/6tB0_g&GK!2j*cQ7y,x[l~_[q!*Y,)VEOFJvxbU' );
define( 'NONCE_KEY',        '5E%e8S./PK :/#BX^X}BaDpp^>H`Y+!h3%7Flhv:78T4rw6L(Tp-un&:N9oD|qO|' );
define( 'AUTH_SALT',        'S%Kp+yI`%X@?#ug,rx5Puqf?$;AjQhnu`E(#U^C+;+Lcbh#H`@NNa$&%tE)eZ]:]' );
define( 'SECURE_AUTH_SALT', '4sSHTaCOX:D-~^<#K;rRi@!&^p3y8;g-ua6Vrf_A-?mbA<WzOnc]m|o4qRJ^P{z|' );
define( 'LOGGED_IN_SALT',   'm3,U10%3oavIrRTf<}2F%@Ks+m;J@MLpYM!N%]0n,.9*]{6${(mq@HNKY/kPNf!|' );
define( 'NONCE_SALT',       '(CT;8?=p,oLvR)p34/7cE, wKjXCl{`)AP82W}r[JyWH/8W3~iU5.Sra$-8jo(aG' );

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
