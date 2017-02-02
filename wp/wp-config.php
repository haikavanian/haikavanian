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

// ** MySQL settings ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'haikavanian' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
define( 'DB_HOST', '127.0.0.1' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         '=s3lBb-kY}!mtA?5h4U#B&JT%~8}3lFk}vo?4D/}G0=bxL5qy@8zJGl:i;gN(vB,');
define('SECURE_AUTH_KEY',  'O0~R=b+GPpe;~?E+&Ogm?3foa?-Q-U[bwW gto2b/g%T=f^iUJmP)^Qihc;]|-%J');
define('LOGGED_IN_KEY',    'kpfU`*zF(*a|6ydWB/p+-Q~Iq~H|[*^yp8f:K-sG`t3oA:]])<_x4e?5+v|t=rCi');
define('NONCE_KEY',        '!jiL8r*S/-JFEiCB_qbs2*A)@%*qw/Qz`rd0hN`E5(-gK9#8.= ZOV)+})/{3-I5');
define('AUTH_SALT',        '|5RNf;ZX+_02{+~43FXw]aCkGeW|ZS{t={{@+njA^5& 61oy-x0}5o3L:pi?7+{N');
define('SECURE_AUTH_SALT', 'C|U(^;_^,c&M(YFeTpW8r98RZ]]P)]jdOKRZ+.dP/K6Tlt;@oY+e4|Tk:)9BI|4w');
define('LOGGED_IN_SALT',   'F/onh5K[*32t>sC^KDiHZPXT3K~+2l%@h_T1Hql5#3/xQ8Eiwz^2?s=zsv-j@Ug?');
define('NONCE_SALT',       '3yUqwiyoO@|dgYF6?O_%yJ/!o~V&a4NIQU$I^df_ngY58bD67!nF`3w(!_d>La+S');


/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';




/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) )
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
