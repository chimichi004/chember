<?php
session_start();

mysql_select_db('jh',mysql_connect('localhost','root',''))or die(mysql_error());

$tutor_name = $_POST['tutor'];
$review = $_POST['comments'];
$rate = $_POST['rate'];
$user_username = $_POST['review'];
$date = date('Y-m-d');
$status = "Active";

$query = mysql_query("INSERT INTO reviews VALUES('', '$tutor_name', '$review', '$rate', '$user_username', '$date', '$status')") or die(mysql_error());

if($query){
	echo 1;
}
else
{
	echo 0;
}

?>