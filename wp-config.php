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
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'sistemanuevodefinitivoreal' );

/** MySQL database username */
define( 'DB_USER', 'admin' );

/** MySQL database password */
define( 'DB_PASSWORD', '3a04632fab0820c5091a8fd5d9716e19e13f4c5f74c72de7' );

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
define( 'AUTH_KEY',         '/B:t$&2 ?#lDW$O5ps3Nipm,(^o$P9R8vXQ]#q4*f[2/[0HDJx**LRjEPZmdbWO7' );
define( 'SECURE_AUTH_KEY',  'O:mh$F:)<WrjX2*^$P@9iNAa$3`bKnFMJUyUF!(3)t*g,Nef4c)Z`HIB*u7%{w:+' );
define( 'LOGGED_IN_KEY',    'D*z5r1LhUr1)LWC8?w&g7C<|)^Tqyz*T*Z|s/>7g;_y`qtgA+f3KQlf2&i0ukzK#' );
define( 'NONCE_KEY',        'LAuS{HNrx=/L!s+M^::Po1i03wkq12~%gc?H$g~rh%DrkGs&ICo&bbDr5P*-q;oL' );
define( 'AUTH_SALT',        'Zop`]fV4Yx `>6>qHc+Qe9+=Ylq7*A}|i+t@0gER{2!;f&aHG7N}/,$@dRqB)eaG' );
define( 'SECURE_AUTH_SALT', '96a[[1hvKxhr1+37N&;+V7vsezHN}n{$Kg>`A73e^Ehjf{mq&4? K:$1uF@ff8Dq' );
define( 'LOGGED_IN_SALT',   '`PEOXY+?zT-.X;)U5yPB;HfFB9+ITi<w6xni,?B<1o]0_(xk31c=[Z-ZY(,&a.c)' );
define( 'NONCE_SALT',       'a:tZi7$IG5~a,!OxkvO}(+_:n|JW4V:!VT;PkC>:kZ8doH.3A8lA^!=HTk~g <hg' );

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
 * visit the Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once( ABSPATH . 'wp-settings.php' );
