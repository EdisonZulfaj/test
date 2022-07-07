<article id="post-<?php the_ID(); ?>">
    <header id="entry-header">
        <?php the_title() ?>
        <div class="bypass">
            <?php the_author_posts_link() ?>
        </div>
    </header>
    <div class="entry-description">
        <?php the_content(); ?>
    </div>
</article>