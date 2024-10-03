<?php 

session_start();

unset($_SESSION['USERNAME']); // unset ONE SESSION KEY

session_unset();

session_destroy();

header("location: login.php");
exit;