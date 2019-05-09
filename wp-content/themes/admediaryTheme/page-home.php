<?php get_header(); ?>
    <!-- Header Image -->
    <div class="view">
        <div class="container">
            <div class="row">
                <div class="col-12 text-center heroContent">
                    <h2 class="heroTxt animated bounceInUp">
                        Legal Leads That Convert to Cases!
                    </h2>
                    <div class="btnContainer"> 
                        <a href="<?php echo get_page_link(12); ?>" class="ctaBtn btn btn-lg btn-default animated bounceIn">Get Started <i class="fas fa-angle-double-right"></i></a>
                    </div>
                    <!-- <div class="btnContainer"> 
                        <a href="<?php echo get_page_link(18); ?>" class="ctaBtn btn btn-lg btn-default animated bounceIn">Talk to us <i class="fas fa-angle-double-right"></i></a>
                    </div> -->
                    
                </div>
                
                <div class="col-md-6 secondHeroText textShadow topBtmMargin" >
                    <h4>Simplified Client Acquisition:</h4>
                    <p>Order live, pre-qualified leads that meet your needs in your area!</p>
                </div>
                <div class="col-md-6 topBtmMargin">
                    <div class="poweredByBox">
                        <p>Powered By</p>
                        <img class="admLogo" src="http://localhost/caseclients/wp-content/uploads/2019/05/admediary-logo.png">
                    </div>
                </div>
            
            </div>
        </div>
    </div>

    <div class="content-area">
        <main>
            <!-- First Section Mission Statement 
            <section class="mission">
                <div class="container">
                    <div class="row">
                        <h2 class="home-h2">
                            <?php
                            if(is_active_sidebar('home-heading')){
                                dynamic_sidebar('home-h2');
                            }
                            ?>
                        </h2>
                        <div class="col-md-4 align-self-center animation-element-btn ">
                            <?php 
                            if(is_active_sidebar('mission-image') ){
                                dynamic_sidebar('mission-image');
                            }
                            ?>
                            <p class="home-tagline align-middle">Driven By Results.</p>
                            <div class=" col-12 " id="services-cta-container">
                            <a href="<?php echo get_page_link(290); ?>" class="btn btn-lg btn-default startBtn" >Our Brands </a>
                            
                            </div>
                        </div>
                        <div class="col-md-8" id="missionTxt">
                            <?php
                            if(is_active_sidebar('mission-text')){
                                dynamic_sidebar('mission-text');
                            }
                            ?>
                        </div>
                    </div>
                </div>
            </section>-->
            <section class="topBtmMargin">
                <div class="container">
                    <div class="row">
                        <div class="col-md-4 threeInfoHome">
                            <i class="fas fa-clock"></i>
                            <h4>Real Time, Exclusive</h4>
                            <p>Our Leads are sold to one attorney at a time, delivered fast to give you an advantage over your competition.</p>
                        </div>
                        <div class="col-md-4 threeInfoHome">
                            <i class="fas fa-user-check"></i>
                            <h4>Validation</h4>
                            <p>Every lead is pre-screened and validated to ensure the phone number and email address is correct. This ensures high contact and conversion rates!</p>
                        </div>
                        <div class="col-md-4 threeInfoHome">
                            <i class="fas fa-bullseye"></i>
                            <h4>Powerful Targeting</h4>
                            <p>Zero in on the specific areas of law and the geographic regions you need. Our staff will consult with you to help optimize your targeting.</p>
                        </div>
                    </div>
                </div>
            </section>
            <!-- Second Section Services -->
            <section class="services topBtmMargin">
                <div class="container">
                    <h1>Case Type Leads We Provide Our Member Attorneys:</h1>
                    <div class="row">
                        <!-- <div class="col-md-6 animation-element" id="animateLeft" >
                            <div class="services-item">
                                <?php 
                                if(is_active_sidebar('services-1') ){
                                    dynamic_sidebar('services-1');
                                }
                                ?>

                            </div> 
                            <div class="leadsProvided">
                            </div>
                        </div> -->
                        <!-- <div class="col-md-6 animation-element" id="animateRight"> -->
                            <!-- <div class="services-item">
                                <?php 
                                if(is_active_sidebar('services-2') ){
                                    dynamic_sidebar('services-2');
                                }
                                ?>
                            
                            </div> -->
                            <div class="leadsProvided">
                                <ul>
                                    <li>
                                        Motor Vehicle Accident
                                    </li>
                                    <li>
                                        Personal Injury
                                    </li>
                                    <li>
                                        Worker’s Comp
                                    </li>
                                    <li>
                                        Medical Malpractice
                                    </li>
                                    <li>
                                        Mass Tort
                                    </li>
                                    <li>
                                        And More..
                                    </li>
                                </ul>
                            </div>

                        <!-- </div> -->
                        <div class="col-12 text-center"> 
                        <a href="<?php echo get_page_link(12); ?>" class="btn btn-lg btn-default" id="more-services-btn">MORE SERVICES </a>
                        </div>
                    </div>
                </div>
            </section>
            <!-- Fourth Section Client Logos Area -->
            <section class="client-logos-section">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-3 col-md-6 col-sm-12">
                            <div class="client-logo">
                                <?php 
                                if(is_active_sidebar('client-logo1') ){
                                    dynamic_sidebar('client-logo1');
                                }
                                ?>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6 col-sm-12">
                            <div class="client-logo">
                                <?php 
                                if(is_active_sidebar('client-logo2') ){
                                    dynamic_sidebar('client-logo2');
                                }
                                ?>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6 col-sm-12">
                            <div class="client-logo">
                                <?php 
                                if(is_active_sidebar('client-logo3') ){
                                    dynamic_sidebar('client-logo3');
                                }
                                ?>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6 col-sm-12">
                            <div class="client-logo">
                                <?php 
                                if(is_active_sidebar('client-logo4') ){
                                    dynamic_sidebar('client-logo4');
                                }
                                ?>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- Third Section Dynamic News Area -->
            <section class="featured-area">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <h2 class="heading-featured ourTeam">More From Admediary</h2>
                        </div>
                        <!-- <aside class="sidebar col-md-3"><?php get_sidebar('home');?></aside> -->
                        <div class="news col-md-12">
                                <div class="container">
                                    <div class="row">
                                        <?php
                                        // Second loop for featured content 2 cols
                                        /* Gets the posts from the database based on cat or id
                                        The wp_query basically gets most rescent posts and features them on the home page. */
                                        //array instead of query string (above)

                                        $args = array(
                                            'post_type' => 'post' ,
                                            'posts_per_page' => 3,
                                            /* for not using certian categories
                                            'category__not_in' => array(7), */
                                            'category__in' => array(6,7),
                                            /*
                                            will make offset -> skip the first post 
                                            'offset' => 1 */
                                        );
                                        $secondary = new WP_Query( $args );

                                        if( $secondary->have_posts()):
                                            // Custom loop to put articles in the home page
                                            while( $secondary->have_posts() ): 
                                                $secondary->the_post();
                                        ?>
                                        <div class="col-lg-4 animation-element-2 animatePost ">
                                            
                                            <?php get_template_part('template-parts/content', 'featured'); ?>
                                        </div>
                                
                                        <?php
                                            endwhile;
                                            wp_reset_postdata();
                                        endif;
                                        ?>
                                    </div>
                                </div>
                        </div>
                    </div>
                </div>
            </section>
            
            
        </main>
    </div>

<?php get_footer(); ?>