<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Edit</title>
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
    <form action="update_bus.php" method="post">
        <?php
        $id = $_GET['id'];
        $conn = mysqli_connect("localhost", "root", "", "bus_ticket_booking") or die("Connection Faild");
        $sql = "SELECT*FROM bus WHERE id='$id'";

        $result = mysqli_query($conn, $sql) or die("Query Error..!!!!!!");
        if (mysqli_num_rows($result) > 0) {
            while ($row = mysqli_fetch_assoc($result)) {

        ?>
                <label for="">departure :</label>
                <input type="text" name="departure" value="<?php echo $row['departure']; ?>" required>
                <label for="">destination :</label>
                <input type="type" name="destination" value="<?php echo $row['destination']; ?>" required>
                <input type='hidden' value='<?php echo $id; ?>' name='id'> 
                <label for="">preffered bus :</label>
                <input type="text" name="preffered bus" value="<?php echo $row['preffered bus']; ?>" required>              
                <label for="">preffered seat :</label>
                <input type="text" name="preffered seat" value="<?php echo $row['preffered seat']; ?>" required>
                <label for="">departure date :</label>
                <input type="date" name="departure date" value="<?php echo $row['departure date']; ?>" required>
                <label for="">adult :</label>
                <input type="text" name="adult" value="<?php echo $row['adult']; ?>" required>
                <label for="">children :</label>
                <input type="num" name="children" value="<?php echo $row['children']; ?>" required>
                <label for="">infant :</label>
                <input type="text" name="infant" value="<?php echo $row['infant']; ?>" required>
                <label for="">fare :</label>
                <input type="num" name="fare" value="<?php echo $row['fare']; ?>" required>
                <label for="">return date :</label>
                <input type="date" name="return date" value="<?php echo $row['return date']; ?>" required>
                <label for="">full name :</label>
                <input type="text" name="full name" value="<?php echo $row['full name']; ?>" required>
                <label for="">phone :</label>
                <input type="num" name="phone" value="<?php echo $row['phone']; ?>" required>
                <label for="">email :</label>
                <input type="email" name="email" value="<?php echo $row['email']; ?>" required>
                <label for="">payment_code :</label>
                <input type="num" name="payment_code" value="<?php echo $row['payment_code']; ?>" required>
                <label for="">select_payment_method :</label>
                <input type="text" name="select_payment_method" value="<?php echo $row['select_payment_method']; ?>" required>
                <input type="submit" name="save" value="Update">
        <?php
            
        }
    }
        ?>
    </form>
</body>

</html>