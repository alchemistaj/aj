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
define( 'DB_NAME', 'dataentry' );

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
define( 'AUTH_KEY',         'bqH^5EP{R`1821mzp 9fw,ypS%E%MPz)W5.cuPQFw5W[` B{?;lbw-YPgWlk1!+z' );
define( 'SECURE_AUTH_KEY',  'iDpEMhZ@%BDZS:(ZCw9(46!JgaR.~p,[}RnsbHK-7!BSv&D4/o`K23G4Ir1D@TlV' );
define( 'LOGGED_IN_KEY',    '@eC4d88dz#;UBme6=m(fUoy-7nMP#XJbo,de9UmNt]<3etd?oLv~(P_v${%Up4MJ' );
define( 'NONCE_KEY',        'Cf?ms)5gSqKU%:e+_yeP[Xblab#*/~Vs-b@XPH>%[rYrg-mwnv{Ydm*W&:?BN:0e' );
define( 'AUTH_SALT',        'Fqoj.6n.&asg^h.OnqyF!w&:m_5fp~BNT%-]bMN<{`iVBbNq5j0WyOqWe7UOXgZL' );
define( 'SECURE_AUTH_SALT', 'uTKgTEG]Xs_KPt!f:HY&4XmIA,>&)S;mBij^3?Jci[``]y~Y}L1&r%b(m~j|eoa;' );
define( 'LOGGED_IN_SALT',   '#!)Co-o5^..s}q,D?%-Ke&H5sf_CxXL?*ZI_d;#xr$mmKy[RDt>V+WIjK^hzDl7E' );
define( 'NONCE_SALT',       '7k&_1I-UrOB7xy(tSKsX0#M{6&~~uccnYzE-_[F^4(9b:5AH[K=@pJ]6o[{uM_;W' );

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
