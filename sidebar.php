<aside class="l-main__right"> <!-- 変更 -->
    <div class="l-sidebar">
        <div class="c-button__close"></div> <!-- ハンバーガーメニュー追加 -->
        <a class="l-sidebar__menu" href="#">Menu</a>

        <?php wp_nav_menu( array(
            'menu' => 'sidebar-menu',
            'menu_class' => 'l-sidebar__menu__list',
            'container' => false,
            'theme_location' => 'side_nav',
        ));
        ?>

    </div>
</aside>