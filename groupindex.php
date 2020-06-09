<?php
$username = $_GET['username'];
$ip = $_GET['ip'];
$user="$username,$ip";

$servername = "relaxmillennial-mysqldbserver.mysql.database.azure.com";
$username = "mysqldbuser@relaxmillennial-mysqldbserver";
$password = "Generation123";
$mysqlname = "mysqldatabase51751";

$conn = mysqli_connect($servername, $username, $password, $mysqlname);
mysqli_select_db($conn,$mysqlname);

//check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

$sql = "SELECT * FROM `group` WHERE `user1`='$user' OR `user2`='$user' OR `user3`='$user' " ; 
$result = mysqli_query($conn, $sql);
$resultrow = mysqli_num_rows($result); 

if($resultrow > 0){
    while ($row = mysqli_fetch_assoc($result))
    {  
		if($row['user1']==$user)
		{
			$randomid=1;
	    }
		else if($row['user2']==$user)
		{
		    $randomid=2;
	    }
		else
		{
		    $randomid=3;
	    }
		
		$index=$row['id'];
    }
}else{
    $checka = "SELECT * FROM `group`";
    $result1 = mysqli_query($conn, $checka);
    $resultrow1 = mysqli_num_rows($result1); 
	if($resultrow1 > 0){
		$autoselect = "SELECT * FROM `group` order by `id` DESC limit 1";
		$result = mysqli_query($conn, $autoselect);
        while ($row = mysqli_fetch_assoc($result))
        { 
		    $index=$row['id'];

		    if ($row['user2']=="n"){
			    $update="";
			    $randomindex=0;
			
		        if ($row['user1']=="n"){
		    	$randomindex=rand(1,2);
			        if($randomindex==1){
			    	    $randomid=1;
				        $update = "UPDATE `group` SET user1 = '$user' where `id` = '$index'";
			        }
			        else{
					    $randomid=2;
			    	    $update = "UPDATE `group` SET user2 = '$user' where `id` = '$index'";
			        }
		        }
		        else if($row['user3']=="n"){
			        $randomindex=rand(2,3);
			        if($randomindex==3){
				        $randomid=3;
				        $update = "UPDATE `group` SET user3 = '$user' where `id` = '$index'";
			        }
				    else{
					    $randomid=2;
					    $update = "UPDATE `group` SET user2 = '$user' where `id` = '$index'";
				    }
                }
		        else{
			        $randomid=2;
  			        $update = "UPDATE `group` SET user2 = '$user' where `id` = '$index'";
		        }

                $index = $row['id'];

	            mysqli_query($conn, $update);
	        // UPDATE `group` SET user2 = 'bbb' where `id` = 1
	        }
	        else if ($row['user3']=="n"){
			    $update="";
			    $randomindex=0;
			    if ($row['user1']=="n"){
			        $randomindex=rand(1,3);
			        if($randomindex==3){
				        $randomid=3;
				        $update = "UPDATE `group` SET user3 = '$user' where `id` = '$index'";
			        }
				    else{
					    $randomid=1;
					    $update = "UPDATE `group` SET user1 = '$user' where `id` = '$index'";
				    }
			    }
		        else if($row['user2']=="n"){
			        $randomindex=rand(2,3);
			        if($randomindex==3){
				        $randomid=3;
				        $update = "UPDATE `group` SET user3 = '$user' where `id` = '$index'";
			        }
				    else{
					    $randomid=2;
					    $update = "UPDATE `group` SET user2 = '$user' where `id` = '$index'";
				    }
			    }
		        else{
			        $randomid=3;
				    $update = "UPDATE `group` SET user3 = '$user' where `id` = '$index'";
			    }

		        $index = $row['id'];
	            mysqli_query($conn, $update);
	            // UPDATE `group` SET user2 = 'bbb' where `id` = 1
	        }
	        else if ($row['user1']=="n"){
			    $update="";
			    $randomindex=0;
			    if ($row['user2']=="n"){
			        $randomindex=rand(1,2);
			        if($randomindex==2){
				        $randomid=2;
					    $update = "UPDATE `group` SET user2 = '$user' where `id` = '$index'";
				    }
				    else{
					    $randomid=1;
					    $update = "UPDATE `group` SET user1 = '$user' where `id` = '$index'";
				    }
			    }
			    else if($row['user3']=="n"){
			        $randomindex=rand(1,3);
			        if($randomindex==3){
				        $randomid=3;
				        $update = "UPDATE `group` SET user3 = '$user' where `id` = '$index'";
				    }
				    else{
					    $randomid=1;
					    $update = "UPDATE `group` SET user1 = '$user' where `id` = '$index'";
				    }
			    }
		        else{
			        $randomid=1;
				    $update = "UPDATE `group` SET user1 = '$user' where `id` = '$index'";
			    }

	            $index = $row['id'];
	            mysqli_query($conn, $update);
			    // UPDATE `group` SET user2 = 'bbb' where `id` = 1
		    }
            else{
			    $random=rand(1,3);
			    if($random==1){
				    $randomid=1;
				    $insert = "INSERT INTO `group`(`user1`, `user2`, `user3`, `status1`, `status2`, `status3`) VALUES ('$user','n','n','no','no','no')";
			    }
			    else if($random==2){
				    $randomid=2;
				    $insert = "INSERT INTO `group`(`user1`, `user2`, `user3`, `status1`, `status2`, `status3`) VALUES ('n','$user','n','no','no','no')";
			    }
			    else if($random==3){
				    $randomid=3;
				    $insert = "INSERT INTO `group`(`user1`, `user2`, `user3`, `status1`, `status2`, `status3`) VALUES ('n','n','$user','no','no','no')";
			    }			
				mysqli_query($conn, $insert);
				
				$sql = "SELECT * FROM `group` WHERE `user1`='$user' OR `user2`='$user'OR`user3`='$user'" ; 
				$result = mysqli_query($conn, $sql);
				if($result){
					while ($row = mysqli_fetch_assoc($result))
					{
						$index=$row['id'];
					}
				}
		    }
	    }   
    }
    else{
	    $random=rand(1,3);
	    if($random==1){
		    $randomid=1;
		    $insert = "INSERT INTO `group`(`user1`, `user2`, `user3`, `status1`, `status2`, `status3`) VALUES ('$user','n','n','no','no','no')";
	    }
	    else if($random==2){
		    $randomid=2;
		    $insert = "INSERT INTO `group`(`user1`, `user2`, `user3`, `status1`, `status2`, `status3`) VALUES ('n','$user','n','no','no','no')";
	    }
	    else if($random==3){
		    $randomid=3;
		    $insert = "INSERT INTO `group`(`user1`, `user2`, `user3`, `status1`, `status2`, `status3`) VALUES ('n','n','$user','no','no','no')";
	    }
	    mysqli_query($conn, $insert);
	    $sql = "SELECT * FROM `group` WHERE `user1`='$user' OR `user2`='$user'OR`user3`='$user'" ; 
	    $result = mysqli_query($conn, $sql);
	    if($result){
            while ($row = mysqli_fetch_assoc($result))
            {
                $index=$row['id'];
            }
        }
    }
}

mysqli_close($conn);
echo "$index,$randomid";
?>