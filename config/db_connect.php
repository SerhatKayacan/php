<?php
//connect to database
$conn = mysqli_connect('localhost','serhat','123','ninja_pizza');
//check connection
if(!$conn){
    die("Connection failed: " . mysqli_connect_error());;
}
?>