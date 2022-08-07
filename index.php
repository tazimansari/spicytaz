
<?php
  include 'db_connection.php';
  $conn = OpenCon();
  //echo "Connected Successfully";
  //CloseCon($conn);
?>

<!DOCTYPE html>
<html lang="en">
   <head>
      <!-- basic -->
      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <!-- mobile metas -->
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <meta name="viewport" content="initial-scale=1, maximum-scale=1">
      <!-- site metas -->
      <title>spicytaz</title>
      <meta name="keywords" content="">
      <meta name="description" content="">
      <meta name="author" content="">
      <!-- bootstrap css -->
      <link rel="stylesheet" href="css/bootstrap.min.css">
      <!-- style css -->
      <link rel="stylesheet" href="css/style.css">
      <!-- Responsive-->
      <link rel="stylesheet" href="css/responsive.css">
      <!-- fevicon -->
      <link rel="icon" href="images/fevicon.png" type="image/gif" />

   </head>
   <!-- body -->
   <body class="main-layout">
      <!-- loader  -->
      <div class="loader_bg">
         <div class="loader"><img src="images/loading.gif" alt="#" /></div>
      </div>
      <!-- end loader -->
      <!-- header -->
      <header>
         <!-- header inner -->
         <div class="header">
            <div class="container">
               <div class="row">
                  <div class="col-xl-3 col-lg-3 col-md-3 col-sm-3 col logo_section">
                     <div class="full">
                        <div class="center-desk">
                           <div class="logo">
                              <a href="index.html"><img src="images/logo.png" alt="#" /></a>
                           </div>
                        </div>
                     </div>
                  </div>
                  <div class="col-xl-9 col-lg-9 col-md-9 col-sm-9">
                     <nav class="navigation navbar navbar-expand-md navbar-dark ">
                        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExample04" aria-controls="navbarsExample04" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                        </button>
                        <div class="collapse navbar-collapse" id="navbarsExample04">
                           <ul class="navbar-nav mr-auto">
                              <li class="nav-item">
                                 <a class="nav-link" href="#">About </a>
                              </li>
                              <li class="nav-item">
                                 <a class="nav-link" href="#">Screenshort</a>
                              </li>
                              <li class="nav-item">
                                 <a class="nav-link" href="#">Contact</a>
                              </li>
                           </ul>
                           <div class="Call"><a href="#"> <span class="yellow">Call Us : </span>+91 9199458740</a></div>
                        </div>
                     </nav>
                  </div>
               </div>
            </div>
         </div>
      </header>
      <!-- end header inner -->
      <!-- end header -->
      <!-- banner -->
      <section class="banner_main">
         <div class="container">
         <div class="row d_flex">
            <div class="col-md-6">
               <div class="text-bg">
                  <h1>Healthy Food Recipes</h1>
                  <p>There are many variations of passages of Lorem Ipsum available, but the majorityomised words which don't look even slightly believable</p>
                  <a class="read_more" href="#">Read More</a>
               </div>
            </div>
            <div class="col-md-6">
               <form id="request" class="main_form">
                  <div class="row">
                     <div class="col-md-12 ">
                        <input class="contactus" placeholder="Name" type="type" name="Name">
                     </div>
                     <div class="col-md-12">
                        <input class="contactus" placeholder=" Email" type="type" name="Email">
                     </div>
                     <div class="col-md-12">
                        <input class="contactus" placeholder=" Phone Number" type="type" name="Phone Number">
                     </div>
                     <div class="col-md-12">
                        <textarea class="contactus" placeholder="Message" type="type" Message="Name">Message </textarea>
                     </div>
                     <div class="col-sm-12">
                        <div class="send_btn" style="text-align: center;" onClick="sendData();">Send</div>
                     </div>
                  </div>
               </form>
            </div>
         </div>
      </section>
      <!-- end banner -->
      <!-- food -->
      <div class="food">
         <div class="container">
            <div class="row">
               <div class="col-md-12">
                  <div class="titlepage">
                     <h2> <strong class="yellow">Food </strong>Packages</h2>
                     <span>There are many variations of passages of Lorem Ipsum available, but the majorityomised words which don't look
                     even slightly believable</span>
                  </div>
               </div>
            </div>
            <div class="row">
               <div class="col-md-4">
                  <div class="food_box">
                     <i><img src="images/food1.png" alt="#"/></i>
                     <h4>Homemade</h4>
                     <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable</p>
                  </div>
               </div>
               <div class="col-md-4">
                  <div class="food_box ">
                     <i><img src="images/food2.png" alt="#"/></i>
                     <h4>Noodles</h4>
                     <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable</p>
                  </div>
               </div>
               <div class="col-md-4">
                  <div class="food_box">
                     <i><img src="images/food3.png" alt="#"/></i>
                     <h4>Egg</h4>
                     <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable</p>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <!-- end food -->
      <!-- works -->
      <div class="works">
         <div class="container">
            <div class="row">
               <div class="col-md-12">
                  <div class="titlepage">
                     <span>How it works</span>
                     <h2> <strong class="yellow">3 Step For </strong>Healthy Eating</h2>
                  </div>
               </div>
            </div>
            <div class="row">
               <div class="col-md-4">
                  <div id="white_bg" class="works_box">
                     <h4>01</h4>
                     <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable</p>
                  </div>
               </div>
               <div class="col-md-4">
                  <div id="white_bg" class="works_box ">
                     <h4>02</h4>
                     <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable</p>
                  </div>
               </div>
               <div class="col-md-4">
                  <div id="white_bg" class="works_box">
                     <h4>03</h4>
                     <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable</p>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <!-- end works -->

      <!--  footer -->
      <footer>
         <div class="footer">
            <div class="container">
               <div class="row">
                  <div class="col-md-8 offset-md-2">
                     <div class="cont">
                        <h3> Healthy Food Recipes</h3>
                        <p>There are many variations of passages of Lorem Ipsum available</p>
                     </div>
                     <button class="sub_btn" href="#">Get A Quote</button>
                  </div>
               </div>
            </div>
            <div class="copyright">
               <div class="container">
                  <div class="row">
                     <div class="col-md-12">
                        <p>Copyright 2022 All Right Reserved By Tazim</p>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </footer>
      <!-- end footer -->
      <!-- Javascript files-->
      <script src="js/jquery.min.js"></script>
      <script src="js/popper.min.js"></script>
      <script src="js/bootstrap.bundle.min.js"></script>
      <script src="js/jquery-3.0.0.min.js"></script>
      <!-- sidebar -->
      <script src="js/custom.js"></script>
   </body>
</html>


<script>
  function sendData(){
    console.log('data sent!');


  }
</script>
