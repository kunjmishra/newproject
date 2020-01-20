<?php
$servername="localhost";
$username="root";
$password="";
$dbname="mydb";
$conn = mysqli_connect($servername,$username,$password,$dbname);

$email = $_POST['email'];
$password = $_POST['password'];


$query = "INSERT INTO mytable VALUES ('$email','$password')";
$data = mysqli_query ($conn,$query);

if($conn)
{
	echo "Data inserted sucessfully";
}







?>

