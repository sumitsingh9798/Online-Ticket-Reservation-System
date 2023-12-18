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
    <form action="update_train.php" method="post">
        <?php
        $pno = $_GET['pno'];
        $conn = mysqli_connect("localhost", "root", "", "ticketbooking") or die("Connection Faild");
        $sql = "SELECT uname,email, pno, tfrom, tto, train,seating,adult,faretype,ddate,dtime,rdate,rtime FROM trainbooking WHERE pno='$pno'";
        $result = mysqli_query($conn, $sql) or die("Query Error..!!!!!!");
        if (mysqli_num_rows($result) > 0) {
            while ($row = mysqli_fetch_assoc($result)) {

        ?>
                <label for="">uname :</label>
                <input type="text" name="uname" value="<?php echo $row['uname']; ?>" required>
                <label for="">Email :</label>
                <input type="email" name="email" value="<?php echo $row['email']; ?>" required>
                <input type='hidden' value='<?php echo $pno; ?>' name='pno'> 
                <label for="">tfrom :</label>
                <input type="text" name="tfrom" value="<?php echo $row['tfrom']; ?>" required>
                
                <label for="">tto :</label>
                <input type="text" name="tto" value="<?php echo $row['tto']; ?>" required>
                <label for="">train :</label>
                <input type="text" name="train" value="<?php echo $row['train']; ?>" required>
                <label for="">seating :</label>
                <input type="text" name="seating" value="<?php echo $row['seating']; ?>" required>
                <label for="">adult :</label>
                <input type="num" name="adult" value="<?php echo $row['adult']; ?>" required>
                <label for="">faretype :</label>
                <input type="text" name="faretype" value="<?php echo $row['faretype']; ?>" required>
                <label for="">ddate :</label>
                <input type="date" name="ddate" value="<?php echo $row['ddate']; ?>" required>
                <label for="">dtime :</label>
                <input type="time" name="dtime" value="<?php echo $row['dtime']; ?>" required>
                <label for="">rdate :</label>
                <input type="date" name="rdate" value="<?php echo $row['rdate']; ?>" required>
                <label for="">rtime :</label>
                <input type="time" name="rtime" value="<?php echo $row['rtime']; ?>" required>
                <input type="submit" name="save" value="Update">
        <?php
            }
        }
        ?>
    </form>
</body>

</html>