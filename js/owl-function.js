$(document).ready(function() {
 
    $("#main-slider").owlCarousel({
        loop:true,
        nav:true,
        autoplay:true,
        dots:false,
        autoplayTimeout:5000,
        autoplayHoverPause:true,
        singleItem:true,
        items : 1, 
        itemsDesktop : true,
        itemsDesktopSmall : true,
        itemsTablet: true,
        navText : ["<i class='fa fa-angle-left fa-2X'></i>","<i class='fa fa-angle-right fa-2X'></i>"],
        itemsMobile : true
   
    });
   
  });

  $('#slider-1').owlCarousel({
    loop:true,
    nav:false,
    autoplay:true,
    dots:true,
    autoplayTimeout:3000,
    autoplayHoverPause:true,
    margin:30,
    navText : ["<i class='fa fa-angle-left fa-2X'></i>","<i class='fa fa-angle-right fa-2X'></i>"],
    responsive:{
        0:{
            items:1
        },
        320:{
            items:2
        },
        480:{
            items:3
        },
        768:{
            items:2
        }
    }
});



$('#slider-2').owlCarousel({
    loop:true,
    nav:false,
    autoplay:true,
    dots:true,
    autoplayTimeout:3000,
    autoplayHoverPause:true,
    margin:30,
    navText : ["<i class='fa fa-angle-left fa-2X'></i>","<i class='fa fa-angle-right fa-2X'></i>"],
    responsive:{
        0:{
            items:1
        },
        480:{
            items:2
        },
        600:{
            items:2
        },
        992:{
            items:3
        }
    }
});