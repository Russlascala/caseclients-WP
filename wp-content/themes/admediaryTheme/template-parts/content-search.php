
 <!-- Checks if search is a post or page -->
 <article <?php post_class(); ?>>
    <?php
    if ( 'post' == get_post_type()){
        /* If search comes up as a post display this */
        ?>
        <a href="<?php the_permalink(); ?>"><h2><?php the_title(); ?></h2></a>
        <p>Posted in <?php echo get_the_date(); ?> by <?php the_author_posts_link(); ?></p>
        <p>Catagories: <?php the_category( ' ' ); ?></p>
        <p><?php the_tags( 'Tags: ', ', ' ); ?></p>
        <p><?php the_excerpt(); ?></p>
    <?php
    } elseif ( 'page' == get_post_type()){
        /* If search comes up as a page display this */
        ?>
        <a href="<?php the_permalink(); ?>"><h2>Page - <?php the_title(); ?></h2></a>
        <?php the_excerpt(); ?></p>
        <?php
    }
    else {
        
    }

    ?>
</article>