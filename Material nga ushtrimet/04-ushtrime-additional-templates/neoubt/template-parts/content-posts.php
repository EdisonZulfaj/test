<article id="post-<?php the_ID(); ?>">
    <header class="entry-header">
        <?php the_title( '<h1><a href="' . the_permalink() . '">', '</a></h1>' ) ?>
    </header>
    <div class="entry-content">
        <?php the_excerpt(); ?>
    </div>
</article>