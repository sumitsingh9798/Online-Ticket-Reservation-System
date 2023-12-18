<?php
        $id = $_GET['id'];
        
    $conn = mysqli_connect("localhost", "root", "", "bus_ticket_booking") or die("Connection Faild");

    $sql = "DELETE FROM bus WHERE id={$id}" ;
    
    $result = mysqli_query($conn, $sql);

    mysqli_close($conn);

    header("Location: Bus Detail.php");
?>