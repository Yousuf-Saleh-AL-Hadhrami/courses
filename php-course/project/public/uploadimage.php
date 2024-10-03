<?php session_start(); ?>

<?php include "./../includes/header.php"; ?>
<?php include "./../includes/navbar.php"; ?>
<?php include "authorized.php"; ?>


<div class="container mt-3">

<form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post" enctype="multipart/form-data">
<label for="image">Image</label>
<input type="file" name="image">
<input type="submit" value="Upload">
</form>

<?php 

$path =  __DIR__."./uploads//";


if($_SERVER['REQUEST_METHOD'] == 'POST') {

    $name = rand(1 , 10000) . $_FILES['image']['name'];
    $name = time() . $_FILES['image']['name'];
    $tmp_name = $_FILES['image']['tmp_name'];
    $error = $_FILES['image']['error'];


    if(move_uploaded_file($tmp_name , $path . $name)) {

        $_SESSION['success'] = 'Image Uploaded Successfully!';
        
        header("location:images.php");
        exit;
    }
}

?>


</div>

<?php include "./../includes/footer.php"; ?>

