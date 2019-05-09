<?php get_header(); ?>
    <div class="content-area">
        <main>
            <!-- 
            This adds a header to all of the pages if wanted. Currently only displays on home page.
            <img src="< ?php header_image(); ?>" height="< ? php echo get_custom_header()->height; ?>" width="< ?php echo get_custom_header()->width; ?>" alt="" class="img-fluid" /> -->

            <!--<section class="slide">
                <div class="container">
                    <div class="row">
                        Slide
                    </div>
                </div>
            </section>
            <section class="services">
                <div class="container">
                    <div class="row">
                        Services
                    </div>
                </div>
            </section>-->
            <section class="middle-area">
                <div class="container">
                  <h1>News<div class="lineFade-all"></div></h1>
                    <div class="row">
                        <div class="news col-md-9">
                            <?php

                            // If there are any posts
                            if( have_posts()):
                                // While have posts, show them to us
                                while( have_posts() ): the_post();

                                // This function gets the file from template-parts/content.php 
                                get_template_part( 'template-parts/content', get_post_format() );

                                endwhile;
                                /* Shows next and prev pages in the news page. Max post per page is 5 can be changed in settings-reading*/
                                the_posts_pagination(
                                    array(
                                        'prev_text' => 'Previous',
                                        'next_text' => 'Next',
                                        'screen_reader_text' => 'Pages: '
                                    )
                                );
                            else:
                            ?>
                            
                            <p>There is nothing yet to be displayed!</p>

                            <?php endif;?>
                        </div>
                        <aside class="sidebar col-md-3 h-100"><?php get_sidebar( 'news' );?></aside>
                    </div>
                </div>

            </section>
            <!-- <section class="map">
                <div class="container">
                    <div class="row">
                        Map
                    </div>
                </div>
            </section> -->
        </main>
    </div>

<?php get_footer(); ?>