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
define( 'DB_NAME', 'wordpress' );

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
define( 'AUTH_KEY',         'NrW/HA*/X|MfV#i5A`oNrD.oCh&Nd,Zkm.C8Z>;]fwiGFD!{l(fQ!7G5*%l0E NF' );
define( 'SECURE_AUTH_KEY',  '/kQC<CL^p03Nu:mZtGEx<~`& *tGwgzxXx]v9`8i/wni M:8Eq=bu=1]|2BRaOSG' );
define( 'LOGGED_IN_KEY',    'AcpH<Bn1;%fQ2o; <WTm38I7}|Sn/&7]1`4rE=JD6wL.(#:@,{+|:CAvq<_H!6Tc' );
define( 'NONCE_KEY',        'R]e-a*!j4o?-Zwcfsu`*2p9X~Us]CoUf1xlW0.Du8]47jvGfl;rvk4d),}E:d1I5' );
define( 'AUTH_SALT',        'wsqq@Pxhr=J?13~.XAQ-D{u,:o[?O*<:cAzRjcIk%/|GwG.M!;-rE&esO<1zZC!V' );
define( 'SECURE_AUTH_SALT', ')s$2cw=_rRH^c> gHG>sB;UrJ}RoQS|nR?enU{SC:Q@-1d0:*7r`~0tXkQHf34e`' );
define( 'LOGGED_IN_SALT',   'I:7vL7e1+.v^ku-Zm]i];S+-l|OG^!)maI]%V8kv7aCjQ7~+F/bN^V .P(mM<!E[' );
define( 'NONCE_SALT',       '1? qut)|tRO&n+n0t;cvt+F&<jesDI0?d,_,Q`[L=.t#eDnI uq{W:8E$qq6Ldu)' );

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
