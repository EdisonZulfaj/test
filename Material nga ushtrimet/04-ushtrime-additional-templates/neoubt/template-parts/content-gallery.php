<article id="post-<?php the_ID(); ?>" <?php post_class( ); ?> >
    <header class="entry-header">
        <p><?php esc_html_e( 'You are currently looking at the gallery area', 'neoubt' ); ?></p>
        <span class="dashicons dashicons-format-gallery"></span>
        <?php the_title( '<h1>', '</h1>'); ?>
        <div class="bypass">
            <?php esc_html_e( 'Author:', 'neoubt2' ) ?> <?php the_author(); ?>
        </div>
    </header>
    <div class="entry-content">
        <?php the_content(); ?>
    </div>
</article>