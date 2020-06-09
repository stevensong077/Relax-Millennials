<!--learn from https://stackoverflow.com/questions/31885031/formatting-json-to-geojson-via-php-->
<?php
//define variables
$servername = "relaxmillennial-mysqldbserver.mysql.database.azure.com";
$username = "mysqldbuser@relaxmillennial-mysqldbserver";
$password = "Generation123";
$mysqlname = "mysqldatabase51751";
$data = array();

//connect to database
$conn = mysqli_connect($servername, $username, $password, $mysqlname);
mysqli_select_db($conn,$mysqlname);

//check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

$sql = "SELECT * FROM `sports`"; 
$result = mysqli_query($conn, $sql);

if($result){
    while ($row = mysqli_fetch_assoc($result))
    {
        $data[]=$row;
    }
    //transfer data to json 
    asort($data);
    $json_sports = json_encode($data);
}else{

}

//transfer json to geojson
$sports_data = json_decode($json_sports, true);
$features = array();
foreach($sports_data as $key => $value) {
    $features[] = array(
        'type' => 'Feature',
        'geometry' => array(
             'type' => 'Point', 
             'coordinates' => array(
                  $value['Longitude'], 
                  $value['Latitude'],
                  1
             ),
         ),
         'properties' => array(
             'Venue' => $value['Venue'],
             'Phone' => $value['Phone'],
             'Opening_hours' => $value['Opening_hours'],
             'Websites' => $value['Websites']
        ),
    );
}

$geo_data = array(
    'type' => 'FeatureCollection',
    'features' => $features,
);

$final_sports = json_encode($geo_data, JSON_PRETTY_PRINT);
?>