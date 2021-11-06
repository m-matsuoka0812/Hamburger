<?php get_header(); ?>

                <div class="p-page c-media"> <!-- 追加 -->
                    <div class="p-page__top c-media__top__page"> <!-- 追加・変更 -->
                        <h1 class="p-page__title"><?php the_title(); ?></h1> <!-- 追加 -->
                    </div>
                </div>

                <div class="c-comments__block"> <!-- 変更 -->
                <?php if(have_posts() ) :
                    while(have_posts() ) : the_post();
                ?>
                    <div id="post-<?php the_ID(); ?>"<?php post_class(); ?>>
                        <?php the_content(); ?>
                    </div>
                <?php endwhile;
                else:
                ?>
                <p>表示する記事がありません</p>
                <?php endif; ?>

            </article>

            <?php get_sidebar(); ?>
                
        </div>

        <?php get_footer(); ?>
