<?php
// Connect to the database
$host = "localhost";
$username = "root";
$password = "";
$database = "flight_ticket_booking";

try {
    $conn = new PDO("mysql:host=localhost;dbname=flight_ticket_booking", "root", "");
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    die("Connection failed: " . $e->getMessage());
}

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $departure = $_POST["Departure"];
    $destination = $_POST["Destination"];
    $airline = $_POST["Airline"];
    $seating = $_POST["Seating"];
    $journey_date = $_POST["Journey_date"];
    $journey_time = $_POST["Journey_time"];
    $adult = $_POST["Adult"];
    $children = $_POST["Children"];
    $infant = $_POST["Infant"];
    $fare = $_POST["Fare"];
    $return_date = $_POST["Return_Date"];
    $return_time = $_POST["Return_Time"];
    $feedback = $_POST["Feedback"];
    $fullname = $_POST["Name"];
    $phone = $_POST["Phone"];
    $details = $_POST["Email"];
    $Payment_Code = $_POST["Paymentcode"];
    $select_payment_method = $_POST["select_payment_method"];

    try {
        $sql = "INSERT INTO flight (departure, destination, airline, seating, journey_date, journey_time, adult, children, infant, fare, return_date, return_time, feedback, fullname, phone, details, payment_code, select_payment_method) 
                VALUES (:departure, :destination, :airline, :seating, :journey_date, :journey_time, :adult, :children, :infant, :fare, :return_date, :return_time, :feedback, :fullname, :phone, :details, :payment_code, :select_payment_method)";
        
        $stmt = $conn->prepare($sql);
        
        $stmt->bindParam(':departure', $departure);
        $stmt->bindParam(':destination', $destination);
        $stmt->bindParam(':airline', $airline);
        $stmt->bindParam(':seating', $seating);
        $stmt->bindParam(':journey_date', $journey_date);
        $stmt->bindParam(':journey_time', $journey_time);
        $stmt->bindParam(':adult', $adult);
        $stmt->bindParam(':children', $children);
        $stmt->bindParam(':infant', $infant);
        $stmt->bindParam(':fare', $fare);
        $stmt->bindParam(':return_date', $return_date);
        $stmt->bindParam(':return_time', $return_time);
        $stmt->bindParam(':feedback', $feedback);
        $stmt->bindParam(':fullname', $fullname);
        $stmt->bindParam(':phone', $phone);
        $stmt->bindParam(':details', $details);
        $stmt->bindParam(':payment_code', $Payment_Code);
        $stmt->bindParam(':select_payment_method', $select_payment_method);

        $stmt->execute();

        echo "Flight reservation successful!";
    } catch (PDOException $e) {
        echo "Error: " . $e->getMessage();
    }
}

// Close the database connection
$conn = null;
?>
