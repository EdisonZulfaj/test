<?php
    if (!is_active_sidebar( 'main-sidebar' )) {
        return;
    }
?>

<asdie id="secondary">
    <?php dynamic_sidebar( 'main-sidebar' ); ?>
</asdie>