<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Database configuration
    $host = "localhost";
    $username = "root";
    $password = "";
    $database = "registration"; // Replace with your actual database name

    try {
        $pdo = new PDO("mysql:host=$host;dbname=$database", $username, $password);
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    } catch (PDOException $e) {
        die("Connection failed: " . $e->getMessage());
    }

    $username = $_POST['username'];
    $gender = $_POST['gender'];
    $email = $_POST['email'];
    $mobile = $_POST['mobile'];
    $address = $_POST['address'];
    $password = $_POST['password'];
    $confirm_password = $_POST['confirm_password'];

    // Validate password confirmation
    if ($password !== $confirm_password) {
        echo "Password and Confirm Password do not match.";
    } else {
        // Use prepared statements to insert data securely
        $sql = "INSERT INTO `project`(`username`, `gender`, `email`, `mobile`, `address`, `password`) VALUES (?, ?, ?, ?, ?, ?)";
        $stmt = $pdo->prepare($sql);

        if ($stmt->execute([$username, $gender, $email, $mobile, $address, $password])) {
            echo "Registration successful.";
        } else {
            echo "Registration failed: " . implode(' - ', $stmt->errorInfo());
        }
    }
}
?>
<!DOCTYPE html>
<head>
    <title>Registration Form</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: skyblue;
            margin: 0;
            padding: 0;
        }
        
        .container {
            width: 400px;
            margin: 100px auto;
            padding: 20px;
            background-color: lightsteelblue;
            border-radius: 5px;
            box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.2);
        }
        
        h2 {
            text-align: center;
            margin-bottom: 20px;
        }
        
        label {
            font-weight: bold;
            display: block;
            margin-bottom: 5px;
        }
        
        input[type="text"],
        input[type="email"],
        input[type="password"],
        input[type="tel"],
        textarea {
            width: 100%;
            padding: 10px;
            margin-bottom: 15px;
            border: 1px solid #ccc;
            border-radius: 3px;
        }
        
        textarea {
            resize: vertical;
            height: 100px;
        }
        
        input[type="submit"] {
            background-color: #3498db;
            color: blue;
            border: none;
            border-radius: 3px;
            padding: 10px 20px;
            cursor: pointer;
            font-size: 16px;
            font-weight: bold;
        }
        
        input[type="submit"]:hover {
            background-color: whitesmoke;
        }
    </style>
</head>
<body>

<div class="container">
    <h2>Register</h2>
    <form action="registration.php" method="post">
        <label for="username">Username:</label>
        <input type="text" id="username" name="username" required>

        <label for="gender">gender:</label>
        <input type="text" id="gender" name="gender" required>
        
        <label for="email">Email:</label>
        <input type="email" id="email" name="email" required>
        
        <label for="mobile">Mobile Number:</label>
        <input type="tel" id="mobile" name="mobile" required>
        
        <label for="address">Address:</label>
        <textarea id="address" name="address" required></textarea>
        
        <label for="password">Password:</label>
        <input type="password" id="password" name="password" required>
        <label for="confirm_password">Confirm Password:</label>
        <input type="password" id="confirm_password" name="confirm_password" required>
        
        <button type="submit">Register</button>
    </form>
</div>

</body>
</html>
