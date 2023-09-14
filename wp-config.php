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
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'wptheme-01');

/** Database username */
define('DB_USER', 'root');

/** Database password */
define('DB_PASSWORD', '');

/** Database hostname */
define('DB_HOST', 'localhost');

/** Database charset to use in creating database tables. */
define('DB_CHARSET', 'utf8mb4');

/** The database collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');

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
define('AUTH_KEY',         'mSWi{3#VrpH04<siwM]%e)N)dcbf;4~: ;l&34jk|88MH%SwJ}>FjMBXilO_u97e');
define('SECURE_AUTH_KEY',  '_JuQ%ZM]BZBu{W!1==(pTUt@KvfTSJ92:PbS)kXa=!)qD29(mGGdy$7oG($<S>8n');
define('LOGGED_IN_KEY',    '[iF@b(C8#-,eu-<w)_9Tl?X>*Qz2L(+:w:WQb]9~x$n]MeH,ZIi 6{0)dMET=,A0');
define('NONCE_KEY',        'XFQ13NqL7e8%oE]gYW%LxbjmqIW:[= !Aw|9vK/|9nfy$tA8J^;l<8(G&[Wuf+t5');
define('AUTH_SALT',        ';9pUK28`+.L8jdzKq]3^^>b+~Y,O.U)kR[QX6z$P/VQO`H&F&bt~sd%}~i-g*|~Q');
define('SECURE_AUTH_SALT', 'Uf`KgpFC@,i(%%}ug~|4T2:}mSBVJJA IqE@k>kz-%]@G=3XrcaUt[Si2:axdbo@');
define('LOGGED_IN_SALT',   '/7 <T 345hs/r=r{O+R[ il7I_`W)0{luzP+AVzN#N)#7}]+)VYmPgEg`o$z{[m/');
define('NONCE_SALT',       'kmTfY6:N3L+TB``^-q?UGk9IRvri2&qQE|7JC.wCFfp5=zQ%Z2pAX_KTMz+G%i`L');

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
define('WP_DEBUG', false);

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if (!defined('ABSPATH')) {
  define('ABSPATH', __DIR__ . '/');
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';


// Avod ftp in plugin installation and deletion
define('FS_METHOD', 'direct');
