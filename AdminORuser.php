<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
    <style>
.navbar2 h1{
  font-size: 60px;
  color: black;
  font-weight: 800;
  text-align: center;
  text-shadow: 1px 1px white;
}
.navbar2 header{
  font-size: 40px;
  color: blue;
  font-weight: 600;
  text-align: center;
  text-shadow: 1px 1px white;
}
.set{
    padding-top: 200px;
}
.twooption{
    text-align: center;
    margin-right: 80px;
}
.twooption a{
    text-decoration: solid;
    color: black;
    text-shadow: 2px 2px whitesmoke;
    font-size: 50px;
    margin-left: 100px;
    border: 2px solid blue;
    padding: 14px 50px;
    padding-left: 50px;
    padding-right: 50px;
    padding-top: 50px;
    padding-bottom: 50px;
    border-radius: 20px;
    background-color: skyblue;
}
.twooption a:hover{
    color: aqua;
}
.myVideo{
    position: absolute;
    right: 0;
    bottom: 0;
    z-index: -1;
    filter: blur(5px);
    filter: brightness(100%);
}
@media (min-aspect-ratio:16/9){
    .myVideo{
        width: 100%;
        height: auto;
    }
}
@media (max-aspect-ratio:16/9){
    .myVideo{
        width: auto;
        height: 100%;
    }
}
</style>
</head>
<body>
<div class="navbar">
<video autoplay muted loop class="myVideo">
     <source src="train.mp4" type="video/mp4">
</video>
<div class="box">
<div class="navbar2">
    <h1> Journey 360 </h1>
    <header>Your Travel Planer</header>
</div>
</div>
<div class="set">
<div class="twooption">
<a href="login.php"><b> User Login</b></a>
<a href="admin_login.php"><b>Admin Login</b></a>
</div>
</body>
</html>