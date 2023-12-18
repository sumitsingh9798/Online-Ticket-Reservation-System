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
        $conn = mysqli_connect("localhost", "root", "", "ticketbooking") or die("Connection Faild");

        $sql = "SELECT uname,email,pno,tfrom,tto,train,seating,adult,faretype,ddate,dtime,rdate,rtime  FROM trainbooking";

        $result = mysqli_query($conn, $sql);

        if (mysqli_num_rows($result) > 0) {
        ?>
            <div class="">
                <div class="table-responsive">
                    <table class="table">
                        <thead>
                            <tr>
                                <th>User Name </th>
                                <th>Email</th>
                                <th>PNR No</th>
                                <th>Train From</th>
                                <th>Train to</th>
                                <th>Train Name</th>
                                <th>Seating</th>
                                <th>Adult</th>
                                <th>Faretype</th>
                                <th>ddate</th>
                                <th>dtime</th>
                                <th>rdate</th>
                                <th>rtime </th>
                                <th>Edit</th>
                                <th>Delete</th>
                            </tr>
                        </thead>

                        <?php
                        while ($row = mysqli_fetch_assoc($result)) {
                        ?>
                            <tbody>
                                <tr>
                                    <td><?php echo $row['uname'] ?></td>
                                    <td><?php echo $row['email'] ?></td>
                                    <td><?php echo $row['pno'] ?></td>
                                    <td><?php echo $row['tfrom'] ?></td>
                                    <td><?php echo $row['tto'] ?></td>
                                    <td><?php echo $row['train'] ?></td>
                                    <td><?php echo $row['seating'] ?></td>
                                    <td><?php echo $row['adult'] ?></td>
                                    <td><?php echo $row['faretype'] ?></td>
                                    <td><?php echo $row['ddate'] ?></td>
                                    <td><?php echo $row['dtime'] ?></td>
                                    <td><?php echo $row['rdate'] ?></td>
                                    <td><?php echo $row['rtime'] ?></td>



                                    <td><a href="edit_train.php?pno=<?php echo $row['pno']; ?>">Edit</a></td>
                                    <td><a href="delete_train.php?pno=<?php echo $row['pno']; ?>">Delete</a></td>
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
    </div>
    <!--Main layout ends here-->
</body>

</html>