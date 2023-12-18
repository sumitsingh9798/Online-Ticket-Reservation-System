<?php
session_start();
if (!isset($_SESSION["adminid"])) {
    header('Location: admin_login.php');
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin</title>
    <link href="admin.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css">
    
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
        <h4>Administartors Dashboard</h4>
    </div>
    <!--Main layout ends here-->

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js"></script>
</body>

</html>