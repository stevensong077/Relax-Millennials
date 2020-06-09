<?php
$get = $_GET['message'];
$un = $_GET['username'];
$randomid = $_GET['randomid'];
$index1 = $_GET['index'];
$name = "chat.log" + $index1;
$stime=microtime(true);

define("storage",dirname(__FILE__)."/storage/");
define("chatfile",$name);
define("linkchar1","&");
define("linkchar2","'says'");

$servername = "relaxmillennial-mysqldbserver.mysql.database.azure.com";
$username = "mysqldbuser@relaxmillennial-mysqldbserver";
$password = "Generation123";
$mysqlname = "mysqldatabase51751";

$time=strtotime(date("Y-m-d H:i:s"));
$conn = mysqli_connect($servername, $username, $password, $mysqlname);
mysqli_select_db($conn,$mysqlname);

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

	$update = "UPDATE `turn` SET time1 = '$time' where `id` = '$index1'";
	if($randomid==1){
		$turn1=$turn1-1;
		$update = "UPDATE `turn` SET time1 = '$time',`turn1`='$turn1' where `id` = '$index1'";
	}
	else if($randomid==2){
		$turn2=$turn2-1;
		$update = "UPDATE `turn` SET time2 = '$time' ,`turn2`='$turn2' where `id` = '$index1'";
	}
	else{
		$turn3=$turn3-1;
		$update = "UPDATE `turn` SET time3 = '$time' ,`turn3`='$turn3' where `id` = '$index1'";
	}
	
	mysqli_query($conn, $update);
	mysqli_close($conn);
	try{
		date_default_timezone_set('Australia/Melbourne');
		
		if (empty($_GET['message'])){
		$etime=microtime(true);
		$totaltime=$etime-$stime;
		echo "Message empty.</br>Total time: ".$totaltime."s.";
			exit;
		};

		$time = date('H:i',time());
		$timehidden = date('Y-m-d H:i:s',time());
		if(file_exists(storage.''.chatfile)) {
			$myfile = fopen(storage.''.chatfile, "a") or die("Unable to open file!");
			fwrite($myfile,$ip . "+" . $timehidden . "" . linkchar1 . "[".$time."] [" . $un . "] " .linkchar2 . "" .  $get . "\r\n");
			fclose($myfile);
		} else {
			file_put_contents(storage.''.chatfile, $ip . "+" . $timehidden . "" . linkchar1 . "[".$time."] [" . $un . "] " .linkchar2 . "" . $get . "\r\n");
		};
		$etime=microtime(true);
		$totaltime=$etime-$stime;
		echo "Success.</br>Total time: ".$totaltime."s.";
	}catch(Exception $e){
		echo $e->getMessage();
		exit();
	}

?>