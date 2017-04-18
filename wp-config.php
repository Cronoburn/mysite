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

 /** MySQL settings - You can get this info from your web host ** //
 /** The name of the database for WordPress */
 define('DB_NAME', 'wp2');

 /** MySQL database username */
 define('DB_USER', 'wp');

 /** MySQL database password */
 define('DB_PASSWORD', 'milkbone');

 /** MySQL hostname */
 define('DB_HOST', 'localhost');

 /** Database Charset to use in creating database tables. */
 define('DB_CHARSET', 'utf8mb4');

 /** The Database Collate type. Don't change this if in doubt. */
 define('DB_COLLATE', '');

 /**#@+
  * Authentication Unique Keys and Salts.
   *
    * Change these to different unique phrases!
     * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
      * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
       *
        * @since 2.6.0
         */
         define('AUTH_KEY',         'rcAYN{CgDC_Uf^wmq.7tcx1cA|Y<SeD(H.Ti42JwmE1$8t5%vX&6`E6}OE`0+{+,');
         define('SECURE_AUTH_KEY',  'IH^+%#Il <jm$Lij,hUXYH.]w0yPp}FhmF8C5n|@n&y9H]q|JMiIDp~G-<_L){<E');
         define('LOGGED_IN_KEY',    'iQ3,:]*5B;PG![g=;z?Xd6$#_{WwA*e)/dBWurcF1;cGfy0NSlu%V^2:KZi<y7d_');
         define('NONCE_KEY',        '.[L+ywIE@;+Llaq.GV0HfOnH%H|tNg1i=m|XfFm D(8%CAG.Apn{E&+%o9pU}=<8');
         define('AUTH_SALT',        ',$pcth!y>!TmVd$YzP/:*T/XEd;^o.!8b6$YXL{F.@d#.h?8#51}6PN0Ac[X9?5n');
         define('SECURE_AUTH_SALT', '$^^!,zM[3QG JAQ|I5:3mM>4r(}El]j%nRH!KOV (BE|`LMpv@t|X!@2[H:EU9?&');
         define('LOGGED_IN_SALT',   'DBs_2X,TLEHQ3CPM,v`H[:HNp&?}9Gb!VXe@a|E6j<Wv6~bQ]C/bH;8YK`0zaEQz');
         define('NONCE_SALT',       'TJ5$%4hD(vL/}0DLvkGp(e$rB.1Z/>pw-c;6mWc,<p]FLD`>.j3r5r3Gzi#Du4ig');

         /**#@-*/

         /**
          * WordPress Database Table prefix.
           *
            * You can have multiple installations in one database if you give each
             * a unique prefix. Only numbers, letters, and underscores please!
              */
              $table_prefix  = 'wp_';

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
                         define('WP_DEBUG', false);

                         /* That's all, stop editing! Happy blogging. */

                         /** Absolute path to the WordPress directory. */
                         if ( !defined('ABSPATH') )
                         	define('ABSPATH', dirname(__FILE__) . '/');

                         	/** Sets up WordPress vars and included files. */
                         	require_once(ABSPATH . 'wp-settings.php');

