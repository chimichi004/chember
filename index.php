<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Josenian Helpfie</title>

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
            top:120px; 
            display:inline-block; 
            min-width:40%; 
            z-index:1020;
        }

        .carousel-caption{
            bootom:auto;
            top:100px;
        }

        /* carousel custom fade effect */
        .carousel.carousel-fade{
            background:#2ecc34;
        }
        .carousel-inner{
            min-height:500px;
        }
        .carousel.carousel-fade .carousel-inner >.item {
            -webkit-transition: opacity 0.7s ease-in-out;
            -moz-transition: opacity 0.7s ease-in-out;
            -ms-transition: opacity 0.7s ease-in-out;
            -o-transition: opacity 0.7s ease-in-out;
            transition: opacity 0.7s ease-in-out;
            opacity:1;
            position:absolute;
            left: 0;
            top:0;
            right:0;
            bottom:0;
            z-index: 1;
            display:block;
        }

        .carousel.carousel-fade .active.item {
            opacity:1;
            -webkit-transition: opacity 0.7s ease-in-out;
            -moz-transition: opacity 0.7s ease-in-out;
            -ms-transition: opacity 0.7s ease-in-out;
            -o-transition: opacity 0.7s ease-in-out;
            transition: opacity 0.7s ease-in-out;
            z-index: 2;
        }

        .carousel.carousel-fade .active.left,
        .carousel.carousel-fade .active.right {
            -webkit-transition: opacity 0.7s ease-in-out;
            -moz-transition: opacity 0.7s ease-in-out;
            -ms-transition: opacity 0.7s ease-in-out;
            -o-transition: opacity 0.7s ease-in-out;
            transition: opacity 0.7s ease-in-out;
            left: 0;
            z-index: 2;
            opacity: 0;
            filter: alpha(opacity=0);
        }

        .carousel.carousel-fade .next,
        .carousel.carousel-fade .prev {
            left: 0;
            z-index: 1;
        }

        .carousel.carousel-fade .carousel-control {
            z-index: 3;
        }

        .carousel-control .icon-prev, 
        .carousel-control .icon-next{
            text-shadow: 2px 2px 3px rgba(0,0,0, .4);
        }
        /* effect-end*/

        /* helper classes*/
        .relative{
            position:relative;
        }

        @media (max-width:768px){
            .login-panel{
                width: 80%;
                margin: 50px 20px auto;
                position: absolute;
                text-shadow: 0 0 0 black;
                color: white;
                background: rgba(236, 240, 241,.3);
                border-radius: 1em;
            }
            .frm-wrapper{
                position:absolute; 
                left:10%;
                right:20%;
                top:100px; 
                display:inline-block; 
                width:80%; 
                z-index:1020;
            }
            .carousel-inner{
                min-height:500px;
                max-width:768px;
                overflow:hidden;
            }
            .carousel-inner > .item{
                max-width:768px;
            }
            .carousel-inner > .item > img {
                position: relative;
                top: 0;
                left: 0;
                max-width:none;
                width: auto;
                height: 500px;
            }
            .carousel-caption{
                bottom:50px;
            }
            
        }

        @media (min-width: 960px){
            .carousel-control .icon-prev, 
            .carousel-control .icon-next{
                font-size:60px;
            }

        }
        .pic-center{
            padding-left: 60%;
            padding-top: 10%;
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

    <section id="main-slider" class="no-margin">
       <div id="carousel" class="carousel slide carousel-fade" data-ride="carousel">
  <ol class="carousel-indicators">
    <li data-target="#carousel" data-slide-to="0" class="active"></li>
    <li data-target="#carousel" data-slide-to="1"></li>
    <li data-target="#carousel" data-slide-to="2"></li>
    <li data-target="#carousel" data-slide-to="3"></li>
    <li data-target="#carousel" data-slide-to="4"></li>
    <li data-target="#carousel" data-slide-to="5"></li>
    <li data-target="#carousel" data-slide-to="6"></li>
    <li data-target="#carousel" data-slide-to="7"></li>
    <li data-target="#carousel" data-slide-to="8"></li>
  </ol>
  <!-- Carousel items -->
  <div class="carousel-inner">
    <div class="active item"><img class="imagecarousel" src="images/slider/1.png"></div>
    <div class="item"><img class="imagecarousel" src="images/slider/2.png"></div>
    <div class="item"><img class="imagecarousel" src="images/slider/3.png"></div>
    <div class="item pic-center"><img class="imagecarousel " src="images/try-gif/Boy2_3.gif"></div>
    <div class="item pic-center"><img class="imagecarousel " src="images/try-gif/hand.gif"></div>
    <div class="item pic-center"><img class="imagecarousel " src="images/try-gif/money.gif"></div>
    <div class="item pic-center"><img class="imagecarousel " src="images/try-gif/sand-clock-loading.gif"></div>
    <div class="item pic-center"><img class="imagecarousel " src="images/try-gif/stuff.gif"></div>
    <div class="item pic-center"><img class="imagecarousel " src="images/try-gif/stuff-no-smooth.gif"></div>
  </div>
  <!-- Carousel nav -->

</div>
        <a class="prev hidden-xs" href="#main-slider" data-slide="prev">
            <i class="fa fa-chevron-left"></i>
        </a>
        <a class="next hidden-xs" href="#main-slider" data-slide="next">
            <i class="fa fa-chevron-right"></i>
        </a>


        <div class="frm-wrapper">
            <div class="row">
                <div class=" col-sm-12 col-md-offset-0">
                    <div class="login-panel">
                        <div class="panel-heading">
                         <div class="letter"><br>Register</div>  
                         </div>
                     <div class="panel-body">

                        <form action="components/registration.php" method="post">
                            <div class="row">
                                <div class="col-sm-12 ">
                                    <div class="input-group input-group-sm">
                                      <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                                      <input type="text" class="form-control" name="user_firstname" placeholder="First Name" required>
                                  </div><br>


                                  <div class="input-group input-group-sm">
                                      <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                                      <input type="text" class="form-control" name="user_lastname" placeholder="Last Name" required>
                                  </div><br>


                                  <div class="input-group input-group-sm">
                                      <span class="input-group-addon"><i class="fa fa-envelope"></i></span>
                                      <input type="email" class="form-control" name="user_email" placeholder="Email" required>
                                  </div><br>



                                  <div class="input-group input-group-sm">
                                    <span class="input-group-addon"><i class="glyphicon glyphicon-user"> </i></span>
                                    <input type="text" class="form-control" name="user_username" placeholder="Username" >
                                </div><br>


                                <div class="input-group input-group-sm">
                                  <span class="input-group-addon"><i class="glyphicon glyphicon-lock"> </i></span>
                                  <input type="password" class="form-control" name="user_password" placeholder="Password" required>
                              </div><br>

                              <div>
                                <button class="btn btn-lg btn-primary btn-block" name="register">Sign Up</button>
                            </div>
                        </form>

                    </div> 
                </div>
            </div>
        </div>
    </div>



</div>
</div>

</section><!--/#main-slider-->






    <section id="middle">
        <div class="container">
            <div class="row">
                <div class="col-sm-6 wow fadeInDown">
                    <div class="skill">
                        <h1>Its Been A Long Time,<br>Now We're Here</h1>
                        
                           <iframe width="1150px" height="500" src="https://www.youtube.com/embed/vpEC7DioAo4" frameborder="0" allowfullscreen></iframe>
                        
                    </div>
                  
                </div><!--/.col-sm-6-->



            </div><!--/.row-->
        </div><!--/.container-->
    </section><!--/#middle-->






    <section id="recent-works">
        <div class="container">
            <div class="center wow fadeInDown">
                <h2>Gallery</h2>
               
            </div>

            <div class="row">
                <div class="col-xs-12 col-sm-4 col-md-3">
                    <div class="recent-work-wrap">
                        <img class="img-responsive" src="try-gif/boy2_3.gif" alt="">
                        <div class="overlay">
                            <div class="recent-work-inner">
                                <h3><a href="#">Bigger Picture</a> </h3>
                                <p>Josenian Helpfie Gallery</p>
                                <a class="preview" href="try-gif/boy2_3.gif" rel="prettyPhoto"><i class="fa fa-eye"></i> View</a>
                            </div> 
                        </div>
                    </div>
                </div>   

                <div class="col-xs-12 col-sm-4 col-md-3">
                    <div class="recent-work-wrap">
                        <img class="img-responsive" src="try-gif/hand.gif" alt="">
                        <div class="overlay">
                            <div class="recent-work-inner">
                                <h3><a href="#">Bigger Picture</a> </h3>
                                <p>Josenian Helpfie Gallery</p>
                                <a class="preview" href="try-gif/hand.gif" rel="prettyPhoto"><i class="fa fa-eye"></i> View</a>
                            </div> 
                        </div>
                    </div>
                </div> 

                <div class="col-xs-12 col-sm-4 col-md-3">
                    <div class="recent-work-wrap">
                        <img class="img-responsive" src="try-gif/money.gif" alt="">
                        <div class="overlay">
                            <div class="recent-work-inner">
                                <h3><a href="#">Bigger Picture</a> </h3>
                                <p>Josenian Helpfie Gallery</p>
                                <a class="preview" href="try-gif/money.gif" rel="prettyPhoto"><i class="fa fa-eye"></i> View</a>
                            </div> 
                        </div>
                    </div>
                </div>   

                <div class="col-xs-12 col-sm-4 col-md-3">
                    <div class="recent-work-wrap">
                        <img class="img-responsive" src="try-gif/sand-clock-loading.gif" alt="">
                        <div class="overlay">
                            <div class="recent-work-inner">
                                 <h3><a href="#">Bigger Picture</a> </h3>
                                <p>Josenian Helpfie Gallery</p>
                                <a class="preview" href="try-gif/sand-clock-loading.gif" rel="prettyPhoto"><i class="fa fa-eye"></i> View</a>
                            </div> 
                        </div>
                    </div>
                </div>   
                
                <div class="col-xs-12 col-sm-4 col-md-3">
                    <div class="recent-work-wrap">
                        <img class="img-responsive" src="try-gif/stuff.gif" alt="">
                        <div class="overlay">
                            <div class="recent-work-inner">
                                 <h3><a href="#">Bigger Picture</a> </h3>
                                <p>Josenian Helpfie Gallery</p>
                                <a class="preview" href="try-gif/stuff.gif" rel="prettyPhoto"><i class="fa fa-eye"></i> View</a>
                            </div> 
                        </div>
                    </div>
                </div>   

                <div class="col-xs-12 col-sm-4 col-md-3">
                    <div class="recent-work-wrap">
                        <img class="img-responsive" src="try-gif/stuff-no-smooth.gif" alt="">
                        <div class="overlay">
                            <div class="recent-work-inner">
                                <h3><a href="#">Bigger Picture</a> </h3>
                                <p>Josenian Helpfie Gallery</p>
                                <a class="preview" href="try-gif/stuff-no-smoothf.gif" rel="prettyPhoto"><i class="fa fa-eye"></i> View</a>
                            </div> 
                        </div>
                    </div>
                </div> 

     
 
            </div><!--/.row-->
        </div><!--/.container-->
    </section><!--/#recent-works-->
















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