<?php
define( 'WP_CACHE', true );
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
 * * Localized language
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'local' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'root' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

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
define( 'AUTH_KEY',          'aGk./C=)AS`7K>q+w%QdJ`rsSM)=t0N5Osmy6lD|FA[HrbAseG1=:z`$^UQcdEDP' );
define( 'SECURE_AUTH_KEY',   'IYhF:{p*=|$c($4.,0W]_Ww:m[WMy4i#DJH$6$vVFQJWPxWE&cV%3Gd/ch+xAN$V' );
define( 'LOGGED_IN_KEY',     '&3-fD7oikPP3|qX.;L4|<X_7>8mi,O.SmDMf5!hPOQL1B!; )W?=d[5zkz`;7C0]' );
define( 'NONCE_KEY',         '8c.YYBK(mHjmMX%P[|&sF^d=. HY7lr!_nZ_3~kj]bT`R,~6Sc:&.]+Ms($VXE3@' );
define( 'AUTH_SALT',         '0*=6g@7f)86.c%{s8V!:[W45h~z;?! Pw%O5K/C9<Bi&w%%}^h^@q_]LG7*E g?H' );
define( 'SECURE_AUTH_SALT',  'ahqb)H@UIcef(J0~Nhnz:foi<o,ZHl1IqzgZk>[Dd{EnJIX/am%In^aHnS1FCNFb' );
define( 'LOGGED_IN_SALT',    '|U, 7^oCT*]n:ar1NbaM3p%p _knjUv/^|s~*6P~sW%MqQtyOslI8?imw}jq72oJ' );
define( 'NONCE_SALT',        'v/-NqF=%Fi:<UowP84i/7sS,2oai?JXL1ab0o$Xxd+:Q&2Gn+O(V#OC0=Q#;@{Q)' );
define( 'WP_CACHE_KEY_SALT', ' AEcfuRGsOfn}1lN|JM/[?nB@1EYx1Jpsv]xs1CbMEItaDwjM9[}jk[.{=szx2)^' );


/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';


/* Add any custom values between this line and the "stop editing" line. */



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
if ( ! defined( 'WP_DEBUG' ) ) {
	define( 'WP_DEBUG', false );
}

define( 'WP_ENVIRONMENT_TYPE', 'local' );
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
