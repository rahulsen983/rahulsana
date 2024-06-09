<?php 

$id = $_GET['updateid'];



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
$sql = "SELECT * FROM blood_list WHERE id=$id";
$result = $conn->query($sql);
$row = $result->fetch_assoc();

$conn->close();



?>
<html>
	<head>
		<title>Update</title>
    <link rel="stylesheet" href="style1.css">
</head>
<body>
    <div class="container">
	<h1 align="center" style="color:red;">Update Donar List</h1>
        <form action="action_update.php" method="POST">
		<input type="hidden" name="id" value="<?php echo $row['id']; ?>">
            <label>Name</label>
            <input type="text" name="name" value="<?php echo $row['name']; ?>">
			
			<label>Age</label>
            <input type="text"  name="age" value="<?php echo $row['age']; ?>">
			
			<label> Select Blood Group</label>
            <Select name="blood_group" value="<?php echo $row['blood_group']; ?>">
				<option>select..</option>
				<option>A+</option>
				<option>A-</option>
				<option>B+</option>
				<option>B-</option>
				<option>AB+</option>
				<option>AB-</option>
				<option>O+</option>
				<option>O-</option>
			</Select>

            <label>City</label>
            <input type="text"  name="city" value="<?php echo $row['city']; ?>">

            <label>Phone</label>
            <input type="text"  name="phone" value="<?php echo $row['phone']; ?>">

            <button type="submit">Update</button>
        </form>
    </div>
</body>
</html>