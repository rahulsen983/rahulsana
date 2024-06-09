<?php 

$name=$_POST['name'];
$age=$_POST['age'];
$blood_group=$_POST['blood_group'];
$city=$_POST['city'];
$phone=$_POST['phone'];


$server_name="localhost";
$user_name="root";
$password="";
$database_name="rahul";

$conn= new mysqli($server_name,$user_name,$password,$database_name);

if($conn->connect_error){
    die("Connection fail".$conn->connect_error);
}

else{
//echo "Connected Successfully";
}

$sq="INSERT INTO blood_list( id, name, age, blood_group, city, phone) 
VALUES ( NULL, '$name', '$age', '$blood_group', '$city', '$phone')";

$result=$conn->query($sq);


if($result){
    //echo "Data inserted";
	header('location:read_data_table.php');
}
else{
    echo "Data not inserted";
}


$conn->close();


?>