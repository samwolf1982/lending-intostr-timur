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







    <title>Новости</title>


   
     <link href="/css/font.css" rel="stylesheet">
    <!-- Bootstrap core CSS -->
    <link href="/bootstrap-3.3.7/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <link href="/bootstrap-3.3.7/docs/assets/css/ie10-viewport-bug-workaround.css" rel="stylesheet">
  <!-- Compiled and minified CSS -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.98.2/css/materialize.min.css">
    <!-- Custom styles for this template -->
    <link href="/css/dashboard.css" rel="stylesheet">
 <link href="/css/dashboard_news.css" rel="stylesheet">
    <!-- Just for debugging purposes. Don't actually copy these 2 lines! -->
    <!--[if lt IE 9]><script src="/assets/js/ie8-responsive-file-warning.js"></script><![endif]-->
    <script async src="/bootstrap-3.3.7/docs/assets/js/ie-emulation-modes-warning.js"></script>

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
<link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">







  </head>

  <body>
       <!-- nav -->
   <?php 
include_once 'head/nav.php';
    ?>

    <div class="container-fluid">
      <div class="row">


        <div class="col-sm-9 col-md-6  col-lg-5 sidebar" id="nav_velosity">                                        <!-- left sidebar -->
                  <?php 
include_once 'head/sidebar.php';
          ?></div>
        <div class="col-sm-15 col-sm-offset-9 col-md-18 col-md-offset-6  col-lg-offset-5 col-lg-19 main">

<!-- <div class="col-xs-12 col-sm-6">button</div>
<div class="col-xs-12 col-sm-6">button</div>
<div class="col-xs-12 col-sm-6">button</div>
<div class="col-xs-12 col-sm-6">button</div> -->
 <div class="col-sm-24 tabs-swipe-contacts-top">
   <div class="col-sm-12 col-xs-24 col-md-6 col-lg-5 mt3-5">  <a href="/" class="active">жк интострой</a> </div>
   <div class="col-sm-12 col-xs-24 col-md-6 col-lg-5 mt3-5">  <a href="/">жк ситипарк</a> </div>
   <div class="col-sm-12 col-xs-24 col-md-6 col-lg-5 mt3-5">  <a href="/">жк лескай</a> </div>
   <div class="col-sm-12 col-xs-24 col-md-6 col-lg-5 mt3-5">  <a href="/">жк острова</a> </div>
   <div class="col-sm-12 col-xs-24   col-md-24 col-lg-4 mt3-5 ">    <a class="where" href="#nothing">Harbinger</a>  </div>

 </div>   
 <div class="clearfix"></div>


 <div class="col-sm-24 tabs-swipe-contacts-top mt3-5">
  
   <div class="slider slider_top">
    <ul class="slides">
      <li>
        <img src="/images/news/1.png"> <!-- random image -->
        <div class="caption center-align">
          <h3>НОВОСТИ</h3>
           <h3>псг интострой</h3>
        
        </div>
      </li>

   
       
    </ul>
  </div>


</div>  

 <div class="col-sm-24  mt3-5">
  <ul id="tabs-swipe-contacts" class="tabs" >
    <li class="tab col s4"><a   href="#test-swipe-1">новости</a></li>
    <li class="tab col s4"><a class="active" href="#test-swipe-2">фотоновости</a></li>
    <li class="tab col s4"><a   href="#test-swipe-3">видеоновости</a></li>
  </ul>
</div>


  <div id="test-swipe-1" class="col-sm-24  ">
    

     <?php foreach (range(1, 6) as $key => $value) { ?>
       <div class="col-sm-24 mt3-5">
   <div class="col-sm-5">
     <div class="wrap_img">
       <a href="/">
          <img class="img-responsive" src="/images/news/news/1.png" alt="">
       </a>
     </div>
   </div>

   <div class="col-sm-19">
     <div class="wrap_txt">
       <section>
         <div>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quibusdam rerum harum id praesentium vero nulla possimus quae molestiae itaque, eligendi saepe fugit magnam dignissimos earum expedita laudantium quo atque vel.</div>
         <div>Eos deleniti, aliquid quasi, necessitatibus sunt unde dicta dolorum nesciunt cum voluptatum recusandae accusantium vero porro sequi vitae, quaerat expedita! Doloremque quis distinctio nihil nobis saepe? Dignissimos animi eius tenetur!</div>
       </section>
       <hr class="y_line">
       <span>
         27-01-2017
       </span>
     </div>
   </div>
   <div class="clearfix"></div>

  </div>
  <div class="clearfix"></div>


     <?php } ?>

    <div class="col-sm-24 text-center mt3-5">
  <ul class="pagination">
                <li class="disabled"><a href="#!"><i class="material-icons">chevron_left</i></a></li>
                <li class="active"><a href="#!">1</a></li>
                <li class="waves-effect"><a href="#!">2</a></li>
                <li class="waves-effect"><a href="#!">3</a></li>
                <li class="waves-effect"><a href="#!">4</a></li>
                <li class="waves-effect"><a href="#!">5</a></li>
                <li class="waves-effect"><a href="#!">6</a></li>
                <li class="waves-effect"><a href="#!">7</a></li>
                <li class="waves-effect"><a href="#!">8</a></li>
                <li class="waves-effect"><a href="#!">9</a></li>
                <li class="waves-effect"><a href="#!"><i class="material-icons">chevron_right</i></a></li>
              </ul>

</div>


<div class="clearfix"></div>

<div class="col-sm-24 mt3-5">
<section>
  <div>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ab impedit possimus, earum. Eveniet quo dolorum quaerat totam maxime magni delectus necessitatibus repellendus, quis, possimus nisi dolore error fugiat tenetur vitae!</div>
  <div>Impedit eum repellat, reprehenderit explicabo beatae quaerat excepturi, animi aut voluptatum natus consequatur ipsa aliquam modi, libero amet necessitatibus. Reprehenderit consectetur alias, ab debitis ipsa perferendis! Accusamus quasi, porro libero!</div>
  <div>Quos odio ipsam vel magni possimus doloremque ut error veniam debitis similique in dolores aspernatur placeat eum velit, sed qui voluptate omnis voluptatibus dignissimos atque cumque minima consequuntur laboriosam provident.</div>


</section>

</div>






  </div>


<!-- second part -->
<!-- fotonews -->
  <div id="test-swipe-2" class="col-sm-24  mt3-5">
    
 
   

<?php foreach (range(1, 9) as $key => $value) { ?>


  <div class="col-sm-8 mt3-5">


  <div class="card">
            <div class="card-image">
              <img class="materialboxed" src="/images/news/news/1.png">
     
            </div>
            <div class="card-content">
              <p>I am a very simple card. I am good at containing small bits of information.
              I am convenient because I require little markup to use effectively.</p>
            </div>
            <div class="card-action">
              25-01-2017
            </div>
          </div>

</div>



<?php } ?>

<div class="clearfix"></div>

<div class="col-sm-24 text-center mt3-5">
  <ul class="pagination">
                <li class="disabled"><a href="#!"><i class="material-icons">chevron_left</i></a></li>
                <li class="active"><a href="#!">1</a></li>
                <li class="waves-effect"><a href="#!">2</a></li>
                <li class="waves-effect"><a href="#!">3</a></li>
                <li class="waves-effect"><a href="#!">4</a></li>
                <li class="waves-effect"><a href="#!">5</a></li>
                <li class="waves-effect"><a href="#!">6</a></li>
                <li class="waves-effect"><a href="#!">7</a></li>
                <li class="waves-effect"><a href="#!">8</a></li>
                <li class="waves-effect"><a href="#!">9</a></li>
                <li class="waves-effect"><a href="#!"><i class="material-icons">chevron_right</i></a></li>
              </ul>

</div>


<div class="clearfix"></div>

<div class="col-sm-24 mt3-5">
<section>
  <div>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ab impedit possimus, earum. Eveniet quo dolorum quaerat totam maxime magni delectus necessitatibus repellendus, quis, possimus nisi dolore error fugiat tenetur vitae!</div>
  <div>Impedit eum repellat, reprehenderit explicabo beatae quaerat excepturi, animi aut voluptatum natus consequatur ipsa aliquam modi, libero amet necessitatibus. Reprehenderit consectetur alias, ab debitis ipsa perferendis! Accusamus quasi, porro libero!</div>
  <div>Quos odio ipsam vel magni possimus doloremque ut error veniam debitis similique in dolores aspernatur placeat eum velit, sed qui voluptate omnis voluptatibus dignissimos atque cumque minima consequuntur laboriosam provident.</div>


</section>

</div>


 





  </div>
  <!-- end part2 -->


<!-- videonews -->
 <div id="test-swipe-3" class="col-sm-24 res-p mt3-5">
   

<?php foreach (range(1, 4) as $key => $value) { ?>


  <div class="col-sm-12 mt3-5">
<div class="wrap_video">
 
<video class="responsive-video" controls="">
    <source src="http://clips.vorwaerts-gmbh.de/big_buck_bunny.mp4" type="video/mp4">
  </video>


</div>
</div>



<?php } ?>

<div class="clearfix"></div>

<div class="col-sm-24 text-center mt3-5">
  <ul class="pagination">
                <li class="disabled"><a href="#!"><i class="material-icons">chevron_left</i></a></li>
                <li class="active"><a href="#!">1</a></li>
                <li class="waves-effect"><a href="#!">2</a></li>
                <li class="waves-effect"><a href="#!">3</a></li>
                <li class="waves-effect"><a href="#!">4</a></li>
                <li class="waves-effect"><a href="#!">5</a></li>
                <li class="waves-effect"><a href="#!">6</a></li>
                <li class="waves-effect"><a href="#!">7</a></li>
                <li class="waves-effect"><a href="#!">8</a></li>
                <li class="waves-effect"><a href="#!">9</a></li>
                <li class="waves-effect"><a href="#!"><i class="material-icons">chevron_right</i></a></li>
              </ul>

</div>


<div class="clearfix"></div>

<div class="col-sm-24 mt3-5">
<section>
  <div>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ab impedit possimus, earum. Eveniet quo dolorum quaerat totam maxime magni delectus necessitatibus repellendus, quis, possimus nisi dolore error fugiat tenetur vitae!</div>
  <div>Impedit eum repellat, reprehenderit explicabo beatae quaerat excepturi, animi aut voluptatum natus consequatur ipsa aliquam modi, libero amet necessitatibus. Reprehenderit consectetur alias, ab debitis ipsa perferendis! Accusamus quasi, porro libero!</div>
  <div>Quos odio ipsam vel magni possimus doloremque ut error veniam debitis similique in dolores aspernatur placeat eum velit, sed qui voluptate omnis voluptatibus dignissimos atque cumque minima consequuntur laboriosam provident.</div>


</section>

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





 
    <script src="/scripts/news.js"></script>


  </body>
</html>
