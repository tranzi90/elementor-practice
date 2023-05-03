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
const DB_NAME = 'WPdb';

/** Database username */
const DB_USER = 'root';

/** Database password */
define( 'DB_PASSWORD', '' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The database collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

const FS_METHOD = 'direct';

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
define( 'AUTH_KEY',         ';V;m[+u}3Q)v6_e1iZd)vFVEX4FfNb0F1 w0/HSwLk!|[XlRGg9<|hG&,9@!^gpW' );
define( 'SECURE_AUTH_KEY',  '3;*$G~yF>c&ZeT#BFQa/@E1WCnY:mcw8Ua;UZr.;1Sd&;Il5q+G)-F1^NZ?FfY[^' );
define( 'LOGGED_IN_KEY',    'XFe0u.!Ng!3axj(UP(!Y4&<#q}[[_;3{)yN_i+7`m=<CRRji}U~O7>Q]fv o)-@3' );
define( 'NONCE_KEY',        '<Pb!CL)m7^1&|$1G>{uiZcbwm_1j ]$vaJ_tEJevJV{~,96%}u>wbhzjnUlaysj]' );
define( 'AUTH_SALT',        'CpZ;(Y]`1;+Gim<#d7_GB^B-D@%8{(vt2MEGw-O$w=56{-C7v,3hBZT?Hx%%iya0' );
define( 'SECURE_AUTH_SALT', 'RTT:$|8I2C,M=uf~N}0=+@e!rm8]FWYEC)_rXnUOMuU$sy,F*.8AwfTA_+aA$)?u' );
define( 'LOGGED_IN_SALT',   '9FwY0f$2Az<,J$IQQW`[8$ )x31Xc~]K;W5G*z:~#v*Qo?!K`r`k^p07UkD8e6c{' );
define( 'NONCE_SALT',       'yI`j}|SjV(){ou!mx~)(pI 6F?hUVvr`s3l1yM$Qv!PV-Z`Z;qcr0jYz:`q_6DfR' );

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



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';