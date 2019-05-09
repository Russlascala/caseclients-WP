<article <?php post_class(); ?>>
    <?php echo get_post_format(); ?>
    <a href="<?php the_permalink(); ?>"><h2><?php the_title(); ?></h2></a>
    <!-- the thumbnail images for posts -->
    <a href="<?php the_permalink(); ?>"><?php the_post_thumbnail( 'thumbnail', array( 'class'=> 'img-fluid') );?></a>
    <!-- instead of thumbnail use array( 275, 275 ) for custom sizes -->
    <!-- WordPress Funtions that have get need an echo command before  -->
    <p>Posted on <?php echo get_the_date(); ?> by <?php the_author_posts_link(); ?></p>
    <p>Categories: <?php the_category( ' ' ); ?></p>
    <p><?php the_tags( 'Tags: ', ', ' ); ?></p>
    <p><?php 
    //Controls where the read more will go.
    the_content( $more_link_text , $strip_teaser );
    /* the_excerpt(); */
    ?></p>
</article>