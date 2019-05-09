<?php get_header(); 
// This file gets content to go to an archive of the link pressed date author or category.
?>
<!-- 
This adds a header to the page
<img src="< ?php header_image(); ?>" height="< ? php echo get_custom_header()->height; ?>" width="< ?php echo get_custom_header()->width; ?>" alt="" class="img-fluid" /> -->

    <div class="content-area">
        <main>
            
            <section class="middle-area">
                <div class="container">
                    <div class="row">
                        <div class="archive col-md-9">
                            <?php

                            the_archive_title('<h1 class="archive-title">','</h1>');   
                            //add a description in posts->categories for this to work.
                            the_archive_description();                     

                            // If there are any posts
                            if( have_posts()):
                                // While have posts, show them to us
                                while( have_posts() ): the_post();

                                // This function gets the file from template-parts/content.php 
                                get_template_part( 'template-parts/content', 'archive' );

                                endwhile;
                            ?>
                            <div class="row">
                                <div class="pages col-md-6 text-left">
                                    <?php previous_posts_link("<< Newer posts"); ?>
                                </div>
                                <div class="pages col-md-6 text-right">
                                    <?php next_posts_link("Older posts >>"); ?>
                                </div>
                            </div>
                            <?php
                            else:
                            ?>

                            <p>There is nothing yet to be displayed!</p>

                            <?php endif;?>
                        </div>
                        <aside class="sidebar col-md-3 h-100"><?php get_sidebar( 'news' );?></aside>
                    </div>
                </div>

            </section>
           <!--  <section class="map">
                <div class="container">
                    <div class="row">
                        Map
                    </div>
                </div>
            </section> -->
        </main>
    </div>

<?php get_footer(); ?>