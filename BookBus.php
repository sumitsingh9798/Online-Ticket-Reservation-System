<?php
// Connect to the database
$host = "localhost";
$username = "root";
$password = "";
$database = "bus_ticket_booking";
$conn = mysqli_connect('localhost', 'root', '', 'bus_ticket_booking');

if (!$conn) {
    die("You are not connected" . mysqli_connect_error());
} else {
    echo "Ticket Booking successfull";
}

// Handle reservation request for the bus
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $departure = $_POST["departure"];
    $destination = $_POST["destination"];
    $preferred_bus = $_POST["preferred_bus"];
    $preferred_seat = $_POST["preferred_seat"];
    $departure_date = $_POST["departure_date"];
    $adult = $_POST["adult"];
    $children = $_POST["children"];
    $infant = $_POST["infant"];
    $fare = $_POST["fare"];
    $return_date = $_POST["return_date"];
    $fullname = $_POST["fullname"];
    $phone = $_POST["phone"];
    $email = $_POST["email"];
    $payment_code = $_POST["payment_code"];
    $select_payment_method = $_POST["select_payment_method"];

    // Insert bus reservation into the database
    $sql = "INSERT INTO `Bus` (`departure`, `destination`, `preffered bus`, `preffered seat`, `departure date`, `adult`, `children`, `infant`, `fare`, `return date`, `full name`, `phone`, `email`, `payment_code`, `select_payment_method`) VALUES ('$departure', '$destination', '$preferred_bus', '$preferred_seat', '$departure_date', '$adult', '$children', '$infant', '$fare', '$return_date', '$fullname', '$phone', '$email', '$payment_code', '$select_payment_method')";
    $result = mysqli_query($conn, $sql);

    if ($result) {
        echo " Data stored";
    } else {
        echo "Query failed";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bus Ticket Booking system</title>
    <link rel="stylesheet" href="bus_Style.css">
</head>
<body style="background-image: url(./Scenery.jpg); background-size: cover; background-position: center; background-repeat: no-repeat; background-attachment: fixed;">
    <div class="booking-form-w3layouts">
        <!-- Form starts here -->
        <script src="/js/Javascript.js"></script>
         <form action = "BookBus.php" method="post">
           <h2 class="sub-heading-agileits">Booking Details</h2>
           <div class="main-flex-w3ls-setns">
              <div class="field-agileinfo-spc form-w3-agile-text1">
                 <select class="form-control" name="departure">
                    <option>DEPARTURE</option>
                    <option value="Mumbai">Mumbai</option>
                    <option value="Aurangabad">Aurangabad</option>
                    <option value="Ahmednagar">Ahmednagar </option>
                    <option value="Surat">Surat</option>
                    <option value="Latur">Latur</option>
                    <option value="Sangli">Sangli</option>
                 </select>
              </div>
           </div>
           <div class="main-flex-w3ls-sectns">
              <div class="field-agileinfo-spc form-w3-agile-text1">
                 <select class="form-control" name="destination">
                    <option>DESTINATION</option>
                    <option value="Mumbai">Mumbai</option>
                    <option value="Kolhapur">Kolhapur </option>
                    <option value="Aurangabad">Aurangabad</option>
                    <option value="Sangli">Sangli</option>
                    <option value="Surat">Surat</option>
                    <option value="Miraj">Miraj</option>
                 </select>
              </div>
           </div>
           <div class="main-flex-w3ls-sectns">
            <div class="field-agileinfo-spc form-w3-agile-text1">
               <select class="form-control" name="preferred_bus">
                    <option>PREFERRED BUS</option>
                    <option value="Intercity Smartbus">Intercity Smartbus</option>
                    <option value="Kartik Travels">Kartik Travels</option>
                    <option value="Garud  Travels">Garud Travels</option>
                    <option value="Musafir Travels">Musafir Travels</option>
                    <option value="Natraj Travels">Natraj Travels</option>
                 </select>
              </div>
              <div class="field-agileinfo-spc form-w3-agile-text2">
                 <select class="form-control" name="preferred_seat">
                    <option>PREFERRED SEATING</option>
                    <option value="Window">Window</option>
                    <option value="Side">Side</option>
                 </select>
              </div>
           </div>
           <div class="main-flex-w3ls-sectns">
              <div class="field-agileinfo-spc form-w3-agile-text1">
                 <input id="departure_date" name="departure_date" type="text" placeholder="Departure Date" value="" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'mm/dd/yyyy';}" required="" class="hasDatepicker">
              </div>
           </div>
           <div class="triple-wthree">
              <div class="field-agileinfo-spc form-w3-agile-text11">
                 <select class="form-control" name="adult">
                    <option value="">ADULT(12+ Yrs)</option>
                    <option value="1">1</option>
                    <option value="2">2</option>
                    <option value="3">3</option>
                    <option value="4">4</option>
                    <option value="5">5+</option>
                 </select>
              </div>
              <div class="field-agileinfo-spc form-w3-agile-text22">
                 <select class="form-control" name="children">
                    <option value="">CHILDREN(2-11 Yrs)</option>
                    <option value="1">0</option>
                    <option value="1">1</option>
                    <option value="2">2</option>
                    <option value="3">3</option>
                    <option value="4">4</option>
                    <option value="5">5+</option>
                 </select>
              </div>
              <div class="field-agileinfo-spc form-w3-agile-text33">
                 <select class="form-control" name="infant">
                    <option value="">INFANT(under 2Yrs)</option>
                    <option value="1">0</option>
                    <option value="1">1</option>
                    <option value="2">2</option>
                    <option value="3">3</option>
                    <option value="4">4</option>
                    <option value="5">5+</option>
                 </select>
              </div>
           </div>
           <div class="radio-section">
            <select class="form-control" name="fare" id="fare">
               <option value="">Select  of Fare</option>
               <option value="one way">One Way</option>
               <option value="round trip">Round Trip</option>
              <div class="clear"></div>
           </div>
           <div class="main-flex-w3ls-sectns">
              <div class="field-agileinfo-spc form-w3-agile-text1">
                 <input id="return_date" name="return_date" type="text" placeholder="Return Date" value="" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'mm/dd/yyyy';}" required="" class="hasDatepicker">
              </div>
           </div>
           <h3 class="sub-heading-agileits">Personal Details</h3>
           <div class="main-flex-w3ls-sectns">
              <div class="field-agileinfo-spc form-w3-agile-text1">
                 <input type="fullname" name="fullname" placeholder="FullName" required="">
              </div>
              <div class="field-agileinfo-spc form-w3-agile-text2">
                 <input type="phone" name="phone" placeholder="Phone Number" required="">
              </div>
           </div>
           <div class="field-agileinfo-spc form-w3-agile-text">
              <input type="email" name="email" placeholder="Email" required="">
           </div>

        <label for="payment_code">Payment_Code:</label>
        <input type="text" id="payment_code" name="payment_code" placeholder="Enter your url code">

        <select class="form-control" name="select_payment_method" id="select_payment_method">
         <option value="">select_payment_method</option>
         <option value="credit card">Credit Card</option>
         <option value="gpay">Gpay</option>

         <div class="clear"></div>
           <input type="submit" value="Book Ticket">
           <input type="reset" value="Clear Form">
           <div class="clear"></div>
         </form>
        <!--// Form starts here -->
     </div>
</body>
</html>

