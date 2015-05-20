<?php    

require_once('components/authentication.php');
require_once('controllers/font.php');

if (isset($_GET['user_username'])) {
  $user_username = $_GET['user_username'];
}
$sql = "SELECT * FROM user where user_username='$user_username'";
$result = mysqli_query($database,$sql) or die(mysqli_error()); 
$rws = mysqli_fetch_array($result);       


$current_user = $_SESSION['user_username'];
$sql = "SELECT * FROM user WHERE user_username='$current_user'";
$result = mysqli_query($database,$sql);
$row = mysqli_fetch_array($result);  
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
      @import url(//netdna.bootstrapcdn.com/font-awesome/3.2.1/css/font-awesome.css);
      

      
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
      .rating:not(:checked) > label:hover ~ label { color: #FFD700;  } /* hover previous stars in list */
      
      .rating > input:checked + label:hover, /* hover current star when changing rating */
      .rating > input:checked ~ label:hover,
      .rating > label:hover ~ input:checked ~ label, /* lighten current selection */
      .rating > input:checked ~ label:hover ~ 
      /***** CSS Magic to Highlight Stars on Hover *****/
      
      .rating > input:checked ~ label, /* show gold star when clicked */
      .rating:not(:checked) > label:hover, /* hover current star */
      .rating:not(:checked) > label:hover ~ label { color: #FFD700;  } /* hover previous stars in list */
      
      .rating > input:checked + label:hover, /* hover current star when changing rating */
      .rating > input:checked ~ label:hover,
      .rating > label:hover ~ input:checked ~ label, /* lighten current selection */
      .rating > input:checked ~ label:hover ~ label { color: #FFED85;  } 
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
            <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-user"></i> <?php echo $row['user_firstname'];?> <?php echo $row['user_lastname'];?><strong class="caret"></strong></a>                  
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



<section id="about-us" class="service-item">





 <div class="profile">
  <div class="row clearfix">
    <!-- <div class="col-md-12 column"> -->
    <div>
      <center>
        <img src="userfiles/avatars/<?php echo $rws['user_avatar'];?>" class="img-responsive profile-avatar">
        <br>
        <div class="btn-group">
          <a href="http://www.facebook.com/sharer.php?u=<?php echo $url ?> &t=<?php echo $rws['user_firstname'];?> <?php echo $rws['user_lastname'];?> " alt="Share this profile on Facebook" title="Share on Facebook" target="_blank" ><button type="button" class="btn btn-default"><i class="fa fa-facebook"></i></button></a>
          <a href="http://twitter.com/share?text=<?php echo $rws['user_firstname'];?> <?php echo $rws['user_lastname'];?>&url=<?php echo $url ?>" alt="Tweet This Post" title="Tweet about the profile" target="_blank"><button type="button" class="btn btn-default"><i class="fa fa-twitter"></i></button></a>
          <a href="https://plusone.google.com/_/+1/confirm?hl=en-US&url=<?php echo $url ?>" alt="Share this profile on Google+" title="Share on Google+" target="_blank" ><button type="button" class="btn btn-default"><i class="fa fa-google-plus"></i></button></a>
        </div>
      </center>
      <h1 class="text-center profile-text profile-name"><?php echo $rws['user_firstname'];?> <?php echo $rws['user_lastname'];?></h1>
      <h2 class="text-center"><?php echo $rws['user_course'];?></h2>
      <h2 class="text-center"><?php include 'get_reviewcount.php';?></h2>
      <h2 class="text-center"><?php require_once 'get_average.php';?></h2>
      <br>






      <div class="row">
       <div class="col-lg-1"></div>
       <div class="col-lg-9">
        <ul id="myTab" class="nav nav-tabs" role="tablist">
          <li role="presentation" class="active"><a href="#home" id="home-tab" role="tab" data-toggle="tab" aria-controls="home" aria-expanded="true">Personal Information</a></li>
          <li role="presentation"><a href="#profile" role="tab" id="profile-tab" data-toggle="tab" aria-controls="profile">Comments</a></li>

        </ul>
        <div id="myTabContent" class="tab-content">
          <div role="tabpanel" class="tab-pane fade in active" id="home" aria-labelledBy="home-tab"><br>



            <div class="col-md-15 column">
              <table class="table">

                <tbody>
                  <tr class="active">
                    <td> <p class="profile-details"><i class="fa fa-user"></i>&nbsp&nbspBio</p> </td>
                    <td> </td>
                    <td> <p><?php echo $rws['user_shortbio'];?></p> </td>
                    <td> </td>
                    <td> </td>
                  </tr>
                  <tr class="success">
                    <td> <p class="profile-details"><i class="glyphicon glyphicon-home"></i>&nbsp&nbspAddress</p> </td>
                    <td></td>
                    <td> <p><?php echo $rws['user_address'];?></p> </td>
                    <td> </td>
                    <td> </td>
                  </tr>
                  <tr bgcolor="#ffa07a">
                    <td> <p class="profile-details"><i class="fa fa-envelope"></i>&nbsp&nbspEmail</p> </td>
                    <td></td>
                    <td> <p><?php echo $rws['user_email'];?></p></td>
                    <td> </td>
                    <td> </td>
                  </tr>
                  <tr class="warning">
                    <td>  <p class="profile-details"><i class="fa fa-user"></i>&nbsp&nbspGender</p> </td>
                    <td> </td>
                    <td> <p><?php echo $rws['user_gender'];?></p> </td>
                    <td> </td>
                    <td> </td>
                  </tr>
                  <tr class="danger">
                    <td> <p class="profile-details"><i class="fa fa-users"></i>&nbsp&nbspMarital Status</p> </td>
                    <td></td>
                    <td> <p><?php echo $rws['user_relationship'];?></p> </td>
                    <td> </td>
                    <td> </td>
                  </tr>
                  <tr bgcolor="#afeeee">
                    <td> <p class="profile-details"><i class="fa fa-calendar"></i>&nbsp&nbspDate of Birth</p> </td>
                    <td> </td>
                    <td> <p><?php echo $rws['user_dob'];?></p> </td>
                    <td> </td>
                    <td> </td>
                  </tr>
                  <tr bgcolor="#ee82ee">
                    <td>  <p class="profile-details"><i class="fa fa-phone"></i> &nbsp&nbspContact Number</p></td>
                    <td></td>
                    <td> <p><?php echo $rws['user_contact'];?></p></td>
                    <td> </td>
                    <td> </td>
                  </tr>


                  <tr>
                    <td><br><br></td>
                  </tr>


                  <tr>
                    <th>Subject</th>
                    <th>Date</th>
                    <th>From</th>
                    <th>To</th>
                    <th>Rate</th>
                  </tr><!-- Table Header -->

                  <?php 
                  $subject = "select * from schedule where tutor_name = '$user_username'";
                  $select_result = mysqli_query($database,$subject) or die(mysqli_error($database));
                  $rows = count($select_result);
                  while($rows = mysqli_fetch_assoc($select_result))
                  {


                   ?>

                   <tr>


                    <td><?php echo $rows['subject'];?></td>
                    <td><?php echo $rows['dates'];?></td>
                    <td><?php echo $rows['time_from'];?></td>
                    <td><?php echo $rows['time_to'];?></td>
                    <td><?php echo $rows['rate'];?></td>
                  </tr><!-- Table Row -->

                  <?php } ?>


                </tbody>
              </table>
              
            </div>
 </div>






<!-- COMMENT TAB -->
          <div role="tabpanel" class="tab-pane fade" id="profile" aria-labelledBy="profile-tab"><br>
           <p>
            <?php require_once('get_comments.php') ?>
          </p>


          <input type="hidden" id='review' value="<?php echo $current_user; ?>"></input>  
          <input type="hidden" id='tutor' value="<?php echo $user_username;; ?>"></input> 
          <textarea style="width:100%" id="comments">
          </textarea><br>
          <div class="row">
            <div class="col-md-6">
              <p class="rating">
                <input type="radio" id="star5" class="rates" name="rating" value="5"  required="required"/><label class = "full" for="star5" title="awesome - 5 stars"></label>
                <input type="radio" class="rates" id="star4half" name="rating" value="4.5"  required="required"/><label class="half" for="star4half" title="pretty awesome - 4.5 stars"></label>
                <input type="radio" class="rates" id="star4" name="rating" value="4"  required="required"/><label class = "full" for="star4" title="pretty fantastic - 4 stars"></label>
                <input type="radio" class="rates" id="star3half" name="rating" value="3.5"  required="required"/><label class="half" for="star3half" title="fantastic - 3.5 stars"></label>
                <input type="radio" class="rates" id="star3" name="rating" value="3"  required="required"/><label class = "full" for="star3" title="best - 3 stars"></label>
                <input type="radio" class="rates" id="star2half" name="rating" value="2.5"  required="required"/><label class="half" for="star2half" title="better - 2.5 stars"></label>
                <input type="radio" class="rates" id="star2" name="rating" value="2"  required="required"/><label class = "full" for="star2" title="good - 2 stars"></label>
                <input type="radio" class="rates" id="star1half" name="rating" value="1.5"  required="required"/><label class="half" for="star1half" title="slightly poor - 1.5 stars"></label>
                <input type="radio" class="rates" id="star1" name="rating" value="1"  required="required"/><label class = "full" for="star1" title="poor - 1 star"></label>
                <input type="radio" class="rates" id="starhalf" name="rating" value="0.5"  required="required"/><label class="half" for="starhalf" title="very poor - 0.5 stars"></label>                  
              </p>
            </div>
            <div class="col-md-6" style="text-align:right;">
              <br>
              <a class="btn btn-danger btn-group-xs" href="" tabindex="-1" id="post_review">Post</a>

            </div>       
          </div>
        </p>


      </div>


    </div>
    <!-- </div> -->
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

<script>
  $('#post_review').click(function(e){
    e.preventDefault();
    var comments = $('#comments').val();
    var rateselected = $('.rates:checked');
    var rate = rateselected.val();
    var review = $('#review').val();
    var tutor = $('#tutor').val();
    
    var mydata = 'comments='+ comments + '&rate='+ rate + '&review=' + review + '&tutor=' + tutor;

    
    $.ajax({
      type: "POST",
      url: "savereviews.php",
      data:mydata,
      
      success: function(response){
        if(response>0){
          alert("Thank you for submitting");
          window.location = "my-profile.php";
        }
        else
        {
          alert("There something wrong with your query...");
        }
      },
      error: function(xhr, ajaxOptions, thrownError){
        alert(thrownError);
      }
    });
  });
</script>

</body>
</html>