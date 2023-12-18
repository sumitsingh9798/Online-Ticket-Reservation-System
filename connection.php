<?php
$dbname = "registration";
$host = "localhost";
$username = "root";
$password = "";
$conn = Mysqli_connect($host,$username,$password,$dbname);
if(!$conn){
   echo "you are not connected";
}
else{
    header("location: login.php");
}

$username = $_POST['username'];
$gender = $_POST['gender'];
$email= $_POST['email'];
$mobile = $_POST['mobile'];
$address = $_POST['address'];
$password = $_POST['password'];
$sql = "INSERT INTO `project`(`Username`, `gender`, `email`, `Mobile_number`, `Address`, `Password`) VALUES ('$username','$gender','$email','$mobile','$address','$password')";
$result=Mysqli_query($conn,$sql);
if($result){
    echo "data stored";
}
else{
    echo "quary failed";
}
?>
