<?php
//define variables
$servername = "relaxmillennial-mysqldbserver.mysql.database.azure.com";
$username = "mysqldbuser@relaxmillennial-mysqldbserver";
$password = "Generation123";
$mysqlname = "mysqldatabase51751";
$data = array();

//connect to database
$conn = mysqli_connect($servername, $username, $password, $mysqlname);
mysqli_select_db($conn, $mysqlname);

//check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

$sql = "SELECT * FROM `sensor`";
$result = mysqli_query($conn, $sql);

if ($result) {
    while ($row = mysqli_fetch_assoc($result)) {
        $data[] = $row;
    }
    //transfer data to json 
    $json_emotion = json_encode($data);
} else { }
