<?php get_header(); 
// This file gets content to go to an archive of the link pressed date author or category.
?>

<!-- <img src="<?php header_image(); ?>" height="<?php echo get_custom_header()->height; ?>" width="<?php echo get_custom_header()->width; ?>" alt="" class="img-fluid" /> -->

    <div class="content-area">
        <main>
            
            <section class="middle-area">
                <div class="container">
                    <div class="row">
                        <div class="col-12">
                            <div class="error-404">
                                <header>
                                    <h1>Page not found<div class="lineFade-all"></div></h1>
                                    <p>Unfortunately, the page you tried to reach does not exist on this site!</p>
                                </header>
                                <div class="error">
                                    <p>How about doing a search?</p> 
                                    <?php get_search_form(); ?>  
                                    <?php the_widget('WP_Widget_Recent_Posts', array('title' => 'Latest Posts', 'number' => 3)); ?>                         
                                </div>
                            </div>
                        </div>
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