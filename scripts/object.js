




$(document).ready(function(){

// console.log("load objs");
$('.scrollspy').scrollSpy();
    // $('.slider').slider({'height':500,'indicators':false});  
    $('#slider1').slider({'height':600,'indicators':false}); 

       $('#slider3').slider({'height':400,'indicators':false}); 
    // $('#slider2').slider({'height':200,'indicators':false});  
        // $('#slider1').slider();      
$('.parallax').parallax();

$('.materialboxed').materialbox();

   $('.carousel').carousel({
            dist:0,
            shift:30,
            padding:0,
            indicators:true,
            full_width:0,


      });





});
$(function() {
   



});





$(document).ready(function(){
  
  // OWL CAROUSEL - https://owlcarousel2.github.io/OwlCarousel2/
  $('#main-slider .owl-carousel').owlCarousel(
    {
      items: 1,
      margin: 0,
      loop: true,
      nav: false,
      navText: ['Back','Next'],
      dots: false,
      dotsEach: true,
      autoplay: true,
      autoplaySpeed: 500,
      animateOut: 'fadeOut',
      animateIn: 'fadeIn',
    }
  );
  $('#owl-1 .owl-carousel').owlCarousel(
    {
      items: 4,
      margin: 16,
      loop: true,
      stagePadding: 64,
      nav: true,
      // navText: ['Back','Next'],
      navText: ['',''],
      // navText: ["<img src='myprevimage.png'>","<img src='mynextimage.png'>"],
      dots: false,
      dotsEach: true,
      lazyLoad: false,
      autoplay: true,
      autoplaySpeed: 500,
      navSpeed: 500,
      autoplayTimeout: 2000,
      autoplayHoverPause: true,
    }
  );
  
  $('#owl-2 .owl-carousel').owlCarousel(
    {
      items: 3,
      margin: 16,
      stagePadding: 32,
      loop: true,
      autoplay: true,
      autoplaySpeed: 1000,
      navSpeed: 1000,
      dots: false,
      dotsEach: true,
      nav: true,
      // navText: ['Back','Next'],
      navText: ['',''],
      autoplayTimeout: 2000,
      autoplayHoverPause: false,
      animateOut: 'slideOutDown',
      animateIn: 'flipInX',
    }
  );

});


 var options2 = [ 
 
 {selector: '#hide_slider', offset: -400, 
    callback: function(el) { Materialize.showStaggeredList($(el)); } },
 {selector: '#image-test', offset: 500, 
    callback: function(el) { Materialize.fadeInImage($(el)); } } 
    ];
  Materialize.scrollFire(options2);




  $(window).scroll(function() {
   var hT = $('#scroll-to').offset().top,
       hH = $('#scroll-to').outerHeight(),
       wH = $(window).height(),
       wS = $(this).scrollTop();
    console.log((hT-wH) , wS);
   
 
   if (wS > (hT+hH-wH)){
        if ($('#news-block-slider').css('margin-left')=='1260px') {
        	 console.log( 'oikii');
        	 $('#news-block-slider').animate({
  'margin-left': 0,
}, 1000 );
        }

   }
});