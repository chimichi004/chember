
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

    <link href="forms/css/style.css" rel='stylesheet' type='text/css' />
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>



    <script src="jquery-ui-1.10.3.custom/js/jquery-1.9.1.js"></script>
    <script src= "jquery-ui-1.10.3.custom/development-bundle/ui/jquery.ui.tabs.js"></script>
    <script src="jquery-ui-1.10.3.custom/js/jquery-ui-1.10.3.custom.js"></script>
    <link rel="stylesheet" href="jquery-ui-1.10.3.custom/css/ui-lightness/jquery-ui-1.10.3.custom.css">
    <script src= "jquery-ui-1.10.3.custom/development-bundle/ui/jquery.ui.dialog.js"></script>

    <script>


      $(function() {
        $( "#date" ).datepicker();
      });



    </script>




  </head><!--/head-->

  <body>


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



<section id="services" class="service-item">
<div class="Login">
<div class="Login-head">
    <h3>Teaching Schedule</h3>
  </div>

  <form method="post" action="process-become-a-tutor.php">
    <div class="ticker">
      <h4>Subject Course</h4>
      <input type="text" name="subject" >
      <div class="clear"> </div>
    </div>



    <div>
      <h4>Date</h4>
      <input type="text" id="date" name="schedule" >
      <div class="clear"> </div>
    </div>



    <div>
      <h4>From</h4>
      <input type="time" name="from" >
      <div class="clear"> </div>
    </div>


    <div>
      <h4>To</h4>
    <input type="time" name="to">
      <div class="clear"> </div>
    </div>

     <div>
      <h4>Rate Per Hour</h4>
     <input type="text" name="rate">
      <div class="clear"> </div>
    </div>


<br><br>

    <div class="submit-button">
      <input type="submit" onclick="myFunction()" value="Submit" >
    </div>
    <div class="clear"> </div>
  </div>









</div><!--/.row-->
<br><br><br><br><br><br><br><br><br><br><br>
</div><!--/.container-->
</section><!--/#services-->




<footer id="footer" class="midnight-blue">
  <div class="container">
    <div class="row">
      <center>&copy; All Rights Reserved 2015 - GermZboy23.</center>
    </div>
  </div>
</footer><!--/#footer-->
</body>
</html>
