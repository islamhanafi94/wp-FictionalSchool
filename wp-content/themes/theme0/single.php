<?php while (have_posts()):?>
<?php the_post()?>
    <h3><?php the_title()?></h3>
    <p><?php the_content()?></p>
<?php endwhile?>