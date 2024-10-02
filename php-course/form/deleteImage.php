<?php

session_start();

require_once "authorized.php";

echo $path =  __DIR__ ."/uploads//".$_GET['name'];

if(file_exists($path)){

    unlink($path);
    $_SESSION['success'] = 'Image Deleted Successfully!';
    header("location:viewimages.php");
    exit;
}
