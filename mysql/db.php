<?php


if (isset($_POST['submit']))
{
$servername = "localhost";
$username= "root";
$password = "cmpl";
$dbname = "login_app";

//creating a connection

$conn= new mysqli($servername,$username,$password,$dbname);

//checking the connection

if($conn->connect_error)
{
    die("Connection Failed:" .$conn->connect_error);
}

$username = $_POST['username'];
$password = $_POST['password'];

//inserting

$sql="INSERT INTO users(username,password) VALUES('$username','$password')";

if($conn->query($sql)==TRUE)
{
echo "New Record inserted";
}
else{
echo "Error:" .$sql . "<br>" .$conn->error;
}
$conn->close();

}
?>