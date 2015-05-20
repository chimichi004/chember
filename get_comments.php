<?php

require_once('components/authentication.php');
require_once('controllers/font.php');
	

  mysql_select_db('jh',mysql_connect('localhost','root',''))or die(mysql_error());



  $query = mysql_query("SELECT user.user_username as 'firstname', reviews.review as 'comments', reviews.rate as 'rating', reviews.reviewed_date as 'review_date' FROM user, reviews WHERE tutor_name='$user_username' AND user.user_username=reviews.reviewed_by") or die(mysql_error());
  
  while($row = mysql_fetch_array($query))
  {
    echo '<div class="row-fluid">
	       <div class="col-md-6">
		    <p>
		      <br><b>'.$row['firstname'].'  says ..</b> 
		    </p>
	       </div>
		   <div class="col-md-6" style = "text-align:right;">
		     <br> <br><b><i>'.$row['review_date'].'</i></b>
	       </div>            
	     </div>
		 
		 <div class="row-fluid">
	       <div class="col-md-12">
		    <p>
		      <b>'.$row['comments'].'</b>
		    </p>
	       </div>            
	     </div>
		 
		 ';
		 $_SESSION['rate'] = $row['rating'];
		  echo '
          <div class="row-fluid">
	       <div class="col-md-12">
		    <p>
		      <b>';
			  ?>
               <?php include 'get_rate_book.php'; ?>
            <?php echo'</p>
	       </div>            
	     </div>';
		 ?>   
	<?php
  }
  
?>