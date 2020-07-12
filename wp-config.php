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
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'beelieve' );

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
define( 'AUTH_KEY',         '[T_VBbq@6 (CJ[Yz{6^Z,#*9`B]Rf+==NUpIb*fcE.N&*z]T laa*]_jh8Lh;2=e' );
define( 'SECURE_AUTH_KEY',  'Wy$B=O8@M6x3y4!|=,B~~Be{=%];Yi0/R.,$ah@CwfbwsO-0)gI$qTXjsI)idCT=' );
define( 'LOGGED_IN_KEY',    ')^nl1gOg+<(5y5w/kd %LW>gbc^AqvQ>|U)IM5Ad1Fb7-Pkz6S}>i]3#Tx:7G%3l' );
define( 'NONCE_KEY',        'kY*d4 {P26*(3&s?}lC6StXe{aT3=/1(&sUUUv7D `V67^pj *eL1*{5~K$F>1sA' );
define( 'AUTH_SALT',        '!1Zdhs8L=,cdDJOAW+glozq 8#MF8}@AZzR%P21lmF~1H_Q9F&t6[S!U)?Blx+fY' );
define( 'SECURE_AUTH_SALT', '719qj:AEr+^M%)S$I{Pgg)1umy_Oe6Qn/93}^v$U8sfn*qw>Pn$q-Ng]y*ab|=VK' );
define( 'LOGGED_IN_SALT',   'R4r?HclPMfQbEtw.@E$)e}Rvq;&R;@3Fj$0?ttuqjeOa@lTqvF#RZb{6=fWTxGp{' );
define( 'NONCE_SALT',       '~=!:W`!qv ?)LCk &@bcz>dWyy[o52z<,& Q<eGjgW6)3F2S^7fLt3UOp?]v(*DS' );

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'be_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 *
 * For information on other constants that can be used for debugging,
 * visit the Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once( ABSPATH . 'wp-settings.php' );
