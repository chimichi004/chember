<?php
  mysql_select_db('jh',mysql_connect('localhost','root',''))or die(mysql_error());
  $rate = $_SESSION['rate'];
  if($rate == '0.5')
  {
    echo '<span><img src="assets/images/rates/0.5.png" style="width:18%"></span>';
  }
  elseif($rate == '1.0')
  {
    echo '<span><img src="assets/images/rates/1.0.png" style="width:18%"></span>';
  }
  elseif($rate == '1.5')
  {
    echo '<span><img src="assets/images/rates/1.5.png" style="width:18%"></span>';
  }
  elseif($rate == '2.0')
  {
    echo '<span><img src="assets/images/rates/2.0.png" style="width:18%"></span>';
  }
  elseif($rate == '2.5')
  {
    echo '<span><img src="assets/images/rates/2.5.png" style="width:18%"></span>';
  }
  elseif($rate == '3.0')
  {
    echo '<span><img src="assets/images/rates/3.0.png" style="width:18%"></span>';
  }
  elseif($rate == '3.5')
  {
    echo '<span><img src="assets/images/rates/3.5.png" style="width:18%"></span>';
  }
  elseif($rate == '4.0')
  {
    echo '<span><img src="assets/images/rates/4.0.png" style="width:18%"></span>';
  }
  elseif($rate == '4.5')
  {
    echo '<span><img src="assets/images/rates/4.5.png" style="width:18%"></span>';
  }
  elseif($rate == '5.0')
  {
    echo '<span><img src="assets/images/rates/5.0.png" style="width:17%"></span>';
  }
  
  ?>
  