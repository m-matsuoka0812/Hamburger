<!DOCTYPE html>
<html lang="<?php language_attributes(); ?>">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Raisetech　Task">
    
    <?php wp_head(); ?>
</head>

<body>
    <div class="l-main"> <!-- 変更 -->
        <article class="l-main__left"> <!-- 変更 --> 
            <!-- ハンバーガーメニュー -->
            <div class="p-bar">
                <button class="p-bar__button">Menu</button>
            </div>
            <!-- 追加分 -->
            <div class="l-header">
                <div class="l-header__left">
                    <a href="<?php echo esc_url( home_url( '/' ) ); ?>">
                        <h1><?php bloginfo( 'name' ); ?></h1>
                    </a>
                </div>
                <?php get_search_form(); ?>
            </div>
    