<?php

if(!isset($_SESSION['USERNAME'])){

    header("location: login.php");
    exit;
}