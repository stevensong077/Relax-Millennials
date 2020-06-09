<?php
date_default_timezone_set('Australia/Sydney');
$index1 = $_GET['id'];
$randomid = $_GET['randomid'];
$checkturn = $_GET['turn'];

$servername = "relaxmillennial-mysqldbserver.mysql.database.azure.com";
$username = "mysqldbuser@relaxmillennial-mysqldbserver";
$password = "Generation123";
$mysqlname = "mysqldatabase51751";

$turn1=10;
$turn2=10;
$turn3=10;

$time=strtotime(date("Y-m-d H:i:s"));
$conn = mysqli_connect($servername, $username, $password, $mysqlname);
mysqli_select_db($conn,$mysqlname);

if($randomid==1){
    $turn1=$checkturn-1;
    $update = "UPDATE `turn` SET time1 = '$time',`turn1`='$turn1' where `id` = '$index1'";
}
else if($randomid==2){
    $turn2=$checkturn-1;
    $update = "UPDATE `turn` SET time2 = '$time' ,`turn2`='$turn2' where `id` = '$index1'";
}
else{
    $turn3=$checkturn-1;
    $update = "UPDATE `turn` SET time3 = '$time' ,`turn3`='$turn3' where `id` = '$index1'";
}
mysqli_query($conn, $update);
mysqli_close($conn);
?>