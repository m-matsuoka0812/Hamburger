<?php
    // テーマサポート
    function custom_theme_support(){
        add_theme_support( 'html5', array(
            'search-fore',
            'comment-form',
            'comment-list',
            'gallery',
            'caption',
        ));
        add_theme_support( 'post-thumbnails' );
        add_theme_support( 'title-tag' );
        add_theme_support( 'menus' );
        register_nav_menus(array(
            'footer_nav' => esc_html__('footer navigation','Hamburger'),
            'category_nav' => esc_html__('category navigation', 'Hamburger')
        ));
    }
    add_action('after_setup_theme','custom_theme_support');

    // タイトル出力
    function Hamburger_title( $title ) {
        if ( is_front_page() && is_home() ) { 
            $title = get_bloginfo( 'name', 'display' ); 
        } elseif ( is_singular() ) { 
            $title = single_post_title( '', false ); // 投稿記事をタイトル
        }
            return $title;
        }
    add_filter( 'pre_get_document_title', ' Hamburger_title' ); 

function readScript(){
    wp_enqueue_style( 'style',get_template_directory_uri().'/style.css', array(), '1.0.0' );
    wp_enqueue_style( 'Font-Awesome','//use.fontawesome.com/releases/v5.15.0/css/all.css', array(), 'v5.15.0' );
    wp_enqueue_script( 'jquery','//code.jquery.com/jquery-3.6.0.min.js',",",true);
    wp_enqueue_script( 'jquery',get_template_directory_uri().'/js/jquery.js','jquery','1.0.0',true); //font・sidebar
}
add_action( 'wp_enqueue_scripts',' readScript' );

// *ウィジェット機能
function Hamburger_widgets_init() {
    register_sidebar (
        array(
            'name'          => 'All Menu',
            'id'            => 'menu_widget',
            'description'   => 'メニューの一覧です',
            'before_widget' => '<div id="%1$s" class="widget %2$s">',
            'after_widget'  => '</div>',
            'before_title'  => '<h2 class="c-category-title">',
            'after_title'   => "</h2>\n",
        )
    );
}
add_action( 'widgets_init', 'Hamburger_widgets_init' );