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







    <title>Главная</title>


   
     <link href="/css/font.css" rel="stylesheet">
    <!-- Bootstrap core CSS -->
    <link href="/bootstrap-3.3.7/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <link href="/bootstrap-3.3.7/docs/assets/css/ie10-viewport-bug-workaround.css" rel="stylesheet">
  <!-- Compiled and minified CSS -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.98.2/css/materialize.min.css">
    <!-- Custom styles for this template -->
        <link href="/css/onepage-scroll.css" rel="stylesheet">
    <link href="/css/dashboard.css" rel="stylesheet">
    <link href="/css/dashboard_main.css" rel="stylesheet">




    

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

       <!-- nav -->
   <?php 
include_once 'head/nav.php';
    ?>

    <div class="container-fluid">
      <div class="row">


        <div class="col-sm-9 col-md-6  col-lg-5 sidebar" id="nav_velosity">
                                        <!-- left sidebar -->
                  <?php 
include_once 'head/sidebar.php';
          ?>

        </div>

        <div class="col-sm-15 col-sm-offset-9 col-md-18 col-md-offset-6  col-lg-offset-5 col-lg-19 main2">
          

   <div class="col-sm-24 hidden-xs hidden-sm  main ">
        <section class="page1 ">
          <div class="col-sm-24 col-md-6">
          <p class="main_text_up" >построено</p>
           <p class="main_text_bottom" >100000м<sup>2</sup> </p>
          </div>
          <div class="col-sm-24 col-md-6">
         <p class="main_text_up" > сотрудников
         </p>
         <p class="main_text_bottom main_text_bottom2" >5000  </p>
          </div>
          <div class="col-sm-24 col-md-6">
        <p class="main_text_up" >счастливых жителей</p>
 <p class="main_text_bottom main_text_bottom2" >9845  </p>

          </div>
          <div class="col-sm-24 col-md-6">
          <div class="wrap_btn">
           <a class="where" href="!">Harbinger</a>
          </div>
          </div>





   <!-- white footer -->
   <!-- <div class="col-sm-24 hidden-xs hidden-sm  go_down">
     lorem
   </div> -->

   
     
        <div class="page_container">
    
        </div>
              
      </section>
      
      <style>
  
      </style>
      <section class="page2 ">
        <div class="page_container">

         <h2 class="">В ПРОДАЖЕ</h2>
        
         
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
   <!--       <div class="col-sm-12">
           <p class="home_tilte2">Первая секция сдана в 2016г.</p>
         </div>
         <div class="col-sm-12">
        <p class="home_tilte3"><b> В продаже 4 </b> квартиры</p>    
         </div> -->
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
         
          
         
        </div>
      </section>
      
      <section class="page3 white">
        <div class="page_container">
          <h1>Pretty Neat Eh?</h1>
          <h2>You can customise the animation timing, the selector or even the animation easing using CSS3. I can't wait to see what you guys will come up with. Don't forget to grab them for free on Github'</h2>
          <div class="btns">
            <a class="reload btn" href="https://github.com/peachananr/onepage-scroll">Download on Github</a>
          </div>
        </div>
      </section>
   </div>

   <!--    <div class="col-sm-24 hidden-xs hidden-sm  ">
     lorem2
   </div> -->







<!-- mobile footer -->
 <?php 
 include 'mobile/main.php';
  ?>




        </div>

      </div>
    </div>

 <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
<?php 
include_once 'head/footer_scripts.php';
 ?>






    <script src="/scripts/main.js"></script>
        <script src="/scripts/jquery.onepage-scroll.js"></script>
  <script>
    $(document).ready(function(){
      $(".main").onepage_scroll({
        sectionContainer: "section",
        responsiveFallback: 600,
        loop: true
      });
    });
    
  </script>


 <link rel="stylesheet" href="/scripts/vegas-master/dist/vegas.css">
   <script src="/scripts/vegas-master/src/vegas.js"></script>


<script>
  

  $(document).ready(function(){
 
 $('.page1').vegas({
  overlay: true,
  transition: 'fade', 
  transitionDuration: 4000,
  delay: 10000,
  color: 'red',
  animation: 'random',
  animationDuration: 20000,
  slides: [
    { src: '/images/main/1.jpg' },
    { src: '/images/main/2.jpg' },
    { src: '/images/main/3.jpg' },
    
  ]
});
 });



        


  </script>





  </body>
</html>
