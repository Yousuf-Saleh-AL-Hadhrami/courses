<?php 
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>
<body>
    
<h1>Login</h1>

<?php 

if(isset($_SESSION['USERNAME'])){

   header("location:dashboard.php");
   exit;
}

?>

<form action="<?php  echo $_SERVER['PHP_SELF']; ?>" method="post">
    <input type="text" name="username">
    <input type="password" name="password">
    <input type="submit" value="Login">
</form>

<?php 

$users = [ 

    ["username" => "admin" , "password"  => password_hash("admin" , PASSWORD_DEFAULT) , "name" => "Yousuf"],
    ["username" => "user1" , "password"  => password_hash("1234"   , PASSWORD_DEFAULT) , "name" => "Maryam"], 
    ["username" => "user2" , "password"  => password_hash("1234"   , PASSWORD_DEFAULT) , "name" => "Shahad"], 

 ];


if($_SERVER['REQUEST_METHOD'] == 'POST') {

    $username = $_POST['username'];
    $password = $_POST['password'];


    foreach($users as $user){

        if($user['username'] == $username ) {

            if(password_verify($password , $user['password'])){

             $_SESSION['USERNAME'] = $user['username'];
             $_SESSION['NAME']     = $user['name'];

             header("location:dashboard.php");
             exit;

        } 
    }  else {

        $error = "Error is usewrname or password";
    }
    }
    }

    ?>

    <?= isset($error) ? $error : ''; ?>




</body>
</html>