<?php    

require_once('components/authentication.php');
require_once('controllers/font.php');


$sql = "SELECT * FROM user where user_username='$user_username'";
$result = mysqli_query($database,$sql) or die(mysqli_error($database)); 
$rws = mysqli_fetch_array($result);

?>    


<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="">
  <meta name="author" content="">
  <title>Josenian Helpie</title>
  
  <!-- core CSS -->
  <link href="css/bootstrap.min.css" rel="stylesheet">
  <link href="css/font-awesome.min.css" rel="stylesheet">
  <link href="css/animate.min.css" rel="stylesheet">
  <link href="css/prettyPhoto.css" rel="stylesheet">
  <link href="css/main.css" rel="stylesheet">
  <link href="css/responsive.css" rel="stylesheet">
    <!--[if lt IE 9]>
    <script src="js/html5shiv.js"></script>
    <script src="js/respond.min.js"></script>
    <![endif]-->       
    <link rel="shortcut icon" href="images/ico/favicon.ico">
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="images/ico/apple-touch-icon-144-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="images/ico/apple-touch-icon-114-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="images/ico/apple-touch-icon-72-precomposed.png">
    <link rel="apple-touch-icon-precomposed" href="images/ico/apple-touch-icon-57-precomposed.png">

    <!-- Bootstrap custom core CSS -->

    <link href="assets/css/base/main.css" rel="stylesheet">




    <style>
      .login-panel{
        width: 100%;
        position: absolute;
        text-shadow: 0 0 0 black;
        color: white;
        background: rgba(0, 0, 0, 0.8);
        border-radius: 1em;
        text-align: center;
      }
      .letter{
        font-size: 30px;
        font-family: "Book Antiqua",Palatino,"Palatino Linotype","Palatino LT STD",Georgia,serif
      }

      .gradient-bg{

        -webkit-box-shadow:  21px -14px 50px rgba(150, 150, 150, 0.05) inset;
        -moz-box-shadow:     21px -14px 50px rgba(150, 150, 150, 0.05) inset;
        box-shadow:          21px -14px 50px rgba(150, 150, 150, 0.05) inset;

        border-left:2px solid #DEDEDE;
        border-top:none;
        border-left:none;
        border-bottom:none;
        border-width:2px;
        -webkit-border-image: 
        -webkit-gradient(linear, 0 100%, 0 0, from(rgba(0, 0, 0, .1)), to(rgba(0, 0, 0, 0))) 1 100%;
        -webkit-border-image: 
        -webkit-linear-gradient(bottom, rgba(0, 0, 0, .1), rgba(0, 0, 0, 0)) 1 100%;
        -o-border-image:
        -o-linear-gradient(bottom, rgba(0, 0, 0, .1), rgba(0, 0, 0, 0)) 1 100%;
        -moz-border-image:
        -moz-linear-gradient(bottom, rgba(0, 0, 0, .1), rgba(0, 0, 0, 0)) 1 100%; 
      }

      .hov-action-border{
        border: 2px solid transparent;
      }
      .hov-action-border:hover{
        border: 2px solid #ffde9f;
      }
      .frm-wrapper{
        position:absolute; 
        left:100px; 
        margin-top:0px; 
        display:inline-block; 
        min-width:40%; 
        z-index:1020;
      }

      .carousel-caption{
        bootom:auto;
        top:100px;
      }

      .red{
        background-color: red;
        height: 7px;
      }

    </style>


    <style>
      @import url(//netdna.bootstrapcdn.com/font-awesome/3.2.1/css/font-awesome.css);

      fieldset, label { margin: 0; padding: 0; }

      h1 { font-size: 1.5em; margin: 10px; }

      /****** Style Star Rating Widget *****/

      .rating { 
       border: none;
       float: left;
     }

     .rating > input { display: none; } 
     .rating > label:before { 
       margin: 5px;
       font-size: 1.25em;
       font-family: FontAwesome;
       display: inline-block;
       content: "\f005";
     }

     .rating > .half:before { 
       content: "\f089";
       position: absolute;
     }

     .rating > label { 
       color: #ddd; 
       float: right; 
     }

     /***** CSS Magic to Highlight Stars on Hover *****/

     .rating > input:checked ~ label, /* show gold star when clicked */
     .rating:not(:checked) > label:hover, /* hover current star */
     .rating:not(:checked) > label:hover ~ label { color: #c52d2f;  } /* hover previous stars in list */

     .rating > input:checked + label:hover, /* hover current star when changing rating */
     .rating > input:checked ~ label:hover,
     .rating > label:hover ~ input:checked ~ label, /* lighten current selection */
     .rating > input:checked ~ label:hover ~  
     /***** CSS Magic to Highlight Stars on Hover *****/

     .rating > input:checked ~ label, /* show gold star when clicked */
     .rating:not(:checked) > label:hover, /* hover current star */
     .rating:not(:checked) > label:hover ~ label { color: #c52d2f;  } /* hover previous stars in list */

     .rating > input:checked + label:hover, /* hover current star when changing rating */
     .rating > input:checked ~ label:hover,
     .rating > label:hover ~ input:checked ~ label, /* lighten current selection */
     .rating > input:checked ~ label:hover ~ label { color: #c52d2f;  } 
   </style>   






 </head><!--/head-->

 <body class="homepage">

  <header id="header">
    <nav class="navbar navbar-inverse" role="banner">
      <div class="container">
        <div class="navbar-header">
          <a class="navbar-brand" href=""><b>Josenian Helpfie</b></a>         
        </div> <ul class="nav navbar-nav">

         <li>
         <a href="home.php"><i class="glyphicon glyphicon-home"></i> Home</a>
       </li>
       
        <li>
         <a href="my-profile.php"><i class="fa fa-user"></i> My Profile</a>
       </li>
     </ul>


     <div class="collapse navbar-collapse navbar-right">
      <ul class="nav navbar-nav">
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-user"></i> <?php echo $rws['user_firstname'];?> <?php echo $rws['user_lastname'];?><strong class="caret"></strong></a>                  
          <ul class="dropdown-menu">
            <li>
              <a href="edit-profile.php"><i class="fa fa-edit"></i> Edit Profile</a>
            </li>
          </ul>
        </li>
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown">
            <i class="fa fa-bars" style="font-size: 1.27em;"></i>
          </a>
          <ul class="dropdown-menu">
            <li>
              <a href="components/logout.php"><i class="fa fa-mail-reply"></i> Logout</a>
            </li>
          </ul>
        </li>
      </ul>


    </div>
  </div><!--/.container-->
</nav><!--/nav-->

</header><!--/header-->




    <section id="about-us">
        <div class="container">
      <div class="center wow fadeInDown">
        <h2><font color="green">Josenian Helpfie</font></h2>
        
      </div>
      
      <!-- about us slider -->
      <div id="about-slider">
        <div id="carousel-slider" class="carousel slide" data-ride="carousel">
          <!-- Indicators -->
            <ol class="carousel-indicators visible-xs">
              <li data-target="#carousel-slider" data-slide-to="0" class="active"></li>
              <li data-target="#carousel-slider" data-slide-to="1"></li>
              <li data-target="#carousel-slider" data-slide-to="2"></li>
            </ol>

          <div class="carousel-inner">
            <div class="item active">
              <img src="images/slider1.jpg" class="img-responsive" alt=""> 
             </div>
             <div class="item">
              <img src="images/slider2.jpg" class="img-responsive" alt=""> 
             </div> 
            
          </div>
          
          <a class="left carousel-control hidden-xs" href="#carousel-slider" data-slide="prev">
            <i class="fa fa-angle-left"></i> 
          </a>
          
          <a class=" right carousel-control hidden-xs"href="#carousel-slider" data-slide="next">
            <i class="fa fa-angle-right"></i> 
          </a>
        </div> <!--/#carousel-slider-->
      </div><!--/#about-slider-->
      
      <br>
    <div class="row demo-row">
        <div class="col-xs-3">
      </div>
        
      <div class="col-xs-3">
        <a href="find-a-tutor.php" class="btn btn-block btn-lg btn-success"><span class="fa fa-search"></span> Find a Tutor</a>
      </div>
      
      <div class="col-xs-3">
        <a href="become-a-tutor.php" class="btn btn-block btn-lg btn-success"><span class="fa fa-user"></span> Become a Tutor</a>
      </div>
      
      <div class="col-xs-3"></div>
    </div> <!-- /button row -->






 

 
       
      </div><!--section-->
    </div><!--/.container-->
    </section><!--/about-us-->













  <footer id="footer" class="midnight-blue">
    <div class="container">
      <div class="row">

        <center>&copy; All Rights Reserved 2015 - GermZboy23.</center>

      </div>
    </div>
  </footer><!--/#footer-->

  <script src="js/jquery.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/jquery.prettyPhoto.js"></script>
  <script src="js/jquery.isotope.min.js"></script>
  <script src="js/main.js"></script>
  <script src="js/wow.min.js"></script>
</body>
</html>
