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
//echo "Connected successfully mysql";
}


$sql = "SELECT * FROM switch_control WHERE 1";

$res = mysqli_query($con,$sql);


$temparray = array();
while($row = mysqli_fetch_row($res)){

    $data = array("status"=>"true","switch_1"=>$row[1],"switch_2"=>$row[2],"switch_3"=>$row[3],"switch_4"=>$row[4]);

}   
echo  json_encode($data, JSON_UNESCAPED_UNICODE); 
//echo '"'.addslashes(json_encode($data, JSON_UNESCAPED_UNICODE)).'"'; 
//echo  addslashes(json_encode($data, JSON_UNESCAPED_UNICODE));    
mysqli_close($con);    
?>

