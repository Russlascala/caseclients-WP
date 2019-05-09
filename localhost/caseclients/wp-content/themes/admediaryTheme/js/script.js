
$('.nav-link>li>a').on('click', function(){
    $('.navbar-collapse').collapse('hide');
});

//Changes nav color on scroll or on refresh
var $nav = $(".fixed-top");
/* if (window.performance) {
    if (performance.navigation.type == 1 && $nav.scrollTop() > 0) {
        $nav.addClass("scrolled");
        alert("This page is reloaded");
    } else if (performance.navigation.type == 1){
        alert("This page is reloaded at top");
    }
  else {
    alert("This page is not reloaded");
  }
} */
$(document).ready(function () {
    if ($(this).scrollTop() > 0) {
        $nav.addClass("scrolled");
    }
});

$(function () {
    $(document).scroll(function () {
        $nav.toggleClass('scrolled', $(this).scrollTop() > $nav.height()/2);
    });
}); 


/* services Animation Element */
var $animation_elements = $('.animation-element');
/* Posts Animation Element */
var $animation_elements_post = $('.animation-element-2');
var $animation_elements_btn = $(".animation-element-btn");
var $window = $(window);

function check_if_in_view() {
    /* view port checks */
    var window_height = $window.height();
    var window_top_position = $window.scrollTop();
    var window_bottom_position = (window_top_position + window_height);

    /* Animation for services left and right when in view */
    $.each($animation_elements, function () {
        var $element = $(this);
        var $elementRight = $('#animateRight');
        var $elementLeft = $('#animateLeft');
        var element_height = $element.outerHeight();
        var element_top_position = $element.offset().top;
        var element_bottom_position = (element_top_position + element_height);

        //check to see if this current container is within viewport
        if ((element_bottom_position >= window_top_position) &&
            (element_top_position <= window_bottom_position)) {
            $element.addClass('in-view');
            $elementRight.addClass('animated slideInRight');
            $elementLeft.addClass('animated slideInLeft')
        } /* else {
            $element.removeClass('in-view');
            $elementRight.removeClass('animated slideInRight');
            $elementLeft.removeClass('animated slideInLeft')
        } */
    });
    /* Animation for posts when in view ONLY ONCE */
    $.each($animation_elements_post, function () {
        var $element = $(this);
        var element_height = $element.outerHeight();
        var element_top_position = $element.offset().top;
        var element_bottom_position = (element_top_position + element_height);

        //check to see if this current container is within viewport
        if ((element_bottom_position >= window_top_position) &&
            (element_top_position <= window_bottom_position)) {
            $element.addClass('in-view');
            $element.addClass('animated fadeInDown');

        }
    });
    /* Animation for posts when in view ONLY ONCE */
    $.each($animation_elements_btn, function() {
      var $element = $(this);
      var element_height = $element.outerHeight();
      var element_top_position = $element.offset().top;
      var element_bottom_position = element_top_position + element_height;

      //check to see if this current container is within viewport
      if (element_bottom_position >= window_top_position && element_top_position <= window_bottom_position) {
        $element.addClass("in-view");
        $element.addClass("animated fadeInLeft");
      }
    });
}
/* calls the check in view and the scroll trigger */
$window.on('scroll resize', check_if_in_view);
$window.trigger('scroll');

function flip() {
  $(".card").toggleClass("flipped");
}
