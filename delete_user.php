<?php
        $username = $_GET['username'];
        
    $conn = mysqli_connect("localhost", "root", "", "registration") or die("Connection Faild");

    $sql = "DELETE FROM project WHERE username='{$username}'" ;
    
    $result = mysqli_query($conn, $sql);

    mysqli_close($conn);

    header("Location: User Detail.php");
?>