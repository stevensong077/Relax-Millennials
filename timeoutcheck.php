<?php
date_default_timezone_set('Australia/Sydney');
$index1 = $_GET['id'];
$randomid = $_GET['randomid'];

$servername = "relaxmillennial-mysqldbserver.mysql.database.azure.com";
$username = "mysqldbuser@relaxmillennial-mysqldbserver";
$password = "Generation123";
$mysqlname = "mysqldatabase51751";



$conn = mysqli_connect($servername, $username, $password, $mysqlname);
mysqli_select_db($conn,$mysqlname);
$query="SELECT * FROM `turn` WHERE `id`='$index1' ";
$result = mysqli_query($conn, $query);
$resultrow = mysqli_num_rows($result); 
if($resultrow > 0){
while ($row = mysqli_fetch_assoc($result))
{
    $turn1=$row['time1'];
    $turn2=$row['time2'];
    $turn3=$row['time3'];
}
}
mysqli_close($conn);
$nowtime;
$time=strtotime(date("Y-m-d H:i:s"));
$update = "UPDATE `turn` SET time1 = '$time' where `id` = '$index1'";
if($randomid==1){
     $nowtime=180-$time+$turn3;
}
else if($randomid==2){
    $nowtime=180-$time+$turn1;
}
else{
    $nowtime=180-$time+$turn2;
}

echo $nowtime;
?>