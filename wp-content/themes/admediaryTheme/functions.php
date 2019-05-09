<?php 

// Includes stylesheet and script files
function load_scripts(){
    /* wp_enqueue_script 's function
    gets bootsrtap4 js
    1. the array calls jquery that is in wordpress so no need to link
    2. true value displays script link at the end of body defauly is false and that is the top of the head 
    */
    wp_enqueue_script( 'bootstrap-js', 'https://maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js', array('jquery'), '4.1.1', 'true' );
    
    /* gets bootstrap css file */
    wp_enqueue_style( 'bootstrap-css', 'https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css', array(), '1.0', 'all' );

    /* Gets Font Awesome Icons   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"> */ 
     wp_enqueue_style( 'font-awesome-css', 'https://use.fontawesome.com/releases/v5.4.1/css/all.css', array(), '1.0', 'all' );
  /* <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.4.1/css/all.css" integrity="sha384-5sAR7xN1Nv6T6+dT2mhtzEpVJvfS3NScPQTrOxhwjIuvcA67KV2R5Jz6kr4abQsz" crossorigin="anonymous"> */



    wp_enqueue_style('animate', get_template_directory_uri() . '/css/animate.min.css',array(), rand(111,9999), 'all');

    /* Wordpress hooks -> Gets the template.css file */
    wp_enqueue_style( 'template', get_template_directory_uri() . '/css/template.css', array(), rand(111,9999), 'all' );

    /* Custom script file at bottom of page */
    wp_enqueue_script( 'customJs', get_template_directory_uri() . '/js/script.js' , array(), '1.0', 'true', $in_footer = false );

    $wp_scripts = wp_scripts();

}
add_action('wp_enqueue_scripts', 'load_scripts' );

// Include custom navwalker
/* require_once('bs4navwalker.php'); */

// Register Custom Navigation Walker
require_once get_template_directory() . '/class-wp-bootstrap-navwalker.php';
//registers bootstrap navigation
register_nav_menus( array(
    'primary' => __( 'Primary Menu', 'admediaryTheme' ),
) );
// Register WordPress nav menu
/* register_nav_menu('top', 'Top menu'); */

// Main Configuration function 
function startwp_config(){
    
    // Creates the menus in wordpress, without it menus dont show up
    register_nav_menus(
        array(
            'footer_menu' => 'Footer Menu'
        )
    );

    $args = array(
        'height' => 225,
        'width' => 1920
    );
    // These are theme supports 
    // Adds custom header support 
    add_theme_support( 'custom-header', $args );
    // Adds thumbnail support still need to add this
    add_theme_support( 'post-thumbnails' );
    // Adds Specific post format support still need to add this might not add
    add_theme_support( 'post-formats', array( 'video', 'image' ) );
    // Adds custom logo support 
    add_theme_support( 'custom-logo' );
    // adds the title tag - reccommended for wordpress 4.1 and newer
    add_theme_support( 'title-tag' );
    
}
add_action( 'after_setup_theme', 'startwp_config', 0);

// Registering our sidebars
add_action( 'widgets_init', 'learnwp_sidebars' );
    function learnwp_sidebars(){
    /* Home Page Sidebars / widgets */
    /* Hero Content */ 
    /* Mission Img */
    /* register_sidebar(
        array(
            'name' => 'Mission Image',
            'id'=> 'mission-image', 
            'description' => 'This is the Home Page mission statement Image. You can add your Image here.',
            'before_widget' => '<div class="widget-wrapper">',
            'after_widget' => '</div>',
            'before_title' => '<h2 class="widget-title">',
            'after_title' => '</h2>'
        )
    ); */
    /* Mission Txt */
    register_sidebar(
        array(
            'name' => 'Mission Text',
            'id'=> 'mission-text', 
            'description' => 'This is the Mission Text On the home page. You can add your Text here.',
            'before_widget' => '<div class="widget-wrapper">',
            'after_widget' => '</div>',
            'before_title' => '<h2 class="widget-title">',
            'after_title' => '</h2>'
        )
    );
    /* Our Services */
    register_sidebar(
        array(
            'name' => 'Service 1',
            'id'=> 'services-1', 
            'description' => 'First Services Area of the home page. You can add your widgets here.',
            'before_widget' => '<div class="widget-wrapper">',
            'after_widget' => '</div>',
            'before_title' => '<h2 class="widget-title">',
            'after_title' => '</h2>'
        )
    );
    register_sidebar(
        array(
            'name' => 'Service 2',
            'id'=> 'services-2', 
            'description' => 'Second Services Area of the home page. You can add your widgets here.',
            'before_widget' => '<div class="widget-wrapper">',
            'after_widget' => '</div>',
            'before_title' => '<h2 class="widget-title">',
            'after_title' => '</h2>'
        )
    );
    /* Client Logos 1-4 */
    register_sidebar(
        array(
            'name' => 'Client Logo 1',
            'id'=> 'client-logo1', 
            'description' => 'First Client Logo Area of the home page. You can add your widgets here will be responsive around 200px.',
            'before_widget' => '<div class="widget-wrapper text-center">',
            'after_widget' => '</div>',
            'before_title' => '<h2 class="widget-title">',
            'after_title' => '</h2>'
        )
    );
    register_sidebar(
        array(
            'name' => 'Client Logo 2',
            'id'=> 'client-logo2', 
            'description' => 'Second Client Logo Area of the home page. You can add your widgets here will be responsive around 200px.',
            'before_widget' => '<div class="widget-wrapper text-center">',
            'after_widget' => '</div>',
            'before_title' => '<h2 class="widget-title">',
            'after_title' => '</h2>'
        )
    );
    register_sidebar(
        array(
            'name' => 'Client Logo 3',
            'id'=> 'client-logo3', 
            'description' => 'Third Client Logo Area of the home page. You can add your widgets here will be responsive around 200px.',
            'before_widget' => '<div class="widget-wrapper text-center">',
            'after_widget' => '</div>',
            'before_title' => '<h2 class="widget-title">',
            'after_title' => '</h2>'
        )
    );
    register_sidebar(
        array(
            'name' => 'Client Logo 4',
            'id'=> 'client-logo4', 
            'description' => 'Fourth Client Logo Area of the home page. You can add your widgets here will be responsive around 200px.',
            'before_widget' => '<div class="widget-wrapper text-center">',
            'after_widget' => '</div>',
            'before_title' => '<h2 class="widget-title">',
            'after_title' => '</h2>'
        )
    );
    /* Add dynamic News Section */
    /* End Home Page Sidebars / widgets */
    /* Blog/ news Sidebar */
    register_sidebar(
        array(
            'name' => 'News Sidebar',
            'id'=> 'sidebar-2', 
            'description' => 'This is the News Sidebar. You can add your widgets here.',
            'before_widget' => '<div class="widget-wrapper img-connect">',
            'after_widget' => '</div>',
            'before_title' => '<h2 class="widget-title">',
            'after_title' => '</h2>'
        )
    );
    /* contact form page location imgs */
    register_sidebar(
        array(
            'name' => 'Location Image Sidebar NY',
            'id'=> 'sidebar-img-ny', 
            'description' => 'This is the Image for locations on connect page. You can add your Image here.',
            'before_widget' => '<div class="widget-wrapper img-connect">',
            'after_widget' => '</div>',
            'before_title' => '<h2 class="widget-title">',
            'after_title' => '</h2>'
        )
    );
    /* contact form page location imgs */
    register_sidebar(
        array(
            'name' => 'Location Image Sidebar LA',
            'id'=> 'sidebar-img-la', 
            'description' => 'This is the Image for locations on connect page. You can add your Image here.',
            'before_widget' => '<div class="widget-wrapper img-connect">',
            'after_widget' => '</div>',
            'before_title' => '<h2 class="widget-title">',
            'after_title' => '</h2>'
        )
    );
    /* Our Team page peter img and content widget */
    register_sidebar(
        array(
            'name' => 'Team Image 1',
            'id'=> 'img-pk', 
            'description' => 'This is the Image for our Team. Can be any size choose thumbnail 150x150px. To edit content change the custom HMTL in this widget',
            'before_widget' => '<div class="widget-wrapper img-Team">',
            'after_widget' => '</div>',
            'before_title' => '<h2 class="widget-title">',
            'after_title' => '</h2>'
        )
    );
    /* Our Team page art img and content widget  */
    register_sidebar(
        array(
            'name' => 'Team Image 2',
            'id'=> 'img-aw', 
            'description' => 'This is the Image for our Team. Can be any size choose thumbnail 150x150px. To edit content change the custom HMTL in this widget',
            'before_widget' => '<div class="widget-wrapper img-Team">',
            'after_widget' => '</div>',
            'before_title' => '<h2 class="widget-title">',
            'after_title' => '</h2>'
        )
    );
    /* Our Team page adam img and content widget  */
    register_sidebar(
        array(
            'name' => 'Team Image 3',
            'id'=> 'img-at', 
            'description' => 'This is the Image for our Team. Can be any size choose thumbnail 150x150px. To edit content change the custom HMTL in this widget',
            'before_widget' => '<div class="widget-wrapper img-Team">',
            'after_widget' => '</div>',
            'before_title' => '<h2 class="widget-title">',
            'after_title' => '</h2>'
        )
    );
    /* Our Team page kristin img and content widget  */
    register_sidebar(
        array(
            'name' => 'Team Image 4',
            'id'=> 'img-km', 
            'description' => 'This is the Image for our Team. Can be any size choose thumbnail 150x150px. To edit content change the custom HMTL in this widget',
            'before_widget' => '<div class="widget-wrapper img-Team">',
            'after_widget' => '</div>',
            'before_title' => '<h2 class="widget-title">',
            'after_title' => '</h2>'
        )
    );
    /* Our Team page 5 img and content widget  */
    register_sidebar(
        array(
            'name' => 'Team Image 5',
            'id'=> 'img-5', 
            'description' => 'This is the Image for our Team. Can be any size choose thumbnail 150x150px. To edit content change the custom HMTL in this widget',
            'before_widget' => '<div class="widget-wrapper img-Team">',
            'after_widget' => '</div>',
            'before_title' => '<h2 class="widget-title">',
            'after_title' => '</h2>'
        )
    );
    /* Our Team page 6 img and content widget  */
    register_sidebar(
        array(
            'name' => 'Team Image 6',
            'id'=> 'img-6', 
            'description' => 'This is the Image for our Team. Can be any size choose thumbnail 150x150px. To edit content change the custom HMTL in this widget',
            'before_widget' => '<div class="widget-wrapper img-Team">',
            'after_widget' => '</div>',
            'before_title' => '<h2 class="widget-title">',
            'after_title' => '</h2>'
        )
    );
    /* Our Team page 7 img and content widget  */
    register_sidebar(
        array(
            'name' => 'Team Image 7',
            'id'=> 'img-7', 
            'description' => 'This is the Image for our Team. Can be any size choose thumbnail 150x150px. To edit content change the custom HMTL in this widget',
            'before_widget' => '<div class="widget-wrapper img-Team">',
            'after_widget' => '</div>',
            'before_title' => '<h2 class="widget-title">',
            'after_title' => '</h2>'
        )
    );
    /* Our Team page 8 img and content widget  */
    register_sidebar(
        array(
            'name' => 'Team Image 8',
            'id'=> 'img-8', 
            'description' => 'This is the Image for our Team. Can be any size choose thumbnail 150x150px. To edit content change the custom HMTL in this widget',
            'before_widget' => '<div class="widget-wrapper img-Team">',
            'after_widget' => '</div>',
            'before_title' => '<h2 class="widget-title">',
            'after_title' => '</h2>'
        )
    );
    /* Our Team page 9 img and content widget  */
    register_sidebar(
        array(
            'name' => 'Team Image 9',
            'id'=> 'img-9', 
            'description' => 'This is the Image for our Team. Can be any size choose thumbnail 150x150px. To edit content change the custom HMTL in this widget',
            'before_widget' => '<div class="widget-wrapper img-Team">',
            'after_widget' => '</div>',
            'before_title' => '<h2 class="widget-title">',
            'after_title' => '</h2>'
        )
    );
    /* Our Team page 10 img and content widget  */
    register_sidebar(
        array(
            'name' => 'Team Image 10',
            'id'=> 'img-10', 
            'description' => 'This is the Image for our Team. Can be any size choose thumbnail 150x150px. To edit content change the custom HMTL in this widget',
            'before_widget' => '<div class="widget-wrapper img-Team">',
            'after_widget' => '</div>',
            'before_title' => '<h2 class="widget-title">',
            'after_title' => '</h2>'
        )
    );
    /* Our Team page 11 img and content widget  */
    register_sidebar(
        array(
            'name' => 'Team Image 11',
            'id'=> 'img-11', 
            'description' => 'This is the Image for our Team. Can be any size choose thumbnail 150x150px. To edit content change the custom HMTL in this widget',
            'before_widget' => '<div class="widget-wrapper img-Team">',
            'after_widget' => '</div>',
            'before_title' => '<h2 class="widget-title">',
            'after_title' => '</h2>'
        )
    );
    /* Our Team page 12 img and content widget  */
    register_sidebar(
        array(
            'name' => 'Team Image 12',
            'id'=> 'img-12', 
            'description' => 'This is the Image for our Team. Can be any size choose thumbnail 150x150px. To edit content change the custom HMTL in this widget',
            'before_widget' => '<div class="widget-wrapper img-Team">',
            'after_widget' => '</div>',
            'before_title' => '<h2 class="widget-title">',
            'after_title' => '</h2>'
        )
    );
    /* Our Team page 13 img and content widget */
    register_sidebar(
        array(
            'name' => 'Team Image 13',
            'id'=> 'img-13', 
            'description' => 'This is the Image for our Team. Can be any size choose thumbnail 150x150px. To edit content change the custom HMTL in this widget',
            'before_widget' => '<div class="widget-wrapper img-Team">',
            'after_widget' => '</div>',
            'before_title' => '<h2 class="widget-title">',
            'after_title' => '</h2>'
        )
    );
    /* Our Team page 14 img and content widget  */
    register_sidebar(
        array(
            'name' => 'Team Image 14',
            'id'=> 'img-14', 
            'description' => 'This is the Image for our Team. Can be any size choose thumbnail 150x150px. To edit content change the custom HMTL in this widget',
            'before_widget' => '<div class="widget-wrapper img-Team">',
            'after_widget' => '</div>',
            'before_title' => '<h2 class="widget-title">',
            'after_title' => '</h2>'
        )
    );
    /* End of our team */

    /* Our Brands images */
    register_sidebar(
        array(
            'name' => 'Brand Img 1',
            'id'=> 'brand-1', 
            'class' => 'img-fluid',
            'description' => 'This is the Image for our brands logos. Image will be responsive should be around 150-200px wide',
        )
    );
    register_sidebar(
        array(
            'name' => 'Brand Img 2',
            'id'=> 'brand-2', 
            'class' => 'img-fluid',
            'description' => 'This is the Image for our brands logos. Image will be responsive should be around 150-200px wide',
        )
    );
    register_sidebar(
        array(
            'name' => 'Brand Img 3',
            'id'=> 'brand-3', 
            'class' => 'img-fluid',
            'description' => 'This is the Image for our brands logos. Image will be responsive should be around 150-200px wide',
        )
    );
    register_sidebar(
        array(
            'name' => 'Brand Img 4',
            'id'=> 'brand-4', 
            'class' => 'img-fluid',
            'description' => 'This is the Image for our brands logos. Image will be responsive should be around 150-200px wide',
        )
    );
    register_sidebar(
        array(
            'name' => 'Brand Img 5',
            'id'=> 'brand-5', 
            'class' => 'img-fluid',
            'description' => 'This is the Image for our brands logos. Image will be responsive should be around 150-200px wide',
        )
    );
    register_sidebar(
        array(
            'name' => 'Brand Img 6',
            'id'=> 'brand-6', 
            'class' => 'img-fluid',
            'description' => 'This is the Image for our brands logos. Image will be responsive should be around 150-200px wide',
        )
    );
    register_sidebar(
        array(
            'name' => 'Brand Img 7',
            'id'=> 'brand-7', 
            'class' => 'img-fluid',
            'description' => 'This is the Image for our brands logos. Image will be responsive should be around 150-200px wide',
        )
    );
    register_sidebar(
        array(
            'name' => 'Brand Img 8',
            'id'=> 'brand-8', 
            'class' => 'img-fluid',
            'description' => 'This is the Image for our brands logos. Image will be responsive should be around 150-200px wide',
        )
    );
    register_sidebar(
        array(
            'name' => 'Brand Img 9',
            'id'=> 'brand-9', 
            'class' => 'img-fluid',
            'description' => 'This is the Image for our Team. Can be any size choose thumbnail 150x150px. To edit content change the custom HMTL in this widget',
        )
    );
    register_sidebar(
        array(
            'name' => 'Brand Img 10',
            'id'=> 'brand-10', 
            'class' => 'img-fluid',
            'description' => 'This is the Image for our brands logos. Image will be responsive should be around 150-200px wide',
        )
    );
    register_sidebar(
        array(
            'name' => 'Brand Img 11',
            'id'=> 'brand-11', 
            'class' => 'img-fluid',
            'description' => 'This is the Image for our brands logos. Image will be responsive should be around 150-200px wide',
        )
    );
    register_sidebar(
        array(
            'name' => 'Brand Img 12',
            'id'=> 'brand-12', 
            'class' => 'img-fluid',
            'description' => 'This is the Image for our brands logos. Image will be responsive should be around 150-200px wide',
        )
    );
    register_sidebar(
        array(
            'name' => 'Brand Img 13',
            'id'=> 'brand-13', 
            'class' => 'img-fluid',
            'description' => 'This is the Image for our brands logos. Image will be responsive should be around 150-200px wide',
        )
    );
    register_sidebar(
        array(
            'name' => 'Brand Img 14',
            'id'=> 'brand-14', 
            'class' => 'img-fluid',
            'description' => 'This is the Image for our brands logos. Image will be responsive should be around 150-200px wide',
        )
    );
    register_sidebar(
        array(
            'name' => 'Brand Img 15',
            'id'=> 'brand-15', 
            'class' => 'img-fluid',
            'description' => 'This is the Image for our brands logos. Image will be responsive should be around 150-200px wide',
        )
    );
    register_sidebar(
        array(
            'name' => 'Brand Img 16',
            'id'=> 'brand-16', 
            'class' => 'img-fluid',
            'description' => 'This is the Image for our brands logos. Image will be responsive should be around 150-200px wide',
        )
    );
    register_sidebar(
        array(
            'name' => 'Brand Img 17',
            'id'=> 'brand-17', 
            'class' => 'img-fluid',
            'description' => 'This is the Image for our brands logos. Image will be responsive should be around 150-200px wide',
        )
    );
    register_sidebar(
        array(
            'name' => 'Brand Img 18',
            'id'=> 'brand-18', 
            'class' => 'img-fluid',
            'description' => 'This is the Image for our brands logos. Image will be responsive should be around 150-200px wide',
        )
    );
    register_sidebar(
        array(
            'name' => 'Brand Img 19',
            'id'=> 'brand-19', 
            'class' => 'img-fluid',
            'description' => 'This is the Image for our brands logos. Image will be responsive should be around 150-200px wide',
        )
    );
    register_sidebar(
        array(
            'name' => 'Brand Img 20',
            'id'=> 'brand-20', 
            'class' => 'img-fluid',
            'description' => 'This is the Image for our brands logos. Image will be responsive should be around 150-200px wide',
        )
    );
    register_sidebar(
        array(
            'name' => 'Brand Img 21',
            'id'=> 'brand-21', 
            'class' => 'img-fluid',
            'description' => 'This is the Image for our brands logos. Image will be responsive should be around 150-200px wide',
        )
    );
    register_sidebar(
        array(
            'name' => 'Brand Img 22',
            'id'=> 'brand-22', 
            'class' => 'img-fluid',
            'description' => 'This is the Image for our Team. Can be any size choose thumbnail 150x150px. To edit content change the custom HMTL in this widget',
        )
    );
    register_sidebar(
        array(
            'name' => 'Brand Img 23',
            'id'=> 'brand-23', 
            'class' => 'img-fluid',
            'description' => 'This is the Image for our brands logos. Image will be responsive should be around 150-200px wide',
        )
    );
    register_sidebar(
        array(
            'name' => 'Brand Img 24',
            'id'=> 'brand-24', 
            'class' => 'img-fluid',
            'description' => 'This is the Image for our brands logos. Image will be responsive should be around 150-200px wide',
        )
    );
    register_sidebar(
        array(
            'name' => 'Brand Img 25',
            'id'=> 'brand-25', 
            'class' => 'img-fluid',
            'description' => 'This is the Image for our Team. Can be any size choose thumbnail 150x150px. To edit content change the custom HMTL in this widget',
        )
    );
    register_sidebar(
        array(
            'name' => 'Brand Img 26',
            'id'=> 'brand-26', 
            'class' => 'img-fluid',
            'description' => 'This is the Image for our brands logos. Image will be responsive should be around 150-200px wide',
        )
    );
    register_sidebar(
        array(
            'name' => 'Brand Img 27',
            'id'=> 'brand-27', 
            'class' => 'img-fluid',
            'description' => 'This is the Image for our brands logos. Image will be responsive should be around 150-200px wide',
        )
    );
    register_sidebar(
        array(
            'name' => 'Brand Img 28',
            'id'=> 'brand-28', 
            'class' => 'img-fluid',
            'description' => 'This is the Image for our brands logos. Image will be responsive should be around 150-200px wide',
        )
    );
    register_sidebar(
        array(
            'name' => 'Brand Img 29',
            'id'=> 'brand-29', 
            'class' => 'img-fluid',
            'description' => 'This is the Image for our brands logos. Image will be responsive should be around 150-200px wide',
        )
    );
    register_sidebar(
        array(
            'name' => 'Brand Img 30',
            'id'=> 'brand-30', 
            'class' => 'img-fluid',
            'description' => 'This is the Image for our Team. Can be any size choose thumbnail 150x150px. To edit content change the custom HMTL in this widget',
        )
    );

    

    /* End of Our Brands images */

    /* footer logo */
    register_sidebar(
        array(
            'name' => 'Footer Logo',
            'id'=> 'footer-logo-widget', 
            'description' => 'This is the Image for the footer logo.',
            'before_widget' => '<div class="widget-wrapper img-footer-logo">',
            'after_widget' => '</div>',
            'before_title' => '<h2 class="widget-title">',
            'after_title' => '</h2>'
        )
    );
}

add_action( 'customize_register', 'somename_customize_register' );
//Adding this code to your functions.php file enables you to customize the read more link text.
function modify_read_more_link() {
    return '<a class="more-link" href="' . get_permalink() . '">Read More..</a>';
}
add_filter( 'the_content_more_link', 'modify_read_more_link' );
