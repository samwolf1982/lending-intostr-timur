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







    <title>Управление</title>


   
     <link href="/css/font.css" rel="stylesheet">
    <!-- Bootstrap core CSS -->
    <link href="/bootstrap-3.3.7/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <link href="/bootstrap-3.3.7/docs/assets/css/ie10-viewport-bug-workaround.css" rel="stylesheet">
  <!-- Compiled and minified CSS -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.98.2/css/materialize.min.css">
    <!-- Custom styles for this template -->
    <link href="/css/dashboard.css" rel="stylesheet">

    <link href="/css/creater.css" rel="stylesheet">




    

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
        <div class="col-sm-15 col-sm-offset-9 col-md-18 col-md-offset-6  col-lg-offset-5 col-lg-19 main">

<!-- <div class="col-xs-12 col-sm-6">button</div>
<div class="col-xs-12 col-sm-6">button</div>
<div class="col-xs-12 col-sm-6">button</div>
<div class="col-xs-12 col-sm-6">button</div> -->

 <ul id="tabs-swipe-contacts" class="tabs">
    <li class="tab "><a class="active"  href="#test-swipe-1">ОСНОВАТЕЛЬ</a></li>
    <li class="tab "><a  href="#test-swipe-2">ПРЕЗИДЕНТ</a></li>
     <li class="tab "><a  href="#test-swipe-3">СОВЕТ ДИРЕКТОРОВ</a></li>
     
      <li class="tab status">  <button>  контакты </button> </li>
  </ul>
  <div id="test-swipe-1" class="col-sm-24  res-p ">
    
    <div class="col-sm-8 top_z hidden-xs hidden-sm">
      <div class="wrap_img">
         <img class="img-responsive" src="/images/creater/1.jpg">
      </div>
    </div>
    <div class="col-sm-16 col-l col-xl-offset-4 creater_text hidden-xs hidden-sm">

        <div class="col-sm-24">
        <div class="wrap_under_txt2">
           <h2>КОРОБЧИНСКИЙ</h2>
           <h2 style="white-space: nowrap;" >АЛЕКСАНДР ЛЕОНИДОВИЧ</h2>
        </div>
         </div>

        <div class="col-sm-24 hidden-xs hidden-sm">
         <div class="wrap_under_txt">
            <h2>ЧЕЛОВЕК МЕНЯВШИЙ</h2>
           <h2>МИР ВОКРУГ СЕБЯ</h2>

         </div>
         

        </div>

    </div>
     <div class="clerfix"></div>


<?php 
include_once "mobile/creater.php";

 ?>








 <div class="col-sm-24 description_creater">
   <div>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptatibus voluptate praesentium harum necessitatibus, eum iste, accusamus illum quis assumenda earum nulla saepe ex non distinctio reprehenderit itaque laudantium, repellendus vero?</div>
   <div>Saepe expedita tempore nihil sit atque odit nulla iure voluptates minus esse itaque, quia temporibus reprehenderit animi totam, est nobis corporis aperiam numquam maxime accusantium accusamus. Animi voluptatibus aperiam libero.</div>
   <div>Saepe animi, dolor sunt officia tempora rerum quam ab tenetur ex blanditiis laborum voluptatem dicta perferendis eos at harum praesentium. Harum ex, tempore fugit itaque eveniet perspiciatis. Molestias, vel, autem?</div>
   <div>Esse accusamus, distinctio nostrum praesentium. Libero eveniet aliquam explicabo minus, laboriosam ratione voluptate, alias dolorem doloremque, quae illo velit enim sint cum saepe praesentium. Quod in alias sapiente, temporibus aliquam.</div>


 </div>







  </div>

<!-- second part -->
  <div id="test-swipe-2" class="col-sm-24  res-p">
    
    
    <div class="col-sm-8 top_z hidden-xs hidden-sm">
      <div class="wrap_img">
         <img class="img-responsive" src="/images/creater/1.jpg">
      </div>
    </div>
    <div class="col-sm-16 col-l col-xl-offset-4 creater_text hidden-xs hidden-sm">

        <div class="col-sm-24">
        <div class="wrap_under_txt2">
           <h2>КОРОБЧИНСКИЙ</h2>
           <h2 style="white-space: nowrap;" >АРТУР АЛЕКСАНДРОВИЧ</h2>
        </div>
         </div>

        <div class="col-sm-24 hidden-xs hidden-sm">
         <div class="wrap_under_txt">
            <h2>СТРОИМ ДЛЯ ЛЮДЕЙ</h2>
           <h2>И РАДИ ЛЮДЕЙ</h2>

         </div>
         

        </div>

    </div>
     <div class="clerfix"></div>


<?php 
include_once "mobile/creater2.php";

 ?>








 <div class="col-sm-24 description_creater">
   <div>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptatibus voluptate praesentium harum necessitatibus, eum iste, accusamus illum quis assumenda earum nulla saepe ex non distinctio reprehenderit itaque laudantium, repellendus vero?</div>
   <div>Saepe expedita tempore nihil sit atque odit nulla iure voluptates minus esse itaque, quia temporibus reprehenderit animi totam, est nobis corporis aperiam numquam maxime accusantium accusamus. Animi voluptatibus aperiam libero.</div>
   <div>Saepe animi, dolor sunt officia tempora rerum quam ab tenetur ex blanditiis laborum voluptatem dicta perferendis eos at harum praesentium. Harum ex, tempore fugit itaque eveniet perspiciatis. Molestias, vel, autem?</div>
   <div>Esse accusamus, distinctio nostrum praesentium. Libero eveniet aliquam explicabo minus, laboriosam ratione voluptate, alias dolorem doloremque, quae illo velit enim sint cum saepe praesentium. Quod in alias sapiente, temporibus aliquam.</div>


 </div>







  

  </div>
  <!-- end part2 -->

  <div id="test-swipe-3" class="col-sm-24  res-p">
    
    <div class="col-sm-8">
       <div class="card ">
        <div class="card-image">
          <img src="/images/creater/2.jpg"> 
       
  
         
        </div>
        <div class="card-content">
           <span class="card-title">КОТЛИ АЛЕКСЕЙ <br> генеральный директор</span>
          <p>I am a very simple card. I am good at containing small bits of information. I am convenient because I require little markup to use effectively.</p>
        </div>
      </div>
    </div>
    <div class="col-sm-8">
      
       <div class="card ">
        <div class="card-image">
          <img src="/images/creater/2.jpg"> 
       
  
         
        </div>
        <div class="card-content">
           <span class="card-title">КОТЛИ АЛЕКСЕЙ <br> генеральный директор</span>
          <p>I am a very simple card. I am good at containing small bits of information. I am convenient because I require little markup to use effectively.</p>
        </div>
      </div>
    


    </div>
    <div class="col-sm-8">
      

       <div class="card ">
        <div class="card-image">
          <img src="/images/creater/2.jpg"> 
       
  
         
        </div>
        <div class="card-content">
           <span class="card-title">КОТЛИ АЛЕКСЕЙ <br> генеральный директор</span>
          <p>I am a very simple card. I am good at containing small bits of information. I am convenient because I require little markup to use effectively.</p>
        </div>
      </div>
    

    </div>

    <div class="clearfix"></div>
    
 <div class="col-sm-8">
       <div class="card ">
        <div class="card-image">
          <img src="/images/creater/2.jpg"> 
       
  
         
        </div>
        <div class="card-content">
           <span class="card-title">КОТЛИ АЛЕКСЕЙ <br> генеральный директор</span>
          <p>I am a very simple card. I am good at containing small bits of information. I am convenient because I require little markup to use effectively.</p>
        </div>
      </div>
    </div>
    <div class="col-sm-8">
      
       <div class="card ">
        <div class="card-image">
          <img src="/images/creater/2.jpg"> 
       
  
         
        </div>
        <div class="card-content">
           <span class="card-title">КОТЛИ АЛЕКСЕЙ <br> генеральный директор</span>
          <p>I am a very simple card. I am good at containing small bits of information. I am convenient because I require little markup to use effectively.</p>
        </div>
      </div>
    


    </div>
    <div class="col-sm-8">
      

       <div class="card ">
        <div class="card-image">
          <img src="/images/creater/2.jpg"> 
       
  
         
        </div>
        <div class="card-content">
           <span class="card-title">КОТЛИ АЛЕКСЕЙ <br> генеральный директор</span>
          <p>I am a very simple card. I am good at containing small bits of information. I am convenient because I require little markup to use effectively.</p>
        </div>
      </div>
    

    </div>




    
  </div>
  <!-- end part3 -->


  


         
       <!-- footer -->
<div class="clearfix"></div>
<?php 
include_once 'footer.php';
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





  <script src="/scripts/contact_map.js"></script>
    <script src="/scripts/creater.js"></script>


  </body>
</html>
