<?php
session_start();
$_SESSION["newsession"] = $_POST["username"];

?>
<style>
    h1 {
        display: none;
    }
</style>
<form action="logout.php" action="POST">
    <button type="submit">
        Close    
    </button>
</form>
<h1>
   <?= $_SESSION["newsession"]; ?>
</h1>

<script src="jquery.js"></script>
<script src="session.js"></script>