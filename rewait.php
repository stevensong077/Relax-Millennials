<?php
$id = $_GET['id'];
$name = $_GET['name'];

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
        $status1=$row['status1'];
        $status2=$row['status2'];
        $status3=$row['status3'];
    }
}

$count = 3;
if ($status1 == "no"||$status2 == "no"||$status3 == "no"){
    $update = "DELETE FROM `group` WHERE `id`='$id'";
    mysqli_query($conn, $update);
}

mysqli_close($conn);
echo $count;
?>