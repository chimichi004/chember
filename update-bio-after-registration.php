
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




    <section id="update-bio" class="service-item">

        <div class="center wow fadeInDown">
            <h2>Setup Your Profile</h2>
        </div>

        <div class="container">

            <div class="col-md-12">

               <div class="panel panel-default" id="sidebar">
                  <div class="panel-body"> 



                    <form action="components/update-bio-after-registration.php" method="post" enctype="multipart/form-data" id="UploadForm" autocomplete="off">

                      <div class="col-md-6">
                        <div class="form-group float-label-control">
                          <label for="">Bio</label>
                          <textarea class="form-control"  rows="10" name="user_shortbio" ></textarea>
                      </div>
                      <div class="form-group float-label-control">
                       <label for="">Birthday</label>   
                       <input type="text" class="form-control" placeholder="MM/DD/YYYY" name="user_dob"> 
                   </div>

                   <div class="form-group float-label-control">
                       <label for="">Course / Year</label>   
                       <input type="text" class="form-control" name="user_course"> 
                   </div>

               </div>  



               <div class="col-md-6">
                  <div class="form-group float-label-control">
                     <label for="">Gender</label>

                     <br><input type="radio" name="user_gender" id="optionsRadios1" value="Male" checked> Male</label>


                     &nbsp&nbsp&nbsp&nbsp&nbsp<input type="radio" name="user_gender" id="optionsRadios1" value="Female"> Female</label>

                 </div> 
                 <div class="form-group float-label-control">
                     <label for="">Country</label>
                     <input type="text" class="form-control" name="user_country" id="country">    
                 </div>



                 <div class="form-group float-label-control">
                     <label for="">Address</label>
                     <input type="text" class="form-control" name="user_address">    
                 </div>


                 <div class="form-group float-label-control">
                     <label for="">Marital Status</label>
                     <select class="form-control" name="user_relationship">
                        <option>Single</option>
                        <option>In Relationship</option>
                        <option>Complicated</option>
                        <option>Married</option>
                        <option>Divorced</option>
                        <option>Widowed</option>
                    </select>

                </div>


                <div class="form-group float-label-control">
                   <label for="">Contact Number</label>   
                   <input type="text" class="form-control" name="user_contact"> 
               </div>
           </div> 


           <hr>                 
           <div class="submit">           
              <center>
                <button class="btn btn-primary ladda-button" data-style="zoom-in" type="submit"  id="SubmitButton" value="Upload" />Proceed</button>
            </center>
        </div>
    </form>
</div>
</div>
</div>








<div class="col-xs-3"></div>

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
