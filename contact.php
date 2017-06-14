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







    <title>Контакты</title>


   
     <link href="/css/font.css" rel="stylesheet">
    <!-- Bootstrap core CSS -->
    <link href="/bootstrap-3.3.7/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <link href="/bootstrap-3.3.7/docs/assets/css/ie10-viewport-bug-workaround.css" rel="stylesheet">
  <!-- Compiled and minified CSS -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.98.2/css/materialize.min.css">
    <!-- Custom styles for this template -->
    <link href="/css/dashboard.css" rel="stylesheet">




    

    <!-- Just for debugging purposes. Don't actually copy these 2 lines! -->
    <!--[if lt IE 9]><script src="/assets/js/ie8-responsive-file-warning.js"></script><![endif]-->
    <script src="/bootstrap-3.3.7/docs/assets/js/ie-emulation-modes-warning.js"></script>

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->




<script>document.write('<script src="http://' + (location.host || 'localhost').split(':')[0] + ':35729/livereload.js?snipver=1"></' + 'script>')</script>




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
        <div class="col-sm-15 col-sm-offset-9 col-md-18 col-md-offset-6  col-lg-offset-5 col-lg-19 main wrap_naw_top">

<!-- <div class="col-xs-12 col-sm-6">button</div>
<div class="col-xs-12 col-sm-6">button</div>
<div class="col-xs-12 col-sm-6">button</div>
<div class="col-xs-12 col-sm-6">button</div> -->

 <ul id="tabs-swipe-contacts" class="tabs ">
    <li class="tab "><a class="active"  href="#test-swipe-1">псг интострой</a></li>
    <li class="tab "><a  href="#test-swipe-2">отдел продаж</a></li>
     
      <li class="tab status hidden-xs hidden-sm hidden-md  ">  <a class="where" href="!">Harbinger</a> </li>
  </ul>
  <div id="test-swipe-1" class="col-sm-24  res-p">
 
<!-- left1 a1 start -->
      <div class="col col-sm-12  res-p">
<h2 class="">Контакные даные</h2>
 
<p >
  <span>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Deserunt pariatur, illo nobis esse quam provident placeat repudiandae earum porro doloribus odio dolorem obcaecati, voluptatem velit modi sit error perferendis veniam!</span>
  <span>Consectetur, voluptate dignissimos veritatis suscipit! Molestiae aliquam nisi, consequatur voluptate commodi quo beatae inventore cumque aliquid in facere id amet delectus ex illum placeat fuga architecto maxime magnam voluptatum, doloremque.</span>
  
     
</p>

<br>
<p class="contacts_text">048 555 55 55</p>
<p class="contacts_text1">пушкинская 32</p>
<p class="contacts_text2">пушкинская 32</p>
<p class="contacts_text2">пушкинская 32</p>

 
      </div>
 <!-- left1 a1 end --> 
 
 <!-- left2 a1 start -->    
      <div class=" col-sm-12  res-p">
            <h2>Заявка</h2>

     
<form id="form_prodaza">
  <div class="form-group">
    
    <input type="text" class="form-control" name="form_name"  placeholder="   Ваше имя">
    
  </div>
    <div class="form-group">
    
    <input type="text" class="form-control" name="form_phone"  placeholder="   Ваш телефон">
    
  </div>
  <div class="form-group">
   
    <input type="text" class="form-control" name="form_email" placeholder="   Ваш e-mail">
 
  </div>


  <div class="form-group">
    <textarea class="form-control" name="form_text" rows="8" placeholder="Ваше сообщение" ></textarea>
  </div>



  <button type="submit" class="btn btn-primary btn-lg">ОТПРАВИТЬ</button>
</form>
  






      </div>
 <!-- left2 a1 end -->   
 <div  class="col-sm-24  wrap_map">
       
    <div id="map"></div>
 </div>

  </div>

<!-- second part -->
  <div id="test-swipe-2" class="col-sm-24  res-p">
 
<!-- left1 a1 start -->
      <?php 

for ($i=0; $i <3 ; $i++) {  
  ?>

 
 

      <div class="col-sm-24 col-md-15 col-lg-12  res-p">

<h2 class="">Отдел продаж ЖК СИТИ-ПАРК</h2>
 
<p >
  <span>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Deserunt pariatur, illo nobis esse quam provident placeat repudiandae earum porro doloribus odio dolorem obcaecati, voluptatem velit modi sit error perferendis veniam!</span>
  <span>Consectetur, voluptate dignissimos veritatis suscipit! Molestiae aliquam nisi, consequatur voluptate commodi quo beatae inventore cumque aliquid in facere id amet delectus ex illum placeat fuga architecto maxime magnam voluptatum, doloremque.</span>
  
     
</p>

<br>

 <div class="col-xsm-12 col-sm-8  col-lg-8 res-p">
<div class="wrap_contact_text56">

   <p class="contacts_text5">048 555 55 55</p>
<p class="contacts_text6">пушкинская 32</p>
</div>
 </div>
  <div class="col-xsm-6 col-sm-8 col-lg-8   res-p">

<figure class="res-m">
  <img class="img-responsive" src="/images/user/user.png">
  <figcaption>Иванова Анна</figcaption>
</figure>

 
  </div>
  <div class="col-xsm-6 col-sm-8 col-lg-8   res-p">


<figure class="res-m">
  <img class="img-responsive" src="/images/user/user.png">
  <figcaption>Иванова Анна</figcaption>
</figure>
 
  </div>








 <div class="clearfix"></div>




 
      </div>
 <!-- left1 a1 end --> 
 
 <!-- left2 a1 start -->    
      <div class="col-sm-24 col-md-9  col-lg-12 wrap_maps ">
        <img class="img-responsive" src="images/maps/map.png" alt="">

      </div>
 <div class="clearfix"></div>
   <?php   }

 ?>

  </div>
  <!-- end part2 -->




  


         
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
    <script src="/scripts/contact.js"></script>
 <script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyD07Z4GaSHgApgpnyQTnbFugeW9IwKd1GI&callback=initMap"> </script>

  </body>
</html>
