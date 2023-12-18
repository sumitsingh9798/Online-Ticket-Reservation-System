<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="website icon" type="png" href="/Img/logo.png">
    <link rel="stylesheet" href="login.css">
    <title>Admin Login</title>
</head>

<body>
    <div id="particles-js">
        <div class="box">
            <div class="logo">
                <img src="logo.png" alt="TICKET RESERVATION SYSTEM">
            </div>
            <h1>TICKET RESERVATION SYSTEM</h1>
            <h2>Login As Admin</h2>
            <form method="post">   
                <label for="username">Username</label>
                <input type="text" name="name" id="username" required>
                <label for="password">Password</label>
                <input type="password" name="password" id="password" required>
                <h5>We'll never share your password anyone else.</h5>
                <input type="submit" name="Singin" value="Login"> 
            </form>
        </div>
    </div>
    <?php
    if(isset($_POST['Singin']))
    {
        $name = $_POST['name'];
        $password = $_POST['password'];

        $conn=mysqli_connect("localhost","root","","sky") or die ("connection error");
        $sql="SELECT * FROM `admin` WHERE `name`='$_POST[name]' AND `password`='$_POST[password]'";
        $result=mysqli_query($conn,$sql);
       if(mysqli_num_rows($result)>0)
       {
             while( $row = mysqli_fetch_assoc($result)){
                session_start(); 
                $_SESSION["adminid"]=$_POST['name'];
                header("location:Admin.php");
              }
            }
       else
       {
           echo"<script>alert('Incorrect Password');</script>";
       }
    }
       
    ?>

    

    <script src="./js/particles.js"></script>
    <script src="./js/app.js"></script>
</body>

</html>