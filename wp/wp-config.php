<?php

/** Enter environment connection details here.*/

$connections = array(
    
    "local" => array(
        "domain" => "localhost",
        "port" => 8080,
        "protocol" => "http",
        "db_name" => "haikavanian",
        "db_user" => "root",
        "db_password" => "",
        "db_host" => "127.0.0.1",
        "show_errors" => 1,
        "multisite" => 0,
        "db_prefix" => "wp_"
    ),
    "staging" => array(
        "domain" => "staging.haikavanian.com",
        "protocol" => "http",
        "db_name" => "wordpress",
        "db_user" => "tv",
        "db_password" => "cocacola",
        "db_host" => "localhost",
        "show_errors" => 1,
        "multisite" => 0,
        "db_prefix" => "wp_haikavanaian_staging_"
    ),
    "production" => array(
        "domain" => "mysite.com",
        "protocol" => "http",
        "db_name" => "local_db",
        "db_user" => "root",
        "db_password" => "root",
        "db_host" => "localhost",
        "show_errors" => 0,
        "multisite" => 0,
        "db_prefix" => "wp_"
    )
);

/* ====================================================================== */

/**
 * The base configurations of the WordPress.
 *
 * This file has the following configurations: MySQL settings, Table Prefix,
 * Secret Keys, WordPress Language, and ABSPATH. You can find more information
 * by visiting {@link http://codex.wordpress.org/Editing_wp-config.php Editing
 * wp-config.php} Codex page. You can get the MySQL settings from your web host.
 *
 * This file is used by the wp-config.php creation script during the
 * installation. You don"t have to use the web site, you can just copy this file
 * to "wp-config.php" and fill in the values.
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //

/** Database Charset to use in creating database tables. */
define("DB_CHARSET", "utf8");

/** The Database Collate type. Don"t change this if in doubt. */
define("DB_COLLATE", "");

/* Force WP to upload within the GUI, even if it thinks it can"t */
define("FS_METHOD", "direct");

foreach($connections as $envname => $env){
    if(false !== strpos($_SERVER["SERVER_NAME"], $env["domain"])){
        define("WP_ENV", $envname);
        define("WP_HOME", ($env["port"]) ? $env["protocol"]."://".$env["domain"].":".$env["port"] : $env["protocol"]."://".$env["domain"]);
        /** The name of the database for WordPress */
        define("DB_NAME", $env["db_name"]);        
        /** MySQL database username */
        define("DB_USER", $env["db_user"]);        
        /** MySQL database password */
        define("DB_PASSWORD", $env["db_password"]);        
        /** MySQL hostname */
        define("DB_HOST", $env["db_host"]);        
        ini_set("display_errors", $env["show_errors"]);
        define("WP_DEBUG", ($env["show_errors"]) ? true : false);
        if($env["multisite"]) {
          /* Multisite */
          define( "WP_ALLOW_MULTISITE", true );
          define("MULTISITE", true);
          define("SUBDOMAIN_INSTALL", true);
          define("DOMAIN_CURRENT_SITE", $env["domain"]);
          define("PATH_CURRENT_SITE", "/");
          define("SITE_ID_CURRENT_SITE", 1);
          define("BLOG_ID_CURRENT_SITE", 1);
        }
        $table_prefix = $env["db_prefix"];
        break;
    }
}

/**
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define("AUTH_KEY",         "s]],.t2<W&uJCw-$Rh&fnU|wH:up)OUi+Bq-X&+=D-E/R*)x&#~J*ho{C~VHfNWO");
define("SECURE_AUTH_KEY",  ",}LSKduoG%fS!h;+=+bl!!7xb#-.z[sqA Uj;`b+e|N8:&^DtA#z=mF10ds};$;?");
define("LOGGED_IN_KEY",    "QElDZ]>9d1|>W*Fd1OiG?{B<{AZF Qyo[zbO]NQZX42Kp4(YX^q-v70%%4ig(`,/");
define("NONCE_KEY",        "Y{R<,w!&E[|Ja)ZxzfV_FMGYJdLR c!9GL.jw`iq0>+CA=`Ou]dW>`=PB:}ja5Xg");
define("AUTH_SALT",        "].3DKhx5)YOw&5z2pplY,Bbw/)^ZYS:$EF+H}C+ )ugoU%($rF-{JsQzpxRxw44)");
define("SECURE_AUTH_SALT", "VzrDYTF~}:8|r<iL|LC&uA7|H.Y1o: VD+|-nw6pt9oiH[85}`[ue%373bQ][K! ");
define("LOGGED_IN_SALT",   "^aKy?+(nM+ivX1 Uqj5w@#,Z:e-x|`5QHztnSku|VJ(E/v:.hC3nLmEQ^u6pL$Sj");
define("NONCE_SALT",       "YB?@;s$GTNyabR0Ra@)g-+r]8*OWl@_<ze)Yq7Z!LDku+8 PdC^;a,KZ]!:B|6ra");



/* That"s all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( ! defined( "ABSPATH" ) )
  define( "ABSPATH", dirname( __FILE__ ) . "/" );

/** Sets up WordPress vars and included files. */
require_once ABSPATH . "wp-settings.php";
