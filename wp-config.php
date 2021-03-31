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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'mysite' );

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
define( 'AUTH_KEY',         'wvL&?nMA-9H,OF#T85*Z_PBo=;~ijFy,T/9(|#h~S~t#adxH+}X]6<r#3P; z|/X' );
define( 'SECURE_AUTH_KEY',  '!Q#Rify1&Wspn~}@dbQE]zx}nc:,qAg7Y4&//.>Mi@<=phjF_i14oqHtiL^8R1z0' );
define( 'LOGGED_IN_KEY',    '+(M_Y_E}=1UCYinY3dfZDFVw4>R}vL@<RAds&>paZ_BhEvl}*E]f&U}Hh}{(&/ 1' );
define( 'NONCE_KEY',        '8)B7Z3,b.^HV a]dRuf.87~+8)|i7s/%BnY]&++RbN<T/=RO8F_s^`Fk7@OHPiCp' );
define( 'AUTH_SALT',        'WiM FjBpL<h=ex!^Q/_SgGBq9v`xVVrSi(=!8v4%GQ.*LkK:a<Upf]+w+t0{$5Y{' );
define( 'SECURE_AUTH_SALT', '%BY5B`ZsxdFaXEhy{?35`8H2FSH>zzRc| TS<c-[A`;CH,mbNbb}-ypGasf`8nu&' );
define( 'LOGGED_IN_SALT',   'k+4#_a|pp/lQ[U}m!3$8kQk|KSvz|VeYk:QwOds)z_/P4[I?wT-{7re,lhWC)qG&' );
define( 'NONCE_SALT',       'FhV-#D~bP#kX{R0;gMd/9Hw@q_ao]tJ+S[n_#hjNo^lDS`&@HOh^WPZC${3yy97^' );

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'ms_';

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

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
