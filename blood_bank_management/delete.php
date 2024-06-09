<?php
$id = $_GET['delid'];

$server_name = "localhost";
$user_name = "root";
$password = "";
$database_name = "rahul";

$conn = new mysqli($server_name, $user_name, $password, $database_name);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "DELETE FROM blood_list WHERE id=$id";

if ($conn->query($sql) === TRUE) {
    echo "Record deleted successfully";
} else {
    echo "Error deleting record: " . $conn->error;
}

$conn->close();

header("Location: read_data_table.php");
exit();
?>