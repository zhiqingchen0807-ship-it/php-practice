<?php
$servername = "localhost";
$username="username";
$password= "";

//Create connection
$conn = mysqli_connect($servername,$username,$password);

//check connection
if(!$conn){
    die("Connection failed: ".mysqli_connect_error());
}
echo "Conncted Successfully!";
?>

