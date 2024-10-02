<?php 

session_start();

require_once "authorized.php";
require_once "./includes/navbar.php";

echo "<h1> Welcome <span style='color:red;'> " . $_SESSION['NAME'] . " </span> You are Logged In </h1>";


?>

<h1>Upload Image</h1>

<form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post" enctype="multipart/form-data">
<label for="image">Image</label>
<input type="file" name="image">
<input type="submit" value="Upload">
</form>

<?php 

$path =  __DIR__ ."/uploads//";


if($_SERVER['REQUEST_METHOD'] == 'POST') {

    $name = rand(1 , 10000) . $_FILES['image']['name'];
    $name = time() . $_FILES['image']['name'];
    $tmp_name = $_FILES['image']['tmp_name'];
    $error = $_FILES['image']['error'];


    if(move_uploaded_file($tmp_name , $path . $name)) {

        $_SESSION['success'] = 'Image Uploaded Successfully!';
        header("location:viewimages.php");
        exit;
    }
}