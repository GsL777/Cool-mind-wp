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
define( 'DB_NAME', 'cool-mind' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

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
define( 'AUTH_KEY',         'eU}<do6[Mhq3Mxeg)n)w;!#+Q;Q %W<1?H9xcXnZ:wrP=6u-soZw^0#G2WlJ5/DO' );
define( 'SECURE_AUTH_KEY',  'EHs=T@%-ou/#c8hU5!^m)K|M`vL=7`PQkO(lv@mxQuE-j.>d+@/i|[]8!rp=[*T%' );
define( 'LOGGED_IN_KEY',    '#7aHwX(Z=< %C!,L6rC3iRl4C0(b2{ZCDS`q}b-kA%Ha]]6 0Q%mZ9GAxHI?Y?Ec' );
define( 'NONCE_KEY',        'f)>u,,&#~ D_.dnfapxh=.{f1m~g!V)7V3F&N5ooNZ#rfUmq4ph;g-p.zxJr4nto' );
define( 'AUTH_SALT',        'Xvty3#$u/i31|]m!,2pKVT&nN5$9BwjLVml3ti+K5Nf<QhUro44 r~yjLGlSRy8|' );
define( 'SECURE_AUTH_SALT', 'CG<gks=wfAmIV_`#Be?$cIpky3W8$6=>(h&=Ah8T&ia1aGtJk{&<0$)2)E1,1ah3' );
define( 'LOGGED_IN_SALT',   'l*^,.!`O`<$}SsyHV/QD$SuneBG3`,[rG>7/4BqGP^#0LFgf RJUYA5=3oo%y8i-' );
define( 'NONCE_SALT',       'w~6?ZQ|Z)n<^+K7}1-BS$N#9H&meStjkYq}ox{h@4hGNk2WYpo^(3u$3ZnWQY>8r' );

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
define( 'WP_DEBUG', true );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once( ABSPATH . 'wp-settings.php' );
