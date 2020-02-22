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
define( 'DB_NAME', 'db_retiro' );

/** MySQL database username */
define( 'DB_USER', 'admin' );

/** MySQL database password */
define( 'DB_PASSWORD', '123456' );

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
define( 'AUTH_KEY',         'u]VJ:,]/#>T!}uf3`JJT*9,KK)[@~%7T>C-Ze&;LiUQ^xikw8W0`I[Q*){91r|/F' );
define( 'SECURE_AUTH_KEY',  'gD5tu8/cwjqq]]0*~qT:^D:#SZM[<I:z3a9Uj86fQ-?*rM> 0tjYr4VHR:j@uacJ' );
define( 'LOGGED_IN_KEY',    'k>UkXK0o]CA@k@9pU$#=s;1$%Q]cFDGG&LS_3VCHU{05+% ?qS+o>.:;9LN5a7{{' );
define( 'NONCE_KEY',        't]?a(7W<Se =%(*7f)Ycv2-,6Oe}]g>[65pKlI=|!U9K+#7F<nYP]}9To4=^ZRR~' );
define( 'AUTH_SALT',        '#_WCEm7oNqaU)ZFF=]Xj~bMxl&[TQgcx0(xS2JFJs+ww;&U*0^}I2D-P[^)?`^@e' );
define( 'SECURE_AUTH_SALT', 'OX3:~wV:(5nV.7zxk7^~Mfx=8cK4AO%FV5D(h@}:jRy[sWm;ulC+`}ih*phnC&0{' );
define( 'LOGGED_IN_SALT',   's>2nF:K+Wx_kp*{<=K3?0%GI0`%BCUni[cicM:jYpkBF]hGu@,0kz5.J58>!9O87' );
define( 'NONCE_SALT',       '#mQD@ZuuLK#{M50m-WJ7{:u-Fk{LvDI+4M-#grAHUFW45dL34lsk/h&>YL2VXe]u' );

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
