<?php

//Begin Really Simple SSL session cookie settings
@ini_set('session.cookie_httponly', true);
@ini_set('session.cookie_secure', true);
@ini_set('session.use_only_cookies', true);
//END Really Simple SSL
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
define( 'DB_NAME', 'u260729894_zR7GM' );

/** Database username */
define( 'DB_USER', 'u260729894_VZHtO' );

/** Database password */
define( 'DB_PASSWORD', 'Npi7kelPSS' );

/** Database hostname */
define( 'DB_HOST', 'mysql' );

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
define( 'AUTH_KEY',          'bsp[Jzpdj,h#F}%A-8Pp5=tc|O_dW.&$);j<l zaLO,2EczbWKf2:KVO{+cr^-]5' );
define( 'SECURE_AUTH_KEY',   'S&*imQTEuGY;k9Yox[ew 5BHe{Q}$g%mvowPKWyDGASiuS{,&89.({>$Elwe=,  ' );
define( 'LOGGED_IN_KEY',     ',Kg:lza1}(gS?wX b!Kc_7@AI[AiF=lYS+nM#P0E4wY q0MBLd[%xkG/:<_m[ S:' );
define( 'NONCE_KEY',         'T]K#GAMVSV:@l`$YiG1b`=3(&}L#QrZoBro<^S+68VowOcR%}Ob_Sb/ L|xLk?te' );
define( 'AUTH_SALT',         'Ffh,;C+Z4Da;8_`)y@mkMs+T3Be!A,jOr28*Z=r1s-rm)BJ?)5`{]G}I`uk3d@!r' );
define( 'SECURE_AUTH_SALT',  'QNa/<J&J@%,_,w80KAxVz7tMfDm4dF5Ts;I>6N(p/8Is0uxO.(8-f@cCWQ%TA,P=' );
define( 'LOGGED_IN_SALT',    '$dHp?IN+)vhr+ZB8`EfA (]Q7NwYi( e<yI&ZRWX?U?$NU%=RkcTXDT/&z(=$4/T' );
define( 'NONCE_SALT',        '>B_tp8M]CqC7G+q5D6S6VHiab|rOi@/8L.XQq1%v-_a~KVM BMn0_ eDX2]8id*}' );
define( 'WP_CACHE_KEY_SALT', '=(eqs*h6bVU>:&#L!H2o4`eUT,3#?E1x]]o]XSt{qm^G$1wD!)*{WZ[utV~c%1vr' );


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



define( 'WP_AUTO_UPDATE_CORE', 'minor' );
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
