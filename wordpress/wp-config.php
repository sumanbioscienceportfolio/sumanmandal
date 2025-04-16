<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the website, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'sumanmandal_db' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', '' );

/** Database hostname */
define( 'DB_HOST', 'localhost/sumanmandal/sumanmandal' );

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
define( 'AUTH_KEY',         '/>Y9n2m,Ju8QJI R=yqB[+1zm?TJ m[e3/v1dvk Bk:G(At[58*tlipP)-IE/nzN' );
define( 'SECURE_AUTH_KEY',  'jLbIrOi|hu&iFQT3P4_`7E50EzvEQ;6yBEG,CGYZJiK`W$<qGc^ae;EpmPX}vT|S' );
define( 'LOGGED_IN_KEY',    '=>w5nK=-WSBYL5&@@~pE0C-K7mA&S<=mH;oMtJ{7*r(ZV/@J+Nq(/jB&zKpm]@,5' );
define( 'NONCE_KEY',        'k4~aQY2S/x~`Kx%KCH%4]90w=1,pPF620}J,Q{LG%wO_U=;bBI7#/W<`B%k /DiC' );
define( 'AUTH_SALT',        ']vLPwy`9+$&%%!?OR$5{3SetrK7L<g%Q&&f};~`giI6JF}5z`?5eOq!L594(|)1)' );
define( 'SECURE_AUTH_SALT', 'Pr?)l85%$Zp0!^;dpm]k7BaZWb^er<<#2hlajnytmj.D_e@WEj|6enrFW6l^?Arx' );
define( 'LOGGED_IN_SALT',   '(<R?Mi%p!DHfoIn+M :SE|hq:H$56]VM{L.+*,c#=fS;6~ZbxReXV?RK#fD&8u+?' );
define( 'NONCE_SALT',       '/$aMlRU N+nX4vf}0}1ct&fx C|+7V<Ow0`WjVNbC5Ft|kx~`;L?~ytrbr}hIRvi' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 *
 * At the installation time, database tables are created with the specified prefix.
 * Changing this value after WordPress is installed will make your site think
 * it has not been installed.
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/#table-prefix
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
 * @link https://developer.wordpress.org/advanced-administration/debug/debug-wordpress/
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
