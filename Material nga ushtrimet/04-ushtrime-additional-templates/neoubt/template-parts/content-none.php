<article id="post-<?php the_ID(); ?>" <?php post_class(); ?> >
    <header class="entry-header">
        <h1>
            <?php esc_html_e( '404 - Not found', 'neoubt2' ) ?>
        </h1>
    </header>
    <div class="entry-description">
        <?php esc_html_e( 'Try searching for it!', 'neoubt2' ) ?>
        <? get_search_form(); ?>
    </div>
</article>

