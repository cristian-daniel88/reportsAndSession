<?php 
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<style>
    h1 {
        display: none;
    }
</style>
<body>
    <h1><?=$_SESSION["newsession"] = "";?></h1>
    <form action="session.php" method="POST">
        <input type="text" name="username">
        <div id="bottonFather">
        </div>    
        </form>
        <button type="submit" id="submit1">enter</button>


    <script src="jquery.js"></script>
    <script src="index.js"></script>
</body>
</html>