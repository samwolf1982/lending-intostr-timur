$(document).ready(function(){
// console.log("load objs");
$('.scrollspy').scrollSpy();
    // $('.slider').slider({'height':500,'indicators':false});  
    $('.slider_mobile').slider({'height':200,'indicators':true}); 
    $('.slider_not_mobile').slider({'height':200,'indicators':false}); 
    
    // $('#slider2').slider({'height':200,'indicators':false});  
        // $('#slider1').slider();      
$('.parallax').parallax();



//  $('.lescai').click(function(){
//      $('.wrap_pop_form').slideToggle({
//       direction: "up"
//     }, 300);
//     console.log('popk');

// });

   $('.lescai').click(function () {




   	$(this).find('.clientsDropDown .clientsDashboard').slideToggle({
      direction: "up"
    }, 300);
    // $('.clientsDropDown .clientsDashboard').slideToggle({
    //   direction: "up"
    // }, 300);
   

  }); // end click


});