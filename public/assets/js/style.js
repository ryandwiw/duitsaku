$(document).ready(function(){
    $('.owl-carousel').owlCarousel({
        items: 1,
        loop: true,
        autoplay: true,
        autoplayTimeout: 5000,
        autoplayHoverPause: true
    });

    
    $(window).scroll(function() {
        var navbar = $('.navbar');
        navbar.toggleClass('scrolled', $(this).scrollTop() > 0);
    });
});
