
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Train Detail</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    <link href="admin.css" rel="stylesheet">
    <style>
        .mt-126 {
            margin-top: 126px;
        }

        .ml-242 {
            margin-left: 242px !important;
        }

        @media (max-width: 991.98px) {
            .ml-242 {
                margin-left: 0px !important;
            }
        }
    </style>
    
</head>

<body>
    <!--Main Navigation-->
    <header>
        <!-- Sidebar -->
        <?php include "sidebar.php" ?>
        <!-- Sidebar -->

        <!-- Navbar -->
        <?php include "navbar.php" ?>
        <!-- Navbar -->
    </header>
    <!--Main layout starts here-->
    <div class="ml-242 mt-126">
    <?php

    // connection

    $conn = mysqli_connect("localhost", "root", "", "bus_ticket_booking") or die("Connection Faild");

    $sql = "SELECT`id`, `departure`, `destination`, `preffered bus`, `preffered seat`, `departure date`, `adult`, `children`, `infant`, `fare`, `return date`, `full name`, `phone`, `email`, `payment_code`, `select_payment_method`  FROM bus";

    $result = mysqli_query($conn, $sql);

    if (mysqli_num_rows($result) > 0) {
    ?>
        <div class="container">
            <div class="table-responsive">
                <table class="table">
                    <thead>
                        <tr>
                            <th>Id</th>
                            <th>Departure </th>
                            <th>Destination</th>
                            <th>Preffered bus</th>
                            <th>Preffered seat</th>
                            <th>Departure date</th>
                            <th>Adult</th>
                            <th>Children</th>
                            <th>Infant</th>
                            <th>Faretype</th>
                            <th>Fare</th>
                            <th>Return date</th>
                            <th>Full name</th>
                            <th>Phone </th>
                            <th>Email</th>
                            <th>Payment_code</th>
                            <th>Select_payment_method</th>
                            <th>Edit</th>
                            <th>Delete</th>
                        </tr>
                    </thead>

                    <?php
                    while ($row = mysqli_fetch_assoc($result)) {
                    ?>
                        <tbody>
                            <tr>
                                <td><?php echo $row['id'] ?></td>
                                <td><?php echo $row['departure'] ?></td>
                                <td><?php echo $row['destination'] ?></td>
                                <td><?php echo $row['preffered bus'] ?></td>
                                <td><?php echo $row['preffered seat'] ?></td>
                                <td><?php echo $row['departure date'] ?></td>
                                <td><?php echo $row['adult'] ?></td>
                                <td><?php echo $row['children'] ?></td>
                                <td><?php echo $row['infant'] ?></td>
                                <td><?php echo $row['fare'] ?></td>
                                <td><?php echo $row['return date'] ?></td>
                                <td><?php echo $row['full name'] ?></td>
                                <td><?php echo $row['phone'] ?></td>
                                <td><?php echo $row['email'] ?></td>
                                <td><?php echo $row['payment_code'] ?></td>
                                <td><?php echo $row['select_payment_method'] ?></td>




                                <td><a href="edit_bus.php?id=<?php echo $row['id']; ?>">Edit</a></td>
                                <td><a href="delete_bus.php?id=<?php echo $row['id']; ?>">Delete</a></td>
                            </tr>
                        </tbody>
                    <?php
                    }
                    ?>
                </table>
            </div>
        <?php
    } else {
        echo "No Data Found....!";
    }
        ?>
        </div>
        
</body>

</html>