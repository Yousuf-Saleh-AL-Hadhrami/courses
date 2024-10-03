<?php session_start() ?>

<?php include "./../includes/header.php"; ?>
<?php include "./../includes/database.php"; ?>

    
<?php 

if(isset($_SESSION['USERNAME'])){

   header("location:dashboard.php");
   exit;
}

?>

<div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-md-4">
                <h2 class="text-center">Login</h2>
                <form action="<?php  echo $_SERVER['PHP_SELF']; ?>" method="post">
                    <div class="mb-3">
                        <label for="username" class="form-label">Username</label>
                        <input type="text" class="form-control" name="username" id="username" placeholder="Enter username" autocomplete="off" >
                    </div>
                    <div class="mb-3">
                        <label for="password" class="form-label">Password</label>
                        <input type="password" name="password" class="form-control" id="password" placeholder="Enter password" >
                    </div>
                    <button type="submit" class="btn btn-primary w-100">Login</button>
                </form>
                <div class="text-center mt-3">
                    <a href="#">Forgot password?</a>
                </div>
            </div>
        </div>
    </div>

<?php 

// $users = [ 

//     ["username" => "admin" , "password"  => password_hash("admin" , PASSWORD_DEFAULT) , "name" => "Yousuf"],
//     ["username" => "user1" , "password"  => password_hash("1234"   , PASSWORD_DEFAULT) , "name" => "Maryam"], 
//     ["username" => "user2" , "password"  => password_hash("1234"   , PASSWORD_DEFAULT) , "name" => "Shahad"], 

//  ];


if($_SERVER['REQUEST_METHOD'] == 'POST') {

    $username = $_POST['username'];
    $password = $_POST['password'];


    $query = " SELECT * FROM users WHERE username = '$username' LIMIT 1";
    $result = mysqli_query($connection , $query);
    $user = mysqli_fetch_assoc($result);

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
  
    ?>

    <?= isset($error) ? $error : ''; ?>

</body>
</html>