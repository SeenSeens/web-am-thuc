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
define( 'DB_NAME', 'cuisine' );

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
define( 'AUTH_KEY',         'gO.B:uW$%XDzbE;Cg.Y-gu:r|?ODK^dX!s4&%3Y}leB/kq6cy=q)}uv$[0S&d2{W' );
define( 'SECURE_AUTH_KEY',  'wUfFx|W]|Y8>(I5z1J_g]5M9!x8*~cI(+?cDFbX9Vtmi^BVQ#n.V]Ddp:6rLU-QZ' );
define( 'LOGGED_IN_KEY',    ']V40{~2p_k<U~>ar}Red(o~ !{Zp2)i,^|{.T>}E$,A--~@?S/9v5nZba~<H8@=W' );
define( 'NONCE_KEY',        '2hBS>D5#$ U_M)Cl0@`B_E|<1;.(p5,CT]cqbyn{.&:9ThV,G<YK,Uwp X39a3Mr' );
define( 'AUTH_SALT',        ' S,iRwOvjtaYi{xH:VV[_ V2A8mx&L5IH)r*0Rh5Xp<|{>Nheh:hc0{-1&l:4z#u' );
define( 'SECURE_AUTH_SALT', 'uC^PENd5CfOeYBo{ H905N*Bvj#[>OpJW|$g_g^kh9vY13a$U{uHJp:#>!N?!!d]' );
define( 'LOGGED_IN_SALT',   '-{ou|_D=>FH bHz6r9pLh+n69}d{+y,nv/y62~OfqkSH,la2U)F8i{MM+M27|p7&' );
define( 'NONCE_SALT',       '?8vS2DmZJhB--k6Bwr,%9P()epUuS*&m=0PfWmU29.;_zey?E.kL)FRCmt)ilzsD' );

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
