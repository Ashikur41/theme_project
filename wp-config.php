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
define( 'DB_NAME', 'theme_project' );

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
define( 'AUTH_KEY',         'KBPb=@N#,!WkN)l:!Zxh0Im(U2`b}wQk%M(eHv*G3Z~U^D%,(*;;cWLcx?Q%E:-q' );
define( 'SECURE_AUTH_KEY',  'ms~!mp#xfje:dU,^IW^06qd-P;a+3xHd@%Io]eo[E&qAyjvAbVkr91.XwD}@>ko`' );
define( 'LOGGED_IN_KEY',    'mEnI%i(|m&D$9b.m6cjLy8$X4H`-LsNf)/jhC]aq^f6o!kBJVaWEsz.52hD CQ2M' );
define( 'NONCE_KEY',        'u^Mh]6|&>|U>[*si[2#W2^ikfCN5Pq-6Of]:F|#;o?H-mnV~MAJk>1v}M^KqH@Tx' );
define( 'AUTH_SALT',        'tT!Xi}BBftXL~>DxW@Mp~g2#IIN.TnE@.w$Q)V^WquYr;0UZQo8(]Y`)KBe;qL, ' );
define( 'SECURE_AUTH_SALT', 'N:=yIs-fC^k`aB99x9yPPeCAKGZrWA@-A~<^;Z2lYTFeuBi[Cd0h|Ml:ON?pv%bL' );
define( 'LOGGED_IN_SALT',   ']~7-r&+?T5`r4!;v7=]3|mDmWOqX.n$]1qZyKb3+&Zb7aTR+oS4] #S1bu*T)~L:' );
define( 'NONCE_SALT',       'X&n`I)GCD|:I:POIFt{j&SyIQ04^GX%3)s$6:rVY]USZ7{P<xZ)>`,J1frGurda~' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'pwp_';

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
