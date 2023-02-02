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
define( 'DB_NAME', 'drc' );

/** Database username */
define( 'DB_USER', 'phpmyadmin' );

/** Database password */
define( 'DB_PASSWORD', 'root' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The database collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );
define( 'FS_METHOD', 'direct' );


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
define( 'AUTH_KEY',         '[UV(P_tQ#}<hq1d#M1968Li?k!;KB?aOujw9hH}=sr,<YsMthn9w| iL]xZQ-k:8' );
define( 'SECURE_AUTH_KEY',  '/uptEYtQ8nTXh50lj_;}S4&GtL@y3i<[N^o18:ZK^@C%s<kDGhn=wrGS1]72G!e#' );
define( 'LOGGED_IN_KEY',    '3dG)M8}s^ImI![X/SYl()DCg@`9 [t)4MAz%c<m&jIK,{}yvU&/za7w~c{Gz^Wua' );
define( 'NONCE_KEY',        'm8SkFvb8A<Ewh(Mn-x/6IIMv>ryG$c4;IVcih~E(i?~5a2w,,R,_]8p^zV9-qi5W' );
define( 'AUTH_SALT',        '6RjA[3#Cpb2y#~UW9dBj[?t(Lr:YAT34Ox7paI;RX|FrM@xgBko/}d9dZdra4K>Q' );
define( 'SECURE_AUTH_SALT', 'Ltoi?Pb4 7jP?e^uL[oOT^=#5F@acT_6Pdq.IZ.jN/C_&~(y,>@Y`0ghG]<3tFT1' );
define( 'LOGGED_IN_SALT',   'Q)(g]Edjmt0Bg0J+7WAy^<eWr5<wShkFqU=@%30Ct,jmUCmbY..4f|=yu[pMPm,G' );
define( 'NONCE_SALT',       'K5M6}h]o|#sYFjIC&o7u}:w;{rR[bRCk2}v]oV|0l1vdLB]:GB4![pf;XM}D:J2J' );

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
