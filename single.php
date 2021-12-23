    <?php get_header(); ?>
                
                <div class="p-single c-media">
                    <div class="p-single__top c-media__top__single" style="background-image: url(<?php echo wp_get_attachment_url(get_post_thumbnail_id(get_the_ID()),); ?>)">
                        <h1 class="p-single__title"><?php the_title(); ?></h1>
                    </div>
                </div>

                <div class="c-comments__block">
                    <?php if(have_posts() ) : 
                        while(have_posts() ) : the_post(); ?>
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
