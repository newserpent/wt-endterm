<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "ls9_srf"; // DB Name

$v1=$_POST["rollno"]; //name attribute value
$v2=$_POST["name"];//name attribute value
$v3=$_POST["email"];//name attribute value
$v4=$_POST["mobile"];//name attribute value
$v5=$_POST["gender"];//name attribute value
$v6=$_POST["city"];//name attribute value
$v7=$_POST["state"];//name attribute value
$v8=$_POST["specialization"];//name attribute value
// Create connection
$conn = mysqli_connect("localhost", "root", "", "ls9_srf", "3306");
// Check connection
if (!$conn) 
{
  die("Connection failed: " . mysqli_connect_error());
}

$sql = "INSERT INTO srf VALUES ('$v1','$v2','$v3','$v4','$v5','$v6','$v7','$v8')";
//srf table name
if (mysqli_query($conn, $sql)) 
{
  echo "New record created successfully";
} 
else 
{
  echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}
mysqli_close($conn);
?>