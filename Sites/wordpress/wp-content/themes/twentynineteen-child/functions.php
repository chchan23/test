<?php
    require_once 'vendor/autoload.php';



    add_action( 'wp_enqueue_scripts', 'my_theme_enqueue_styles' );
    function my_theme_enqueue_styles() {
        wp_enqueue_style( 'parent-style', get_template_directory_uri() . '/style.css' );
     
    }

    add_action( 'wp_enqueue_scripts', 'my_theme_enqueue_styles_two' );
    function my_theme_enqueue_styles_two () {
    
        $parent_style = 'parent-style'; // This is 'twentyfifteen-style' for the Twenty Fifteen theme.
    
        wp_enqueue_style( $parent_style, get_template_directory_uri() . '/style.scss' );
        wp_enqueue_style( 'child-style',
            get_stylesheet_directory_uri() . '/style.scss',
            array( $parent_style ),
            wp_get_theme()->get('Version')
        );
    }

    // function ip_details($IPaddress) 
    //   {
    //     $json       = file_get_contents("http://ipinfo.io/{$IPaddress}");
    //     $details    = json_decode($json);
    //     return $details;
    //   }
    //   $IPaddress  =   $_SERVER['REMOTE_ADDR'];

    //   $details    =   ip_details("207.189.10.246");

    //  print_r($details);
?>