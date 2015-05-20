
<?php    

  require_once('components/authentication.php');
  require_once('controllers/javascript.php');
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




    <section id="update-bio" class="service-item">
      <div class="container">
       <div class="no-gutter row"> 
         <div class="col-md-12">
           <div class="panel panel-default" id="sidebar">
             <div class="panel-body">     


              <form action="components/update-profile.php" method="post" enctype="multipart/form-data" id="UploadForm">
                <!-- Nav tabs -->
                <ul class="nav nav-tabs">
                  <li class="active"><a href="#general" data-toggle="tab">Account</a></li>
                  <li><a href="#personal" data-toggle="tab">Personal</a></li>
                </ul>
                <!-- Tab panes -->
                <div class="tab-content">
                  <div class="tab-pane fade in active" id="general">         
                    <div class="col-md-6">
                      <div class="form-group float-label-control">                      
                        <label for="">First Name</label>
                        <input type="text" class="form-control" placeholder="<?php echo $rws['user_firstname'];?>" name="user_firstname" value="<?php echo $rws['user_firstname'];?>">
                      </div>
                      <div class="form-group float-label-control">  
                        <label for="">Last Name</label>
                        <input type="text" class="form-control" placeholder="<?php echo $rws['user_lastname'];?>" name="user_lastname" value="<?php echo $rws['user_lastname'];?>">
                      </div>
                      <div class="form-group float-label-control">
                        <label for="">Profile Picture</label>
                        <input name="ImageFile" type="file" id="uploadFile"/>
                        <div class="col-md-6">
                          <div class="shortpreview">
                            <label for="">Previous Profile Picture</label>
                            <br> 
                            <img src="userfiles/avatars/<?php echo $rws['user_avatar'];?>" class="img-responsive">
                          </div>
                        </div>
                        <div class="col-md-6">
                          <div class="shortpreview" id="uploadImagePreview">
                            <label for="">Current Profile Picture</label>
                            <br> 
                            <div id="imagePreview"></div>
                          </div>
                        </div>
                      </div>
                    </div>  
                    <div class="col-md-6">



                      <div class="form-group float-label-control">
                        <label for="">Username</label>
                        <input type="text" class="form-control" placeholder="<?php echo $rws['user_username'];?>" name="user_username" value="<?php echo $rws['user_username'];?>" required>
                      </div>




                      <div class="form-group float-label-control">
                        <label for="">Password</label>
                        <input type="password" class="form-control" placeholder="<?php echo $rws['user_password'];?>" name="user_password" value="<?php echo $rws['user_password'];?>">
                      </div>
                      <div class="form-group float-label-control">
                        <label for="">Email</label> 
                        <input type="text" class="form-control" placeholder="<?php echo $rws['user_email'];?>" name="user_email" value="<?php echo $rws['user_email'];?>">
                      </div>  
                    </div>
                  </div>
                  <div class="tab-pane fade" id="personal">
                    <div class="col-md-6">
                      <div class="form-group float-label-control">
                        <label for="">Short Bio</label>
                        <textarea class="form-control" placeholder="<?php echo $rws['user_shortbio'];?>" rows="10" placeholder="<?php echo $rws['user_shortbio'];?>" name="user_shortbio" value="<?php echo $rws['user_shortbio'];?>"><?php echo $rws['user_shortbio'];?></textarea>
                      </div>
                      <div class="form-group float-label-control">
                        <label for="">Birthday</label>   
                        <input type="text" class="form-control" placeholder="<?php echo $rws['user_dob'];?>" name="user_dob" value="<?php echo $rws['user_dob'];?>">      
                      </div>



                      <label for="">Gender</label>              
                      <div class="form-group float-label-control">
                        <div class="radio-inline">
                          <label>
                            <input type="radio" name="user_gender" id="optionsRadios1" value="Male" checked>Male</label>
                          </div>              
                          <div class="radio-inline">
                            <label>
                              <input type="radio" name="user_gender" id="optionsRadios1" value="Female">Female</label>
                            </div>
                          </div>
                          <div class="form-group float-label-control">
                            <label for="">Country</label>
                            <input type="text" class="form-control" placeholder="<?php echo $rws['user_country'];?>" name="user_country" value="<?php echo $rws['user_country'];?>" id="country">    
                          </div>
                        </div>


                        <div class="col-md-6">
                          <div class="form-group float-label-control">
                            <label for="">Address</label>
                            <input type="text" class="form-control" placeholder="<?php echo $rws['user_address'];?>" name="user_address" value="<?php echo $rws['user_address'];?>">    
                          </div>
                          
                        </div>

                        <div class="col-md-6">
                          <div class="form-group float-label-control">
                            <label for="">Course / Year</label>
                            <input type="text" class="form-control" placeholder="<?php echo $rws['user_course'];?>" name="user_course" value="<?php echo $rws['user_course'];?>">    
                          </div>
                          
                        </div>

                        <div class="col-md-6">
                          <div class="form-group float-label-control">
                            <label for="">Contact Number</label>
                            <input type="text" class="form-control" placeholder="<?php echo $rws['user_contact'];?>" name="user_contact" value="<?php echo $rws['user_contact'];?>">    
                          </div>
                          
                        </div>
                      </div>
                    </div>     
                  

                    <div class="submit">
                      <center>
                        <button class="btn btn-primary ladda-button" data-style="zoom-in" type="submit"  id="SubmitButton" value="Upload" />Save Your Profile</button>
                      </center>
                    </div>
                  </form>

                </div>
              </div>
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
