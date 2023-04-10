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
define( 'DB_NAME', 'pragatizone' );

define( 'FS_METHOD', 'direct' );

define( 'WPCF7_AUTOP', false );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', 'radhaPUJA987_' );

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
define( 'AUTH_KEY',         'hF|eK$tA2(fyl(A~4yaK6Ddg@Xdt~Qq[9*dqvRDH)+{ 5;?0K_`3Al1@6JOj/I5+' );
define( 'SECURE_AUTH_KEY',  '@a#2V#b`mXotSt>r(l[7R:vTQnXvB%/9Bq89}0[Ki7u]6tsoMVi7F_b)AbZq9s=0' );
define( 'LOGGED_IN_KEY',    'lP[!ut%r:QK1Wab|U[Ap-ZSwJDe89<qrYieT=j8_bg3D|*@a5?-%<*nnQ?^6]dJ&' );
define( 'NONCE_KEY',        ',ArQ+Q(E#}~F.tZo{UsoWX *KNOu3<,KtC` Q!qQLIDs Pv!~5S`t<J8[q|9A8<=' );
define( 'AUTH_SALT',        'F?.BXh_=GBLF|gU#j+9m1z8:+/-C3M+Yp>5qJf%0| w@}J?ht&,6e2p}zdlkg#> ' );
define( 'SECURE_AUTH_SALT', 'U3lGDbRlt3TSOe.<<V@[J|]v.r4rv``e23tfj@7pu1hYT* 50DKu3:`+;NJp<7+/' );
define( 'LOGGED_IN_SALT',   'JbW&:m(2%O~`G_Q#[!9yIzVvB&6Et)nk=r5)*|^SB8rf(]Fk%yd4FU}!1nxsPFJP' );
define( 'NONCE_SALT',       '%0(p9rh%(Fs,0!:^H)B{] [QLs^]A(*4IB7TSK#UjYv79UqH+#=4nq@CzQy..lrG' );

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

define('DISALLOW_FILE_EDIT', false);
define('DISALLOW_FILE_MODS', false);