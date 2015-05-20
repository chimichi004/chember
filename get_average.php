<?php 
require_once('components/authentication.php');
require_once('controllers/font.php');

require_once '_database/database.php';

$total = 0;
$total1 = 0;
$total2 = 0;
$ave = 0;


$q = "select * from reviews where tutor_name = '$user_username'";
$select_result = mysqli_query($database,$q) or die(mysqli_error($database));
$rows = count($select_result);


while($rows = mysqli_fetch_assoc($select_result))
{

    $total += $rows['rate'];
    $total1 = count($rows['reviewed_by']);
    $total2 += $total1;
    

}

$ave = $total / $total2;
echo  "Tutor Rating: ".number_format($ave,2)." %";


?>