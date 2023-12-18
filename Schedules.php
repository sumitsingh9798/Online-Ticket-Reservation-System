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
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" />
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
    <section id="Schedules">
    <h2>Introduction</h2>
    <article>
        <p>
            HTML is an acronym for HyperText Markup Language, and it is the
            standard language for creating web-pages. Every web page you surf on
            your browser is built using HTML. The primary use of HTML to provide
            a proper structure to the web-page so all the content or data of the
            page could represent adequately. A stand-alone HTML can create only
            static and skeleton looking black and white pages, but with the help
            of CSS and JavaScript , we can create a more interactive and
            intuitive web-page. When we try to visit a website or click on the
            link, we basically request the server to show us the page, then the
            server acts on our request and sends us an appropriate HTML document
            as a response. Then this HTML document parsed by browse, and we able
            to see the content.
        </p>
        <h3>HTML Document</h3>
    </article>
</section>
    </div>
    <!--Main layout ends here-->

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js"></script>
</body>

</html>
