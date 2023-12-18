<?php

if (isset($_POST['save'])) {
    $conn = mysqli_connect("localhost", "root", "", "registration") or die("Connection Faild");

    $username = mysqli_real_escape_string($conn, $_POST['username']);
    $newusername = mysqli_real_escape_string($conn, $_POST['newusername']);
    $gender = mysqli_real_escape_string($conn, $_POST['gender']);
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $mobile = mysqli_real_escape_string($conn, $_POST['mobile']);
    $address = mysqli_real_escape_string($conn, $_POST['address']);
    $password = mysqli_real_escape_string($conn,($_POST['password']));

    $sql = "UPDATE project SET username = '{$newusername}',gender = '{$gender}',email='{$email}',mobile='{$mobile}',address='{$address}', password ='{$password}'  WHERE username='{$username}'";

    // echo $sql;   

    $result = mysqli_query($conn, $sql) or die('query error');
    mysqli_close($conn);

    header("Location: User Detail.php");
}
?>