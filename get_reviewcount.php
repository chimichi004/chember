<?php
require_once('components/authentication.php');
require_once('controllers/font.php');

mysql_select_db('jh',mysql_connect('localhost','root',''))or die(mysql_error());
  

  
  $queryget = mysql_query("SELECT id FROM reviews where tutor_name = '$user_username'") or die(mysql_error());
  $countget = mysql_num_rows($queryget);
  if($countget > 1)
  {
    echo $countget.' comments';
  }
  else
  {
    echo $countget.' comment';
  }
?>