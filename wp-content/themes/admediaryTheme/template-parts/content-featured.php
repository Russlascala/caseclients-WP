<article <?php post_class( array( 'class' => 'featured') ); ?>>
    
    <div class="thumbnail">
         <!-- the thumbnail images for posts -->
         <a href="<?php the_permalink(); ?>"><?php the_post_thumbnail( 'large', array( 'class'=> 'img-fluid') );?></a>  
    </div>
    
    <a href="<?php the_permalink(); ?>"><h2 ><?php the_title(); ?></h2></a>
    
    <div class="meta-info" > 
        <p><?php the_excerpt(); ?></p>
        <p>
            By: <span><?php the_author_posts_link(); ?></span><br>
            Categories:<span> <?php the_category( ' ' ); ?></span>
            <?php the_tags( 'Tags: <span>', ', ', '</span>' ); ?><br><?php echo get_the_date(); ?>
        </p>
        
    </div>
    
</article>