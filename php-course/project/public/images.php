<?php session_start(); ?>

<?php include "./../includes/header.php"; ?>
<?php include "./../includes/navbar.php"; ?>
<?php include "authorized.php"; ?>

<?php 

$path =  __DIR__."/uploads//";


define("IMAGE","http://localhost/training/php-course/project/public/uploads/");



$images = scandir($path);

?>

<div class="container mt-3">


<?php

if(isset($_SESSION['success'])){

    echo "<p class='alert alert-success'>". $_SESSION['success'] ."</p>";

    unset($_SESSION['success']);
}

?>




<a href="uploadimage.php" class="btn btn-primary btn-sm">New Image</a>

<table class="table table-bordered text-center mt-2">
    <tr>
        <th>ID</th>
        <th>Name</th>
        <th>image</th>
        <th>Action</th>

    </tr>
    <?php
    $i = 1;

     foreach($images as $image){
        
        if($image != "." && $image != "..") {

        $name = explode(".", $image);

        echo "<tr>";
        echo "<td> $i </td>";
        echo "<td> $name[0] </td>";
        echo "<td> <img src=". IMAGE . $image ." height=60  > </td>";
        echo "<td>";
          echo "<a href='deleteImage.php?name=$image' class='btn btn-sm btn-primary'>Delete</a>";
        echo "</td>";

        echo "</tr>";

        $i++;

     }

    }
    ?>
</table>
</div>

<?php include "./../includes/footer.php"; ?>

