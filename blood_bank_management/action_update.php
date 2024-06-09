<?php 

$id=$_POST['id'];

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

$sql = "UPDATE blood_list SET name='$name', age='$age', blood_group='$blood_group', city='$city', phone='$phone' WHERE id=$id";

$result=$conn->query($sql);

if ($result) {
    header("Location:read_data_table.php");
} 

$conn->close();

?>