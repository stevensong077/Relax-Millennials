<?php
date_default_timezone_set('Australia/Sydney');
$id = $_GET['id'];
$name = $_GET['name'];

$servername = "relaxmillennial-mysqldbserver.mysql.database.azure.com";
$username = "mysqldbuser@relaxmillennial-mysqldbserver";
$password = "Generation123";
$mysqlname = "mysqldatabase51751";

$time=strtotime(date("Y-m-d H:i:s"));
$time1=$time + 1;
$time2=$time + 2;

$conn = mysqli_connect($servername, $username, $password, $mysqlname);
mysqli_select_db($conn,$mysqlname);
$sql = "SELECT * FROM `turn` WHERE `id`='$id' " ; 
$result = mysqli_query($conn, $sql);
$resultrow = mysqli_num_rows($result); 
if($resultrow <= 0){
$sql = "INSERT INTO `turn`(`id`, `time1`, `time2`, `time3`, `turn1`, `turn2`, `turn3`) VALUES ('$id','$time','$time1','$time2','3','3','3')" ; 
$result = mysqli_query($conn, $sql);
}
mysqli_close($conn);

echo $time2;
?>