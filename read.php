<?php

	$username = $_GET['username'];
	$index1 = $_GET['index'];
	$name = "chat.log" + $index1;

	define("storage",dirname(__FILE__)."/storage/");
	
	define("chatfile",$name);
	define("linkchar1","&");
	define("linkchar2","'says'");

	date_default_timezone_set('Australia/Melbourne');
	$time = date('H:i',time());
	if(!file_exists(storage.''.chatfile)) {
		echo "<div class=\"other_space\"><div class=\"other_talk\"><font color=\"#CD8E76\">[".$time."] [System] Welcome! We hope you will enjoy this game :)</font></div></div>";
		exit;
	};
	$myfile = fopen(storage.''.chatfile, "r") or die("<div class=\"other_space\"><div class=\"other_talk\"><font color=\"#CD8E76\">[".$time."] [System] Unable to read chat program history file.</font></div></div>");
	while(!feof($myfile)) {
  		$read =  fgets($myfile);
		$arr = explode(linkchar1,$read);
		$array = explode(linkchar2,$arr[1]);
		echo "<div class=\"other_space\"><div class=\"other_talk\"><font color=\"#009D9D\">" .$array[0]. "</font><font color=\"#666\">". $array[1] . "</font></div></div>";   	
	};
	fclose($myfile);
?>