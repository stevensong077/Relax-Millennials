<?php
$index = $_GET['index'];

//define variables
$servername = "relaxmillennial-mysqldbserver.mysql.database.azure.com";
$username = "mysqldbuser@relaxmillennial-mysqldbserver";
$password = "Generation123";
$mysqlname = "mysqldatabase51751";
$data1 = array();
$data2 = array();

//connect to database
$conn = mysqli_connect($servername, $username, $password, $mysqlname);
mysqli_select_db($conn,$mysqlname);

//check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

$sql1 = "SELECT * FROM `slang`"; 
$sql2 = "SELECT * FROM `dictionary`";
$result1 = mysqli_query($conn, $sql1);
$result2 = mysqli_query($conn, $sql2);

if($result1){
    while ($row = mysqli_fetch_assoc($result1))
    {
        $data1[]=$row['word'];
    }
}else{}

if($result2){
    while ($row = mysqli_fetch_assoc($result2))
    {
        $data2[]=$row['word'];
    }
}else{}

//get random slang words
for ($i=0; $i<9; $i++)
{
    $random1=rand(0,count($data1));
    $slang[]=$data1[$random1-1];
}

//get random normal words
for ($n=0; $n<18; $n++)
{
    $random2=rand(0,count($data2));
    $normal[]=$data2[$random2-1];
}

$sql3 = "SELECT * FROM `randomwords` WHERE `id`='$index' " ; 
$result3 = mysqli_query($conn, $sql3);
$resultrow1 = mysqli_num_rows($result3); 

if($resultrow1 <= 0){
    //save random words to database
    $insert = "INSERT INTO `randomwords`(`id`,`round1`, `round2`, `round3`) VALUES ('$index','$slang[0],$normal[0],$normal[1],$slang[1],$normal[2],$normal[3],$slang[2],$normal[4],$normal[5]','$slang[3],$normal[6],$normal[7],$slang[4],$normal[8],$normal[9],$slang[5],$normal[10],$normal[11]','$slang[6],$normal[12],$normal[13],$slang[7],$normal[14],$normal[15],$slang[8],$normal[16],$normal[17]')";
    mysqli_query($conn,$insert);
}

$sql4 = "SELECT * FROM `randomwords` WHERE `id`='$index' " ; 
$result4 = mysqli_query($conn, $sql4);
$resultrow2 = mysqli_fetch_assoc($result4); 

$round1 = $resultrow2['round1'];
$round2 = $resultrow2['round2'];
$round3 = $resultrow2['round3'];
echo "$round1;$round2;$round3";
?>