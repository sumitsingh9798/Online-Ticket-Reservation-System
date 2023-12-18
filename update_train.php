<?php

if (isset($_POST['save'])) {
    $conn = mysqli_connect("localhost", "root", "", "ticketbooking") or die("Connection Faild");

    $uname = mysqli_real_escape_string($conn, $_POST['uname']);
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $pno = mysqli_real_escape_string($conn, $_POST['pno']);
    $tfrom = mysqli_real_escape_string($conn, $_POST['tfrom']);
    $tto = mysqli_real_escape_string($conn, $_POST['tto']);
    $train = mysqli_real_escape_string($conn, $_POST['train']);
    $seating = mysqli_real_escape_string($conn, $_POST['seating']);
    $adult= mysqli_real_escape_string($conn, $_POST['adult']);
    $faretype = mysqli_real_escape_string($conn, $_POST['faretype']);
    $ddate = mysqli_real_escape_string($conn, $_POST['ddate']);
    $dtime= mysqli_real_escape_string($conn, $_POST['dtime']);
    $rdate = mysqli_real_escape_string($conn, $_POST['rdate']);
    $rtime = mysqli_real_escape_string($conn,($_POST['rtime']));

    $sql = "UPDATE trainbooking SET pno='{$pno}',uname='{$uname}',email='{$email}',tfrom='{$tfrom}',tto='{$tto}',train='{$train}',seating='{$seating}',adult='{$adult}',faretype='{$faretype}',ddate='{$ddate}',dtime ='{$dtime}', rdate ='{$rdate}', rtime ='{$rtime}' WHERE pno='{$pno}'";
    echo $sql;   
    $result = mysqli_query($conn, $sql) or die('query error');
    mysqli_close($conn);

    header("Location: Train detail.php");
}
?>