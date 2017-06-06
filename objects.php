<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="/bootstrap-3.3.7/favicon.ico">







    <title>Объэкты</title>


   
     <link href="/css/font.css" rel="stylesheet">
    <!-- Bootstrap core CSS -->
    <link href="/bootstrap-3.3.7/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <link href="/bootstrap-3.3.7/docs/assets/css/ie10-viewport-bug-workaround.css" rel="stylesheet">
  <!-- Compiled and minified CSS -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.98.2/css/materialize.min.css">
    <!-- Custom styles for this template -->
    <link href="/css/dashboard.css" rel="stylesheet">
 <link href="/css/dashboard_objects.css" rel="stylesheet">
    <!-- Just for debugging purposes. Don't actually copy these 2 lines! -->
    <!--[if lt IE 9]><script src="/assets/js/ie8-responsive-file-warning.js"></script><![endif]-->
    <script src="/bootstrap-3.3.7/docs/assets/js/ie-emulation-modes-warning.js"></script>

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->









  </head>

  <body>

    <nav class="navbar navbar-inverse navbar-fixed-top">
      <div class="container-fluid">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="/">Интострой</a>
        </div>
        <!-- mobile menu -->
        <div id="navbar" class="navbar-collapse collapse">
          <ul class="nav navbar-nav navbar-right">
            <li><a href="#">о нас</a></li>
            <li><a href="#">объэкты</a></li>
            <li><a href="#">тендеры</a></li>
            <li><a href="#">вакансии</a></li>
          </ul>
          <form class="navbar-form navbar-right">
            <input type="text" class="form-control" placeholder="Search...">
          </form>
        </div>
      </div>
    </nav>

    <div class="container-fluid">
      <div class="row">


        <div class="col-sm-9 col-md-6  col-lg-5 sidebar" id="nav_velosity">
        
         <img src="/images/left-line-menu.png" alt="" class="left-line-menu">
          <ul class="nav nav-sidebar" >
           <!--  <li class="active"><a href="/">
              <img src="/images/logo.png" alt="logo">
            </a></li> -->
             <li class=""><a href="/">
              <img  class="img-responsive logo" src="/images/logo.png" alt="logo">
            </a></li>
            <li ><a href="/">
               <h4 class="deviz"><span style="white-space: nowrap;"> Мы строим </span><br><span style="white-space: nowrap;">вы живете</span> </h4>
            </a></li>
            <li >
            <div class="curent-location">
             контакты
             </div>
             </li>
           
          </ul>
          <ul class="nav nav-sidebar nav_own">

     <li><a href="/" class="selectedwline">главная   </a>   </li>


            


            <li><a href="">о нас</a></li>
            <li><a href="">объэкты</a></li>
            <li><a href="">тендеры</a></li>
            <li><a href="">вакансии</a></li>
                        <li><a href="">новости</a></li>
          </ul>
          <ul class="nav nav-sidebar nav_own">
            <li><a href="">Nav item again</a></li>
            <li><a href="">One more nav</a></li>
            <li><a href="">Another nav item</a></li>
          </ul>
        </div>
        <div class="col-sm-15 col-sm-offset-9 col-md-18 col-md-offset-6  col-lg-offset-5 col-lg-19 main">

<!-- <div class="col-xs-12 col-sm-6">button</div>
<div class="col-xs-12 col-sm-6">button</div>
<div class="col-xs-12 col-sm-6">button</div>
<div class="col-xs-12 col-sm-6">button</div> -->

 <ul id="tabs-swipe-contacts" class="">
    <li class="pseudo_tab col s3"><a class="active"  href="#finished">сданые</a></li>
    <li class="pseudo_tab col s3"><a  href="#sales">в продаже</a></li>
    <li class="pseudo_tab col s3"><a  href="#progects">проекты</a></li>
     
      <li class=" status col s3">  <button>  контакты </button> </li>
  </ul>


  <div id="test-swipe-1" class="col-sm-24  res-p">
    
   <div class="slider" id="slider1">
    <ul class="slides">
      <li>
        <img  src="/images/sliders/1.png"> <!-- random image -->
      <!--   <div class="caption center-align">
          <h3>This is our big Tagline!</h3>
          <h5 class="light grey-text text-lighten-3">Here's our small slogan.</h5>
        </div> -->
      </li>
      <li>
        <img src="http://lorempixel.com/580/250/nature/2"> <!-- random image -->
        <div class="caption left-align">
          <h3>Left Aligned Caption</h3>
          <h5 class="light grey-text text-lighten-3">Here's our small slogan.</h5>
        </div>
      </li>
      <li>
        <img src="http://lorempixel.com/580/250/nature/3"> <!-- random image -->
        <div class="caption right-align">
          <h3>Right Aligned Caption</h3>
          <h5 class="light grey-text text-lighten-3">Here's our small slogan.</h5>
        </div>
      </li>
      <li>
        <img src="http://lorempixel.com/580/250/nature/4"> <!-- random image -->
        <div class="caption center-align">
          <h3>This is our big Tagline!</h3>
          <h5 class="light grey-text text-lighten-3">Here's our small slogan.</h5>
        </div>
      </li>
    </ul>
  </div>

  </div>

<!-- second part -->
  <div id="test-swipe-2" class="col-sm-24  res-p">

      <h2>СДАНЫЕ</h2>
      <div id="finished" class="section scrollspy">
        <p>Content progects ancor </p>
      </div>

<?php for ($i=0; $i <2 ; $i++) { ?> 
  

<div  class="col-sm-12  ">
  
  <div class="parallax-container">
      <div class="parallax"><img  src="images/parallax/1.png"></div>


    </div>
         <div class="caption-paralax">
         <div class="col-sm-24">
           <p class="home_tilte">
             СитиПарк
           </p>

         </div>
         <div class="col-sm-12">
           <p class="home_tilte2">Первая секция сдана в 2016г.</p>
         </div>
         <div class="col-sm-12">
        <p class="home_tilte3"><b> В продаже 4 </b> квартиры</p>    
         </div>
</div>
</div>
<div  class="col-sm-12  ">
  
<div class="parallax-container">
      <div class="parallax"><img src="images/parallax/1.png"></div>
    </div>
         <div class="caption-paralax">


         <div class="col-sm-24">
           <p class="home_tilte">
             СитиПарк
           </p>

         </div>
         <div class="col-sm-12">
           <p class="home_tilte2">Первая секция сдана в 2016г.</p>
         </div>
         <div class="col-sm-12">
        <p class="home_tilte3"><b> В продаже 4 </b> квартиры</p>    
         </div>


</div>
</div>

<div class="clearfix"></div>

<?php } ?>

   




 <div id="test-swipe-3" class="col-sm-24  res-p">

   <div class="slider" id="slider2">
    <ul class="slides">
 <li>
        <img src="http://lorempixel.com/580/250/nature/2"> <!-- random image -->
        <div class="caption left-align">
          <h3>Мы строим для вас и ради вас</h3>
      
        </div>
      </li>
      <li>
        <img src="http://lorempixel.com/580/250/nature/3"> <!-- random image -->
        <div class="caption right-align">
       <h3>Мы строим для вас и ради вас</h3>
    
        </div>
      </li>
      <li>
        <img src="http://lorempixel.com/580/250/nature/4"> <!-- random image -->
        <div class="caption center-align">
        <h3>Мы строим для вас и ради вас</h3>
        
        </div>
      </li>
    </ul>
  </div>



 </div>




 <div id="progectsdel" class="section scrollspy">
      
      </div>


 <h2>В ПРОДАЖЕ</h2>
      <div id="sales" class="section scrollspy">
       
      </div>

<?php for ($i=0; $i <2 ; $i++) { ?> 
  

<div  class="col-sm-12  ">
  
  <div class="parallax-container">
      <div class="parallax"><img  src="images/parallax/1.png"></div>


    </div>
         <div class="caption-paralax">
         <div class="col-sm-24">
           <p class="home_tilte">
             СитиПарк
           </p>

         </div>
         <div class="col-sm-12">
           <p class="home_tilte2">Первая секция сдана в 2016г.</p>
         </div>
         <div class="col-sm-12">
        <p class="home_tilte3"><b> В продаже 4 </b> квартиры</p>    
         </div>
</div>
</div>
<div  class="col-sm-12  ">
  
<div class="parallax-container">
      <div class="parallax"><img src="images/parallax/1.png"></div>
    </div>
         <div class="caption-paralax">


         <div class="col-sm-24">
           <p class="home_tilte">
             СитиПарк
           </p>

         </div>
         <div class="col-sm-12">
           <p class="home_tilte2">Первая секция сдана в 2016г.</p>
         </div>
         <div class="col-sm-12">
        <p class="home_tilte3"><b> В продаже 4 </b> квартиры</p>    
         </div>


</div>
</div>

<div class="clearfix"></div>

<?php } ?>



<?php 
include_once 'footer.php';
 ?>








  </div>
  <!-- end part2 -->

 



         
       
        </div>
      </div>
    </div>


    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>
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







 
    <script src="/scripts/objects.js"></script>


  </body>
</html>
