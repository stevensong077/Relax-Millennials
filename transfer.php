<?php
$user=htmlentities($_POST['content']); 
$user2=addslashes($user);

$servername = "relaxmillennial-mysqldbserver.mysql.database.azure.com";
$username = "mysqldbuser@relaxmillennial-mysqldbserver";
$password = "Generation123";
$mysqlname = "mysqldatabase51751";

//connect to the database
$conn = mysqli_connect($servername, $username, $password, $mysqlname);
mysqli_select_db($conn,$mysqlname);
$insert="INSERT INTO `story`(`content`) VALUES ('$user2')";
$result=mysqli_query($conn,$insert);
mysqli_close($conn);

echo "<script type='text/javascript'>";
echo "window.location.href='share.php'";
echo "</script>"; 
?>