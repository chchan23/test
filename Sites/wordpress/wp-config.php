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
    define('DB_NAME', 'wordpress');
    
    /** MySQL database username */
    define('DB_USER', 'root');
    
    /** MySQL database password */
    define('DB_PASSWORD', 'crYpt0!!');
    
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
    define('AUTH_KEY',         '4gb8^w-y|pF`b6QHBj+!/W5f+-V!69V&Sl4v[7v6:{%1h}d74X`.K8G&{y9u>)D-');
    define('SECURE_AUTH_KEY',  'CF)B)Sgz1[F+P-_~a7:9Vl{lePlPNR8$i=TzlOL%~Y7+SMS5P__`l.`1TD_rWlV%');
    define('LOGGED_IN_KEY',    'e#wwli{.UQ3gM_VVe9I(FwQCe`gy!a2n(__korc/2@7X-R[uN1uARrAv_a~E[&}V');
    define('NONCE_KEY',        '_Vi14s0xRf#yp1/:tb|TQ%&/[a=HpYrnZ!57N8p]$VSfKWbto-Fd ~.nf81|%NGo');
    define('AUTH_SALT',        '. 2]_?Zdz)T)(W.,G,^a|u``*I9  V3}o!nrI~lMx4=0FdPDgRCeGI]Oxm25@WYi');
    define('SECURE_AUTH_SALT', 'bL#]bfC+}J]D&DUAN>)kqr@0gKp8unKm/qDre>u4vcHs[?s5#Ne@hw)M<+z5_FIO');
    define('LOGGED_IN_SALT',   'SBB/g$` cZ*ln*B(%V,t5{r!L2Q]VH:Q)aKPU}FAhm#_p70~++<;IP:jkHTE>kim');
    define('NONCE_SALT',       '[oeBK!9mhh<9u56<>`m[1e[+4{sbXZ8g_T!8;B?UAJp[HGH^dZ2zsl1_`Kp1 mkL');
    
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
