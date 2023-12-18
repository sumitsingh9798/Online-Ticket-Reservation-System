<?php
if(isset($_POST["submit"])){
    include "dbconfig.php";
    $name=$_POST["name"];
    $email=$_POST["email"];
    $pno=$_POST["pno"];
    $from=$_POST["from"];
    $to=$_POST["to"];
    $train=$_POST["train"];
    $seating=$_POST["seating"];
    $adult=$_POST["adult"];
    $faretype=$_POST["faretype"];
    $ddate=$_POST["ddate"];
    $dtime=$_POST["dtime"];
    $rdate=$_POST["rdate"];
    $rtime=$_POST["rtime"];
    $sql="INSERT INTO trainbooking (uname,email,pno,tfrom,tto,train,seating,adult,faretype,ddate,dtime,rdate,rtime) VALUES('$name','$email','$pno','$from','$to','$train','$seating','$adult','$faretype','$ddate','$dtime','$rdate','$rtime')";
    if(mysqli_query($conn,$sql)){
        echo "Data Insert Sucessfull!";
    }
    else{
        echo "error";
    }

}
?>