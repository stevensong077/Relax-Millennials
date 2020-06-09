<?php
$id = $_GET['id'];

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
mysqli_close($conn);
$count = 0;
if ($user1 != "n"){
    $count+=1;
}
if ($user2 != "n"){
    $count+=1;
}
if ($user3 != "n"){
    $count+=1;
}
echo $count;
?>