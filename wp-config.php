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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'ITInstitute_db' );

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
define( 'AUTH_KEY',         '#6gA:C]&MS ,CGdK^AQ4T)k]I-K#g8yKn3N+@EUnqM%NV,@kF^wSriP-IS2`W@MV' );
define( 'SECURE_AUTH_KEY',  '[btU^8<#)v)b,~ W2QSj}Tw;949?Kzkj1t`s/RSJQNs*s{sNImq*V$;JuZb[Sn65' );
define( 'LOGGED_IN_KEY',    '>2O@08gpX3:A`E4vp4;%gpTe%SzJ,yGwmQys!G;UL+u)5vh^uyAzZr#rs@Qux7|U' );
define( 'NONCE_KEY',        '4s]`ULNN;TiT&Rp~cfENnNIgPZoTy)TTjC^y0_I9;|v6D2Gn)aCy>L7ssGvp}PN{' );
define( 'AUTH_SALT',        'd:2ke![KY[.a3xX,#R5kTi~&$dBCxk*azK2VP}5vIv. RU;ND.uTy$0QDky4d[bB' );
define( 'SECURE_AUTH_SALT', '0[:hF815&SD0pi[%p[]W^7g?z]xXk1s/go`}Er6#/!w9*T|d*&d3iZtk?.yU-xL0' );
define( 'LOGGED_IN_SALT',   'g>$[0<kBe~(iG(9;ku#n~E-69LtK3]h}ziBqgcW+}& Dk6QtIyQ;1sG]k8`w 32)' );
define( 'NONCE_SALT',       'D&b[FoTO-5MPhFZ=k5T]{afxX~w8MkY]nv+lG!A]<?HDmz,?N~GMy8Iyddg;Zu^~' );

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
