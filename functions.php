<?php
    // テーマサポート
    function custom_theme_support(){
        add_theme_support( 'html5', array(
            'search-form',
            'comment-form',
            'comment-list',
            'gallery',
            'caption',
        ));
        add_theme_support( 'post-thumbnails' );
        add_theme_support( 'title-tag' );
        add_theme_support( 'menus' );
        register_nav_menus(array(
            'side_nav' => esc_html__('sade navigation', 'Hamburger'),
            'footer_nav' => esc_html__('footer navigation', 'Hamburger'),
            'category_nav' => esc_html__('category navigation', 'Hamburger')
        ));
    }
    add_action('after_setup_theme','custom_theme_support');
    
    //投稿記事タイプごとに実装する場合
    add_filter('the_content', 'wpautop_filter', 9);
    function wpautop_filter($content) {
        global $post;
        $remove_filter = false;

        $arr_types = array('searchform'); //自動整形を無効にする投稿タイプを記述
        $post_type = get_post_type( $post->ID );
        if (in_array($post_type, $arr_types)) $remove_filter = true;

        if ( $remove_filter ) {
            remove_filter('the_content', 'wpautop');
            remove_filter('the_excerpt', 'wpautop');
        }
        return $content;
    }

    /*
    //＜p＞の自動挿入は残しつつ、HTMLソースが勝手に消されるのを止めたい場合
    add_action('init', function() {
        remove_filter('the_title', 'wptexturize');
        remove_filter('the_content', 'wptexturize');
        remove_filter('the_excerpt', 'wptexturize');
        remove_filter('the_title', 'wpautop');
        remove_filter('the_content', 'wpautop');
        remove_filter('the_excerpt', 'wpautop');
        remove_filter('the_editor_content', 'wp_richedit_pre');
    });

    add_filter('tiny_mce_before_init', function($init) {
        $init['wpautop'] = false;
        $init['apply_source_formatting'] = true;
        return $init;
    });
    */

    /*
    //Raise Tech テキスト(13/18)
    remove_filter('pre_term_description', 'wp_filter_kses');
    remove_filter('term_description', 'wpautop');
    */

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
            'name'                 => 'Menu list',
            'id'                      => 'menu_widget',
            'description'        => 'メニューの一覧です',
            'before_widget'    => '<div id="%1$s" class="widget %2$s">',
            'after_widget'      => '</div>',
            'before_title'       => '<h2 class="c-category-title">',
            'after_title'          => "</h2>\n",
        )
    );
}
add_action( 'widgets_init', 'Hamburger_widgets_init' );


//親テーマでフックに登録された関数を消すコード
function remove_parent_theme_hook_func(){
    remove_filter('hook_name','func_name',10);
    remove_action('hook_name','func_name',10);
}
add_action('after_setup_theme','remove_parent_theme_hook_func');


/* フックされている関数のチェック ※指定のアクション／フィルターフック確認関数 */
function show_hook_func($attr){
    global $wp_filter;
    if($wp_filter[$attr[0]]){
        $hookFunc='<h2>'.$attr[0].'に登録されている関数</h2>';
        foreach($wp_filter[$attr[0]]->callbacks as $cbKey=>$cb){
            $hookFunc.='<h3>priority:'.$cbKey.'</h3><ol>';
            foreach($cb as $funcKey=>$func){
                $hookFunc.='<li>['.$funcKey.']</li>';
            }
            $hookFunc.='</ol>';
        }
        //$hookFunc.='<h2>詳細</h2><pre><code>'.strip_tags(print_r($wp_filter[$attr[0]],true)).'</code></pre>'; //さらに詳細を表示できますが、メモリ不足でエラーが出るケースがあるので、コメントアウトしてあります。
    } else {
        $hookFunc='現在このフックに登録されている関数はありません。';
    }
    return $hookFunc;
}
add_shortcode('hook_func','show_hook_func');


/* ページネーション*/
function the_pagination( ) {
    global $wp_query ;
    $big = 999999999 ;
    if ($wp_query->max_num_pages <= 1 ) 
        return ;
    echo '<nav class="p-pagination">' ;
    echo paginate_links( array(
        'base'           =>  str_replace( $big, '%#%', esc_url( get_pagenum_link( $big ) ) ),
        'format'        => ' ', 
        'current'       => max(1, get_query_var( 'paged' ) ),
        'total'           => $wp_query -> max_num_pages,
        'prev_text'    => '<<',
        'next_text'    => '>>',
        'type'           => 'list',
        'end_size'     => 1,
        'mid_size'     => 1
    ) );
    echo '</nav>' ;
}

/*
function posy_has_archive( $args, $post_type ) {
    if ( 'post' == $post_type ) {
        $args['rewrite'] = true;
        $args['has_archive'] = '商品’';
        $args['rewrite'] = true;

    }
}
*/