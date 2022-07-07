<?php get_header(); ?>
    <div id="primary" class="content-area">
        <main id="main" class="site-main">
            <h1>
                <?php esc_html_e( 'Searched for: "' . get_search_query() . '"' ) ?>
            </h1>

            <?php if (have_posts()) : while(have_posts()) : the_post() ?>
                <?php get_template_part( 'template-parts/content', 'posts' ); ?>
            <?php endwhile; else: ?>
                <?php get_template_part( 'template-parts/content', 'none' ); ?>    
            <?php endif; ?>
        </main>
    </div>
<?php get_footer(); ?>