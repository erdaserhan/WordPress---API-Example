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
define( 'DB_NAME', 'apiwp' );

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
define( 'AUTH_KEY',         '@3Y`IL5+H=u]ItZT8t/^:=[]`r#j?`b1)l_U ]qo$Gexj F~dzLk{>2 >9m|@s:V' );
define( 'SECURE_AUTH_KEY',  'z)7L{BF/)]N1$}sme)DWL[jCJ@e2uf/gA_*}R.VN_Pk~g.Dt^>yGBr27)01b^sgS' );
define( 'LOGGED_IN_KEY',    'o::ufe`[^-Y^t_0{ D rju)<Hay&~[|Q0+K1L1f$M[!ImH<K8R9QvYN4(R1:x~D!' );
define( 'NONCE_KEY',        'CdzZ1&6Jkap@z_@hv3hvC!3Z[IY2Fzz-F?sXzW.;MO^gI/K=s7f~FJu|/iWz](+d' );
define( 'AUTH_SALT',        'Ol-%)vEz<Qe;PC=.kfW8TU_^c.Gj{2L)|C5.e`@2&F9DUQmQ.=q/lf7pzZWPO#&t' );
define( 'SECURE_AUTH_SALT', '#+Qb9{fMK#Zc`W3Q]G?}#BCQ@J.paQfw!Le:xZKfYjqiy>eo+wpddij-0f&xp_=G' );
define( 'LOGGED_IN_SALT',   'Z&o=02!Yww^WO>JSn$K3J8Mi^f7TKN5xgs_yth %J3y<p3ru0%kkD@^,{(6fd5BF' );
define( 'NONCE_SALT',       'n{bMuc2gmjtKIw0;Ns;[J;2Iyezb4f|%XYBo7Iwf!P--Z$ZRZa14#&&7P!hT4=.X' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'apiwp';

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
