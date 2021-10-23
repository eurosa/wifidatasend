<?php

define('HOST','localhost');
define('USER','awdoaxbf_openpost');
define('PASS','ranojan');
define('DB','awdoaxbf_iotdb');    
$con = mysqli_connect(HOST,USER,PASS,DB)or die('try again in some minutes, please');    


// Check connection
if (!$con) {
    die("Connection failed: " . mysqli_connect_error());
}
else{
echo "Connected successfully";
}

//making an array to store the response
$response = array(); 
$switch_1 = $_POST['switch_1'];
$switch_2 = $_POST['switch_2'];
$switch_3 = $_POST['switch_3'];
$switch_4 = $_POST['switch_4'];
$device_id = $_POST['device_code'];

/*$switch_1 = 'high';
$switch_2 = 'low';
$switch_3 = 'low';
$switch_4 = 'low';
$device_id = 'ranwifi01';*/
// $name = $_GET['name'];

 if(isset($_POST['switch_1'])){
 $result_rows = mysqli_query($con,"SELECT device_id FROM device_list_table WHERE device_id = '$device_id'");
if(mysqli_num_rows($result_rows) >0) {
      echo '{"query_result":"SUCCESS"}';
     // do other stuff...
    $result = mysqli_query($con,"INSERT INTO  switch_control (switch_1,switch_2,switch_3,switch_4,device_id) SELECT * FROM(SELECT '$switch_1' AS switch_1,'$switch_2' AS switch_2,'$switch_3' AS switch_3,'$switch_4' AS switch_4,'$device_id' AS device_id) AS tmp WHERE NOT EXISTS ( SELECT device_id FROM switch_control WHERE device_id = '$device_id') LIMIT 1");
				
$udate_result = mysqli_query($con,"UPDATE switch_control SET switch_1 = '$switch_1', switch_2 = '$switch_2', switch_3 = '$switch_3', switch_4 = '$switch_4' WHERE device_id = '$device_id'");
    
} else {
   // row not found, do stuff...
   
   echo '{"query_result":"FAILURE"}';
}
}


 
/*if($result == true) {
 

    echo '{"query_result":"SUCCESS"}';
}
else{
    echo '{"query_result":"FAILURE"}';
}*/

$sql = "SELECT name FROM names WHERE 1";

$res = mysqli_query($con,$sql);


$temparray = array();
while($row = mysqli_fetch_row($res)){

    $data = array("state"=>"success",'name'=>$row[0]);

}   

echo json_encode($data, JSON_UNESCAPED_UNICODE);    
mysqli_close($con);    
 


