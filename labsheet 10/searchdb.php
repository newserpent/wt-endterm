<?php
$servername = 'localhost';
$username = 'root';
$password = '';
$dbname = 'Employee';

$conn = mysqli_connect($servername, $username, $password, $dbname);

if(!$conn){
  die("connection failed: " . mysqli_connect_error());
}

if($_POST['ID']!=0){
  $v1 = $_POST['ID'];
  $sql = "select * from emp where id=$v1";
}
else{
  $v2 = $_POST['ss'];
  $v3 = $_POST['ls'];
  $sql = "select * from emp where salary between $v2 and $v3";
}

$result = mysqli_query($conn, $sql);

if(mysqli_num_rows($result) > 0){
  while($row = mysqli_fetch_array($result)){
    print "Employee ID: " . $row['id'] . "<br><br>";
    print "employee name: " . $row['name'] . "<br><br>";
    print "employee dept: " . $row['dept'] . "<br><br>";
    print "employee salary: " . $row['salary'] . "<br><br>";
  }
}

else{
  echo '0 results';
}

mysqli_close($conn);
?>