<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "ls9_srf"; // DB Name
// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
 die("Connection failed: " . mysqli_connect_error());
}

$sql = "UPDATE srf SET name='Arulan' WHERE Roll_No='20201CSE0004'";
if (mysqli_query($conn, $sql)) {
 echo "Record updated successfully";
} else {
 echo "Error updating record: " . mysqli_error($conn);
}
mysqli_close($conn);
?>