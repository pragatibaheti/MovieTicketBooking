<?php
session_start();
$conn=new mysqli("localhost","root","","movies");
if(isset($_POST['seat']))
{

$seats=$_POST['seat'];
$_SESSION['seat']=$seats;
$count=$_POST['count'];
$selected=$_POST['selected'];
$_SESSION['amount']=$count*200;
}
for($i=0;$i<count($selected);$i++)
{
$result =mysqli_query($conn, "INSERT INTO reserved(seatno) VALUES('$selected[$i]')") or die("Error: " . mysqli_error($conn));
}
header("Location:ticket_summary.php");
mysqli_close($conn);


?>