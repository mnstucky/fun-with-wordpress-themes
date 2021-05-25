<?php

get_header();

?>
<div class="simple-container">
<?php

if (have_posts()) :
    // Load posts loop.
    while (have_posts()) : the_post(); ?>
        <article class="post">
            <h2><a href="<?php the_permalink() ?>"><?php the_title() ?></a></h2>
            <?php the_content() ?>
        </article>
<?php endwhile;
else :
    echo '<p>There are no posts!</p>';
endif;

?>
</div>
<?php

get_footer();

?>