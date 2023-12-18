<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Edit</title>
    <style>
        body {
            height: 100vh;
            width: 100%;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        form {
            width: 400px;
            padding: 100px;
            background: grey;
            border-radius: 10px;
        }

        form select {
            padding: 5px;

        }

        label {
            font-size: 1.2rem;
            color: blue;
        }

        form input {
            width: 100%;
            font-size: 1rem;
            padding: 5px;
            margin: 10px 0;
            background: transparent;
            color: white;
            border-color: white;
        }

        input[type=submit] {
            width: 150px;
            background: royalblue;
            border: none;
            border-radius: 10px;
            cursor: pointer;
        }
    </style>
</head>

<body>
    <form action="update_user.php" method="post">
        <?php
        $username = $_GET['username'];
        $conn = mysqli_connect("localhost", "root", "", "registration") or die("Connection Faild");
        $sql = "SELECT username, gender, email, mobile, address, password FROM project WHERE username='$username'";
        // echo $sql;
        $result = mysqli_query($conn, $sql) or die("Query Error..!!!!!!");
        if (mysqli_num_rows($result) > 0) {
            while ($row = mysqli_fetch_assoc($result)) {

        ?>
                <label for="">Username :</label>
                <input type="text" name="newusername" value="<?php echo $username; ?>" required>
                <input type='hidden' value='<?php echo $username; ?>' name='username'> 
                <label for="">Gender :</label>
                <input type="text" name="gender" value="<?php echo $row['gender']; ?>" required>
                <label for="">Email :</label>
                <input type="email" name="email" value="<?php echo $row['email']; ?>" required>
                <label for="">Mobile :</label>
                <input type="number" name="mobile" value="<?php echo $row['mobile']; ?>" required>
                <label for="">Address :</label>
                <input type="text" name="address" value="<?php echo $row['address']; ?>" required>
                <label for="">Password :</label>
                <input type="password" name="password" value="<?php echo $row['password']; ?>" required>
                <input type="submit" name="save" value="Update">
        <?php
            }
        }
        ?>
    </form>
</body>

</html>