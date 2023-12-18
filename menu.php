<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <title>Ticket Booking Menu</title>
</head>
<body>
    <header>
        <h1>Journey 360</h>
        </header>
     <div class="container">
        <h1>Welcome to Ticket Booking</h1>
        <div class="options">
            <button id="busButton">Book Bus Ticket</button>
            <button id="trainButton">Book Train Ticket</button>
            <button id="flightButton">Book Flight Ticket</button>
        </div>
    </div>
    <style>
        header {
     background-color: black;
     background-position: center;
     padding: 15px;
     color: rgb(221, 18, 136);
     text-align: left;
     overflow: hidden;
}
body{
    background-image: url('https://gisgeography.com/wp-content/uploads/2015/01/transportation-global-maps1.png');
}

h1 {
    font-size: 36px;
}
        body {
    font-family: Arial, sans-serif;
    background-color: #f0f0f0;
    text-align: center;
}

.container {
    background-color: rgb(147, 240, 240);
    border-radius: 5px;
    padding: 10px;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    margin: 25px auto;
    max-width: 80%;
}

h1 {
    font-size: 24px;
    margin-bottom: 20px;
}

.options {
    display: flex;
    flex-direction: column;
}

button {
    margin: 10px;
    padding: 10px 20px;
    font-size: 18px;
    background-color: #007bff;
    color: #fff;
    border: none;
    border-radius: 5px;
    cursor: pointer;
    display: inline-block;
}

button:hover {
    background-color: #0056b3;
}

    </style>
    <script>
    var busButtonButton = document.getElementById("busButton");
         // Add an event listener to the button to handle the click event
    busButton.addEventListener("click", function() {
         // Redirect the user to the "select_flight.php" page
        window.location.href = "BookBus.php";
    });
    
    var trainButtontButton = document.getElementById("trainButton");
         // Add an event listener to the button to handle the click event
    trainButton.addEventListener("click", function() {
         // Redirect the user to the "select_flight.php" page
        window.location.href = "form.html";
    });
    
    
         // Get the button element by its id
    var flightButton = document.getElementById("flightButton");
         // Add an event listener to the button to handle the click event
    flightButton.addEventListener("click", function() {
         // Redirect the user to the "select_flight.php" page
        window.location.href = "flight-ticket-booking.html";
    });
</script>
</body>
</html>

