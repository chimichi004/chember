<?php 
   require_once('controllers/font.php'); ?>
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

</head><!--/head-->

<body class="homepage">

    <header id="header">
        <nav class="navbar navbar-inverse" role="banner">
            <div class="container">
                <div class="navbar-header">
                     <a class="navbar-brand" href="index.php"><b>Josenian Helpfie</b></a>         
                </div>

                <div class="collapse navbar-collapse navbar-right">
                    <ul class="nav navbar-nav">
                        <li class="active"><a href="login.php">Login</a></li>

                    </ul>
                </div>
            </div><!--/.container-->
        </nav><!--/nav-->

    </header><!--/header-->



    <section id="services" class="service-item">
     <div class="container">
        <div class="center wow fadeInDown">
            <h2>Already a Member?</h2>

        </div>

        <div class="row">

            <div class="col-sm-15 col-md-15">
              <div class="frm-wrapper">
                  <div class="row">
                    <div class=" col-sm-12 col-md-offset-7">
                      <div class="login-panel">
                        <div class="panel-heading">

                        </div>
                        <div class="panel-body">
                            <div class="row">
                              <div class="col-sm-12 ">
                               <form  action="components/login-process.php" method="post" name="login">
                                <div class="input-group input-group-sm">
                                  <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                                  <input type="text" class="form-control" id="email" name="username" placeholder="Username" required>
                              </div><br>


                              <div class="input-group input-group-sm">
                                  <span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
                                  <input type="password" class="form-control" id="password" name="password" placeholder="Password" required>
                              </div><br>


                              <div>
                              <button class="btn btn-lg btn-primary btn-block" class="btn btn-success" name="register">Login to your account</button>
                            </div>  
                        </form>
                    </div> 
                </div>
            </div>
        </div>
    </div>
</div>
</div>




</div><!--/.row-->
<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
</div><!--/.container-->
</section><!--/#services-->



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
