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
        $user1=$row['status1'];
        $user2=$row['status2'];
        $user3=$row['status3'];
    }
}
mysqli_close($conn);
$count = 0;
if ($user1 == "yes"){
    $count+=1;
}
if ($user2 == "yes"){
    $count+=1;
}
if ($user3 == "yes"){
    $count+=1;
}
echo $count;
?>