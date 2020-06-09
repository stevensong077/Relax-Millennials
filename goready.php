<?php
$id = $_GET['id'];
$username = $_GET['name'];
$ip = $_GET['ip'];
$name = "$username,$ip";

$servername = "relaxmillennial-mysqldbserver.mysql.database.azure.com";
$username = "mysqldbuser@relaxmillennial-mysqldbserver";
$password = "Generation123";
$mysqlname = "mysqldatabase51751";

$conn = mysqli_connect($servername, $username, $password, $mysqlname);
mysqli_select_db($conn,$mysqlname);
$sql = "SELECT * FROM `group` WHERE `id`='$id' " ; 
$result = mysqli_query($conn, $sql);
$resultrow = mysqli_num_rows($result); 
if($resultrow > 0){
    while ($row = mysqli_fetch_assoc($result))
    {
        $user1=$row['user1'];
        $user2=$row['user2'];
        $user3=$row['user3'];
    }
}

if ($user1 == $name){
    $update = "UPDATE `group` SET status1 = 'yes' where `id` = '$id'";
    mysqli_query($conn, $update);
}
if ($user2 == $name){
    $update = "UPDATE `group` SET status2 = 'yes' where `id` = '$id'";
    mysqli_query($conn, $update);
}
if ($user3 == $name){
    $update = "UPDATE `group` SET status3 = 'yes' where `id` = '$id'";
    mysqli_query($conn, $update);
}
mysqli_close($conn);
?>