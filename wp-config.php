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
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'hanifacraft' );

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
define( 'AUTH_KEY',         'OpaArKfs9YA4Ci,._bB&g_ys6H,h2f]OZwI*O4fSN&F_]>$<6$8>N hKWPC;i_So' );
define( 'SECURE_AUTH_KEY',  '#(Hu;sRr1T6KThfKI%UhXIdm!o1-+leOhfIn9Nze}?^5C[r3*<NZj6aaiL^sga7N' );
define( 'LOGGED_IN_KEY',    'sIpQ0,0axkeWLB;O^`rv1NE20e*&yzd@OcbkkG7dMhz:N(X^h X%uuu?xJbl^_7S' );
define( 'NONCE_KEY',        'mb#4B#l.V51xo<,q*r/J,^4S?+d& }IEszsoD5sSyIu_vF3l:]H~flnU],=)60DH' );
define( 'AUTH_SALT',        'D~@Jx)o,*z>OVKsqg`O+}*P>qh~ED2Z~t&KC=4`4$[J+$I*vdLk-Z~AQXzX2-8V@' );
define( 'SECURE_AUTH_SALT', ';e<5;,RlQ`i27k`N8^V2jn{LG5}uLBS=vgw!b+r?XYItppg#I7@Pn5 0e])Z@*LZ' );
define( 'LOGGED_IN_SALT',   'U}@>PU%<@I6s7rRDL*29di}TMt(Wd}dpN_2pJhF?GO=)A($j^$Lb72${lC2+|raA' );
define( 'NONCE_SALT',       'FqRPF{=W0-fQr6MX37i%$ugMMka4%Y,N$_/ofA6kZf^_Xy+>?L3HDl~Z,DA)M7zi' );

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
 * @link https://wordpress.org/documentation/article/debugging-in-wordpress/
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
