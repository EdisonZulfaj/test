<article id="post-<?php the_ID();  ?>" <?php post_class(); ?> >
    <header class="entry-header">
        <?php the_title( '<h1>', '</h1>' ); ?>
        <div class="bypass">
            <?php
                
            ?>
            <?php esc_html_e( 'Author:', 'neoubt' )  ?>&nbsp;<?php the_author();  ?>
        </div>
    </header>
    <div class="entry-content">
        <p>
            <?php the_content();  ?>
        </p>
    </div>
</article>