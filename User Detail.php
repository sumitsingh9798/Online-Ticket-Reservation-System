
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

    $conn = mysqli_connect("localhost", "root", "", "registration") or die("Connection Faild");

    $sql = "SELECT `username`, `gender`, `email`, `mobile`, `address`, `password` FROM project";

    $result = mysqli_query($conn, $sql);

    if (mysqli_num_rows($result) > 0) {
    ?>
        <div class="container">
            <div class="table-responsive">
                <table class="table">
                    <thead>
                        <tr>
                            <th>User Name </th>
                            <th>Gender</th>
                            <th>Email</th>
                            <th>Mobile</th>
                            <th>Address</th>
                            <th>Password</th>
                            <th>Edit</th>
                            <th>Delete</th>
                        </tr>
                    </thead>

                    <?php
                    while ($row = mysqli_fetch_assoc($result)) {
                    ?>
                        <tbody>
                            <tr>
                                <td><?php echo $row['username'] ?></td>
                                <td><?php echo $row['gender'] ?></td>
                                <td><?php echo $row['email'] ?></td>
                                <td><?php echo $row['mobile'] ?></td>
                                <td><?php echo $row['address'] ?></td>
                                <td><?php echo $row['password'] ?></td>




                                <td><a href="edit_user.php?username=<?php echo $row['username']; ?>">Edit</a></td>
                                <td><a href="delete_user.php?username=<?php echo $row['username']; ?>">Delete</a></td>
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