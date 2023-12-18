<?php
$hostname= "localhost";
$UserName="root";
$password="";
$dbName="ticketbooking";
$conn=mysqli_connect($hostname,$UserName,$password,$dbName);
if(!$conn){
    echo "error";
}
?>