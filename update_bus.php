<?php

if (isset($_POST['save'])) {
    $conn = mysqli_connect("localhost", "root", "", "bus_ticket_booking") or die("Connection Faild");

    $id = mysqli_real_escape_string($conn, $_POST['id']);
    $departure= mysqli_real_escape_string($conn, $_POST['departure']);
    $destination = mysqli_real_escape_string($conn, $_POST['destination']);
    $preffered_bus = mysqli_real_escape_string($conn, $_POST['preffered_bus']);
    $preffered_seat = mysqli_real_escape_string($conn, $_POST['preffered_seat']);
    $departure_date = mysqli_real_escape_string($conn, $_POST['departure_date']);
    $adult = mysqli_real_escape_string($conn, $_POST['adult']);
    $children= mysqli_real_escape_string($conn, $_POST['children']);
    $infant = mysqli_real_escape_string($conn, $_POST['infant']);
    $fare = mysqli_real_escape_string($conn, $_POST['fare']);
    $return_date= mysqli_real_escape_string($conn, $_POST['return_date']);
    $full_name = mysqli_real_escape_string($conn, $_POST['full_name']);
    $phone = mysqli_real_escape_string($conn, $_POST['phone']);
    $email= mysqli_real_escape_string($conn, $_POST['email']);
    $payment_code = mysqli_real_escape_string($conn, $_POST['payment_code']);
    $select_payment_method = mysqli_real_escape_string($conn,($_POST['select_payment_method']));

    $sql = "UPDATE bus SET id='{$id}',departure ='{$departure}',destination='{$destination}',preffered_bus='{$preffered_bus}',preffered_seat='{$preffered_seat}', departure_date ='{$departure_date}',adult = '{$adult}',children='{$children}',infant='{$infant}',fare='{$fare}', return_date ='{$return_date},'full_name ='{$full_name},'phone ='{$phone}',email ='{$email}',payment_code='{$payment_code}',select_payment_method='{$select_payment_method}' WHERE id='{$id}'";

    echo $sql;
    $result = mysqli_query($conn, $sql) or die('query error');
    mysqli_close($conn);

    header("Location: Bus Detail.php");
}
?>