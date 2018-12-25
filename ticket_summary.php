<?php
session_start();
$conn=new mysqli("localhost","root","","movies");

$name=$_SESSION['name'];
$seat=$_SESSION['seat'];
$amount=$_SESSION['amount'];
$result =mysqli_query($conn, "INSERT INTO seat(name,seat,amount) VALUES('$name','$seat','$amount')") or die("Error: " . mysqli_error($conn));
header("Location: reviews.php");
mysqli_close($conn);
?>