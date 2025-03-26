<?php function custom_theme_support() {
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
?>

<?php function readScript() {
    //ress.css
    wp_enqueque_style('ress',get_template_file_uri('ress.css'),array(),$theme_version);
        
    //robot
    wp_enqueque_style('robot','//fonts.googleapis.com/css2?family=M+PLUS+1:wght@400;700&display=swap',array(),"");
    
    //mplus
    wp_enqueque_style('mplus','//fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap',array(),"");
    
    //style.css
    wp_enqueque_style( 'main_style',get_template_file_uri('style.css'),array(),$theme_version);
    
    //js
    wp_enqueque_script( 'main_js',get_theme_file_uri('/js/main.js'),"","",true);
    }
    add_action('wp_enqueque_scripts','readScript');
?>
