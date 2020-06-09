<?php
$index1 = $_GET['id'];

$servername = "relaxmillennial-mysqldbserver.mysql.database.azure.com";
$username = "mysqldbuser@relaxmillennial-mysqldbserver";
$password = "Generation123";
$mysqlname = "mysqldatabase51751";

$conn = mysqli_connect($servername, $username, $password, $mysqlname);
mysqli_select_db($conn,$mysqlname);

//game over and delete the group
$query="SELECT * FROM `turn` WHERE `id`='$index1' ";
$result = mysqli_query($conn, $query);
$resultrow = mysqli_num_rows($result); 
if($resultrow > 0){
while ($row = mysqli_fetch_assoc($result))
{
    $turn1=$row['turn1'];
    $turn2=$row['turn2'];
    $turn3=$row['turn3'];
}
}

if($turn1 <= 0 && $turn2 <= 0 && $turn3 <= 0){
    $update = "DELETE FROM `group` WHERE `id`='$index1'";
    mysqli_query($conn, $update);
}
mysqli_close($conn);
?>