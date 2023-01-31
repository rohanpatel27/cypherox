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
define( 'DB_NAME', 'cypherox' );

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
define( 'AUTH_KEY',         '/YjQCC|(CARdvZS%yRj*q@GQ`W&1z%j>]N|c)rc8z|Mtx3sibArczDsDt;Lq]C&s' );
define( 'SECURE_AUTH_KEY',  ';,GEOj:eElc U0&/jneJo~d&!;`k#@b0riSQML3DC+*T$[04<dG%1IWz_Hr8X5p=' );
define( 'LOGGED_IN_KEY',    'CNDI2X5Oi3+k:w99Gh_y]WO,7#,{,SIm)Z6 &8TWGd5`T >0)Uq%S*Ry_4vn)prQ' );
define( 'NONCE_KEY',        '#8Mepy1~ymuJeq0 |:8 []+vA3x7gAH9Ge4:U|qL=d{ 4&R$`&p(kZ.3S{,_=(O/' );
define( 'AUTH_SALT',        'cj$q3+E6P;F5YbIPRkmvMv&Uo279L:<s9Pl)QD[5dLx2>/I?>tNuJ^8fcd}+C+$X' );
define( 'SECURE_AUTH_SALT', ';IbsuGH9j-qo AZ0=ev{^)RnioQU:lw-aP,CKh1QUadt(KiRY[[l+87tQgKNv8vC' );
define( 'LOGGED_IN_SALT',   '&V(Po0&4={8WaHT+cHu{rEB#xXpnLGb1NH|K9-cvtGd#im?eectm.1<@A-.E:Ec2' );
define( 'NONCE_SALT',       't|>3vUdGU}P3p(Q?X)dg$u/H0<Ucf3m{=-[[yhUd3GzCmPV[$/D89orQLZCfW7(l' );

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
