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
 * * Localized language
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'local' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'root' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

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
define( 'AUTH_KEY',          'ay0Q@},Fhd~Qi}Dhm#Cg0z;tJ- -=$GpCJ]3%$J3#;]b-Yz=Tk|{Lu;[8;bvx0@R' );
define( 'SECURE_AUTH_KEY',   '*5r`rjPyQq:Zpu $84.|DRKt;RS!Q]iN`-0gKI~v]bIR~2r1D/ ($}S<Sb!9QV!H' );
define( 'LOGGED_IN_KEY',     'A<[b|7@:`Dgu{e={SmNove,<VuuEL.(z S_>]^B%G:w:~4Bo dJ/w_9S3ndZ[Znq' );
define( 'NONCE_KEY',         'Zb&zc`{Z^pY!r>Q<: @#91RvO}3&1f>.-7+xb^0ysKUD!D6^}Y}y>Vdt#Ywpk/:F' );
define( 'AUTH_SALT',         'jrna|:xX$4FJ~t5Nr1{VJS164XcEi={e^5FP4>_-*|0z59 1Lu3MGrihR:aF$gC ' );
define( 'SECURE_AUTH_SALT',  ',}1>,~@00,qLX7X:xyhSqOZM+6RXO87{r*>4VYex-M,r5_wecF7ZUYQ*p RUSW,H' );
define( 'LOGGED_IN_SALT',    'zfpJ2H~neX}U/* -:&J2Ken)evXwJPJ|wxn3t??b&UHIN,73X7ktC fIa(h:CW(C' );
define( 'NONCE_SALT',        'k);=[Mq:DgEw; hK`)snS5]0dMW@6sW1yhuA)`)^vV/4)`GX1|%iVtK8zn3OTFyA' );
define( 'WP_CACHE_KEY_SALT', 'Ql6Lf95f=J7^?PY#nIytJQs{1<$B;AAuR(tlDG{5-*V$`$UU>u|9fi @KK1j[D;W' );


/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';


/* Add any custom values between this line and the "stop editing" line. */



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
if ( ! defined( 'WP_DEBUG' ) ) {
	define( 'WP_DEBUG', false );
}

define( 'WP_ENVIRONMENT_TYPE', 'local' );
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
