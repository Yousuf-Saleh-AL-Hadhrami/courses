<?php 

session_start();

require_once "authorized.php";
require_once "./includes/navbar.php";


$path =  __DIR__ ."/uploads//";

define("IMAGE", "http://localhost/training/php-course/form/uploads/");

$images = scandir($path);

?>
<?php

if(isset($_SESSION['success'])){

    echo "<p style='width:80%; margin:20px auto; padding:4px; background-color:green; color:white;'>". $_SESSION['success'] ."</p>";

    unset($_SESSION['success']);
}

?>
<style>
    table th ,td {
        border:1px solid #ccc;
        padding: 5px;
    }
</style>
<a href="dashboard.php">Upload Image</a>
<table style="width:80%; margin:20px auto; text-align:center; border-collapse: collapse;">
    <tr>
        <th>ID</th>
        <th>Name</th>
        <th>image</th>
        <th>Action</th>

    </tr>
    <?php
    $i =1;

     foreach($images as $image){
        
        if($image != "." && $image != "..") {

        $name = explode(".", $image);

        echo "<tr>";
        echo "<td> $i </td>";
        echo "<td> $name[0] </td>";
        echo "<td> <img src=". IMAGE . $image ." height=60  > </td>";
        echo "<td>";
          echo "<a href='deleteImage.php?name=$image'>Delete</a>";
        echo "</td>";

        echo "</tr>";

        $i++;

     }

    }
    ?>
</table>