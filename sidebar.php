<aside class="l-main__right"> <!-- 変更 -->
    <div class="l-sidebar">
        <div class="c-button__close"></div> <!-- ハンバーガーメニュー追加 -->
        <a class="l-sidebar__menu" href="#">Menu</a>
        <?php
            if ( is_active_sidebar( 'menu_widget' ) ) :
                dynamic_sidebar( 'menu_widget' );
            else:
        ?>
        <div class="widget">
            <h2>No Widget</h2>
            <p>ウィジットは設定されていません。</p>
        </div>
        <?php endif; ?>
    </div>
</aside>