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
define( 'DB_NAME', 'wordpress' );

/** Database username */
define( 'DB_USER', 'wpAdmin' );

/** Database password */
define( 'DB_PASSWORD', 'password' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

/** The database collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

define( 'FS_METHOD', 'direct' );

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
define('AUTH_KEY',         '<(BZ!|6wq7v[4y:jw;~w|OHQ(HN`^@em<l!*Y8W3,ZNw/kgbIt*Z5oWF{;- ,Xl]');
define('SECURE_AUTH_KEY',  'tB1%hW53{Kp-#mS,g=@erq%I5J$~!vka`_B+Xuxj,J8E0s(v%$9MZ<]AJM8LuIOh');
define('LOGGED_IN_KEY',    'D|B,C&zE-9&wJ|L=owmk<42{5,s%iEY=4t|}@QfO*p9m_+X6Zde4S--;q_szm;dL');
define('NONCE_KEY',        'UXnv(r_EV6;n+%qYQs*MkjcomJ7W.94!#= `mw-16+L#b,~dFwQivB;!r!ACS tV');
define('AUTH_SALT',        ')jrLHMc`BAT;0&]Ri%[l$k0bXvlgj>4U=+,+iobG7j{So_{pry@kC#_|SZ&+e0mF');
define('SECURE_AUTH_SALT', 'JFn|V{kSz4svtwVBSp%_V2&vqp~}BI0BRr !j3<?ncN?@F+fbDDxaPenpGW+Pjo$');
define('LOGGED_IN_SALT',   '|gS55^RyIMT2}dZc=l}=P7Us|&yt~p^PH,EfNR 32O<||@oLbj15tuqv,Z6tgKwG');
define('NONCE_SALT',       '6!{qyheQ=i|iWhKK`;b?o7,VR`C6Q)LVWi=<c*`2eZ%ZUp|*N>$E+|<H<AP%|RD6');
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
