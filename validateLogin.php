<?php

$name=$_REQUEST["t1"];
$password1=$_REQUEST["t2"];
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "punestudents";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$sql = "select * from studentdetails where name='".$name."' and password='".$password1."'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    
    header("Location: http://localhost/PuneUniv/index1.php");
} else {
    echo "You are not a valid user.";
}
$conn->close();
?>