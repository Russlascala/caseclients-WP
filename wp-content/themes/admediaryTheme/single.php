<?php get_header();?>

<div id="primary">
    <div id="main-article" class="page-area">
        <div class="container">

            <?php
            while(have_posts() ):
                the_post();
                get_template_part( 'template-parts/content', 'single');
                ?>
                <!-- Shows the next and previous post titles when you are on the full post page -->
                <div class="row">
                        <div class="pages col-6 text-left">
                            <?php next_post_link('&laquo; %link'); ?>
                        </div>
                        <div class="pages col-6 text-right">
                            <?php previous_post_link('%link &raquo;'); ?>
                        </div>
                    </div>
                <?php
            endwhile;
            ?>

        </div>
    </div>
</div>

<?php get_footer();?>