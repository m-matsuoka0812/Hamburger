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
            'footer_nav' => esc_html__('footer navigation', 'Hamburger'),
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
    add_filter( 'pre_get_document_title', 'Hamburger_title' ); 

// jQuery動作
add_filter( 'wp_default_scripts', 'dequeue_jquery_migrate' );
function dequeue_jquery_migrate( $scripts){
    if(!is_admin()){    
        $scripts->remove( 'jquery');
    }
}

function Hamburger_script(){
    $locale=get_locale();
    $locale=apply_filters('theme_locale',$locale,'Hamburger');
    wp_enqueue_style( 'Font-Awesome','//use.fontawesome.com/releases/v5.15.0/css/all.css', array(), 'v5.15.0' );
    if($locale=='ja'){
        wp_enqueue_script( 'Adobe-Fonts', get_theme_file_uri('/js/adobe-fonts.js'), array('jquery'), '1.0.0' ,true ); //font
    }
    wp_enqueue_style( 'style', get_theme_file_uri('css/hamburger.css'), array(), '1.0.0' );
    wp_enqueue_style( 'style', get_theme_file_uri('/style.css'), array(), '1.0.0' );
    wp_enqueue_script( 'jquery','//ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js',"","3.6.0",true );
    wp_enqueue_script( 'side-menu', get_theme_file_uri('/js/side-menu.js'), array('jquery'), '1.0.0' ,true ); //sidebar
}
add_action( 'wp_enqueue_scripts','Hamburger_script' );

/*
function load_js() {
	//管理画面を除外
	if ( !is_admin() ){
		//事前に読み込まれるjQueryを解除
		wp_deregister_script( 'jquery' );

		//Google CDNのjQueryを出力
		wp_enqueue_script( 'jquery','//ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js',"","3.6.0",true );

		//自作スクリプトや、jQueryのライブラリも同様に読み込みます。
		wp_enqueue_script( 'jquery', get_theme_file_uri('/js/jquery.js'), array('jquery'), '1.0.0' ,true ); //sidebar
        wp_enqueue_script( 'Adobe-Fonts', get_theme_file_uri('/js/adobe-fonts.js'), array('jquery'), '1.0.0' ,true ); //font
	}
}
add_action( 'init', 'load_js' );

function my_delete_local_jquery() {
    wp_deregister_script('jquery');
}
add_action( 'wp_enqueue_scripts', 'my_delete_local_jquery' );
*/

// *ウィジェット機能
function Hamburger_widgets_init() {
    register_sidebar (
        array(
            'name'          => 'Menu list',
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