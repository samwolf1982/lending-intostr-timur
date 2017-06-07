    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
   <script
  src="http://code.jquery.com/jquery-1.12.4.min.js"
  integrity="sha256-ZosEbRLbNQzLpnKIkEdrPv7lOy9C27hHQ+Xp8a4MxAQ="
  crossorigin="anonymous"></script>
    <script>window.jQuery || document.write('<script src="/bootstrap-3.3.7/docs/assets/js/vendor/jquery.min.js"><\/script>')</script>
    <script src="/bootstrap-3.3.7/docs/dist/js/bootstrap.min.js"></script>
    <!-- Just to make our placeholder images work. Don't actually copy the next line! -->
    <script src="/bootstrap-3.3.7/docs/assets/js/vendor/holder.min.js"></script>
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="/bootstrap-3.3.7/docs/assets/js/ie10-viewport-bug-workaround.js"></script>





  <!-- Compiled and minified JavaScript -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.98.2/js/materialize.min.js"></script>

  
<script>
  
 var options = [ 
 // {selector: '#staggered-test', offset: 50, callback: function(el) { Materialize.toast("This is our ScrollFire Demo!", 1500 ); } },
 // {selector: '#staggered-test', offset: 205, callback: function(el) { Materialize.toast("Please continue scrolling!", 1500 ); } },
  {selector: '#nav_velosity', offset: 500, callback: function(el) { Materialize.showStaggeredList($(el)); } }, 
  // {selector: '#image-test', offset: 500, callback: function(el) { Materialize.fadeInImage($(el)); } }
   ];

   Materialize.scrollFire(options);

</script>

<script> 
$(document).ready(function(){
    // $(".nav.nav-sidebar").click(function(){
    //     $("div").animate({left: '250px'});
    // });

$( ".nav.nav-sidebar.nav_own  a" ).mouseenter(function() {
       var c=this;
   $(c).animate({left: '25px'},function() {
              // $(c).animate({left: '0'});
  });
});
$( ".nav.nav-sidebar.nav_own  a" ).mouseleave(function() {
       var c=this;
   $(c).animate({left: '0px'},function() {
              // $(c).animate({left: '0'});
  });
});


});
</script> 



  <link href="/css/placeholders.css" rel="stylesheet">
    <link href="/css/extentd_media.css" rel="stylesheet">