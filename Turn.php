<?php
date_default_timezone_set('Australia/Sydney');
$id = $_GET['id'];
$name = $_GET['name'];
$randomid = $_GET['randomid'];

$servername = "relaxmillennial-mysqldbserver.mysql.database.azure.com";
$username = "mysqldbuser@relaxmillennial-mysqldbserver";
$password = "Generation123";
$mysqlname = "mysqldatabase51751";

$conn = mysqli_connect($servername, $username, $password, $mysqlname);
mysqli_select_db($conn,$mysqlname);
$time=strtotime(date("Y-m-d H:i:s"));
$sql = "SELECT * FROM `turn` WHERE `id`='$id' " ; 
$result = mysqli_query($conn, $sql);
$resultrow = mysqli_num_rows($result); 
if($resultrow > 0){
    while ($row = mysqli_fetch_assoc($result))
    {
        $time1=$row['time1'];
        $time2=$row['time2'];
        $time3=$row['time3'];
        $turn1=$row['turn1'];
        $turn2=$row['turn2'];
        $turn3=$row['turn3'];
    }
}
$turnid;
$turn;
$turnofnowid;
if($time1<$time2&&$time1<$time3){
    $turnid=1;
    $turnofnowid=$turn1;
}
else if($time2<$time1&&$time2<$time3){
    $turnid=2;
    $turnofnowid=$turn2;
}
else if($time3<$time2&&$time3<$time1){
    $turnid=3;
    $turnofnowid=$turn3;
}

if($randomid==1){
    $turn=$turn1;
}
else if($randomid==2){
    $turn=$turn2; 
}
else{
    $turn=$turn3;
}

mysqli_close($conn);

echo "$turnid,$turn,$turnofnowid";
?>