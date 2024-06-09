<?php 
$server_name="localhost";
$user_name="root";
$password="";
$database_name="rahul";

$conn= new mysqli($server_name,$user_name,$password,$database_name);

if($conn->connect_error){
    die("Connection fail".$conn->connect_error);
}

$sql = "SELECT * FROM blood_list";
$result = $conn->query($sql);


$conn->close();
?>


<html>
	<head>
		<title>Donor list</title>
		<link rel="stylesheet" href="style1.css">
	</head>
	<body>
	<br>
	
	<div class="btn">
		<a href="registraton.php" style="background-color:#FF5733;padding:10px;margin:20px;color:white;border-radius:6px;text-decoration:none;">Add Donor</a>
	</div>
		<h1 style="text-align:center; color:white;">DONOR LIST</h1>
		<table>
			<tr>
				<th>Name</th>
				<th>Age</th>
				<th>Select Blood Group</th>
				<th>City</th>
				<th>Phone</th>
				<th colspan="2">Operation</th>
			</tr>
			
		<?php 
		if ($result->num_rows > 0) {
			while($row = $result->fetch_assoc())
			{ 
				$id=$row["id"];
				echo "<tr>";
					echo "<td>". $row["name"]."</td>";
					echo "<td>". $row["age"]."</td>";
					echo "<td>". $row["blood_group"]."</td>";
					echo "<td>". $row["city"]."</td>";
					echo "<td>". $row["phone"]."</td>";
					echo "<td>"."<a href='update.php?updateid=$id'>Update</a>"."</td>";
					echo "<td>"."<a href='delete.php?delid=$id'>Delete</a>"."</td>";
					
					
					
				echo "</tr>";
			}
		}
		else echo "0 results";
		?>
		
		
			
		</table>
	</body>
</html>
