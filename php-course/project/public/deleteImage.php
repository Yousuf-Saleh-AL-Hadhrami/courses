<?php session_start(); ?>

<?php include "./../includes/header.php"; ?>
<?php include "./../includes/navbar.php"; ?>
<?php include "authorized.php"; ?>

<?php

echo $path =  __DIR__ ."/uploads//".$_GET['name'];

if(file_exists($path)){

    unlink($path);
    $_SESSION['success'] = 'Image Deleted Successfully!';
    header("location:images.php");
    exit;
}

?>

<?php include "./../includes/footer.php"; ?>

