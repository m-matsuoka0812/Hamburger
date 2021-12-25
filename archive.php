    <?php get_header(); ?>              
                
                <div class="p-archive c-media">
                    <div class="c-media__top__archive">
                        <h2 class="p-archive__title">Menu:</h2>
                        <p class="p-archive__subtitle">
                            <?php if (is_category()) {
                                single_cat_title();
                            }?>
                            </p>
                    </div>
                </div>

                <div class="c-comments">
                    <!-- <?php echo category_description(); ?>-->
                    <h4 class="c-comments__title">小見出しが入ります</h4>
                    <p class="c-comments__text">
                        テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。
                    </p>
                </div>

                <div>

                <?php if (have_posts()) : ?>
                    <?php while (have_posts()) : the_post(); ?>

                    <figure id="post-<?php the_ID(); ?>" <?php post_class('p-archive__card c-media__menu'); ?>>
                        <?php the_post_thumbnail(); ?>
                        <figcaption class="p-archive__card__intro">
                            <?php the_title('<h3 class="p-archive__card__title">','</h3>'); ?>
                            <h4 class="p-archive__card__subtitle">小見出しが入ります</h4>
                            <?php the_excerpt(); ?>
                            <button class="c-button__archive"><a href="<?php the_permalink(); ?>">詳しく見る</a></button>
                        </figcaption>
                    </figure>

                    <?php endwhile; ?>
                <?php endif; ?>

                <div class="p-pagination">
                    <?php wp_pagenavi(); ?>
                    
                    <?php the_posts_navigation(array( 
                        'next_text' => '&lt;&lt;  前へ',
                        'prev_text' => '次へ  &gt;&gt;',
                    )); ?>
                    <?php wp_link_pages(); ?>
                <div>
            </article>

        <?php get_sidebar(); ?>
        
    </div>

    <?php get_footer(); ?>
