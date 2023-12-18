<?php
        $pno = $_GET['pno'];
        
    $conn = mysqli_connect("localhost", "root", "", "ticketbooking") or die("Connection Faild");

    $sql = "DELETE FROM trainbooking WHERE pno={$pno}" ;
    
    $result = mysqli_query($conn, $sql);

    mysqli_close($conn);

    header("Location: Train detail.php");
?>