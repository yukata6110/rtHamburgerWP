<?php 
    //テーマサポート
    function custom_theme_support() {
        add_theme_support('html5', array(
            'search-form',
            'comment-form',
            'comment-list',
            'gallery',
            'caption',
        ));
        add_theme_support('post-thumbnails');
        add_theme_support( 'title-tag');
        add_theme_support( 'menus');
        register_nav_menus( array(
            'footer_nav' => esc_html__( 'footer navigation', 'rtHamburger'),
            'categoru_nav' => esc_html__( 'category navigation', 'rtHamburger'),
        ));
        add_theme_support( 'editor-styles');
        add_editor_style();
    }
    add_action('after_setup_theme', 'custom_theme_support');


    function readScript() {

        $theme_version = 1.0 ;

        //ress
        wp_enqueue_style( 'ress',get_theme_file_uri('/css/ress.css'),array(),$theme_version);

        //robot
        wp_enqueue_style('robot','//fonts.googleapis.com/css2?family=M+PLUS+1:wght@400;700&display=swap',array(),"");
        
        //mplus
        wp_enqueue_style('mplus','//fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap',array(),"");
        
        //style.css
        wp_enqueue_style( 'main_style',get_theme_file_uri('/css/style.css'),array('ress'),$theme_version);

        //fontawasome
        wp_enqueue_style( 'fontawasome',get_theme_file_uri('/css/all.min.css'),array(),"");
        
        //js
        wp_enqueue_script( 'main_js',get_theme_file_uri('/js/main.js'),"","",true);
    }
    add_action('wp_enqueue_scripts','readScript');