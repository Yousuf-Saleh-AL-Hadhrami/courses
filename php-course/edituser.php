<?php

date_default_timezone_set("Asia/Muscat");

echo date_default_timezone_get();
echo "<br>";
echo time();
echo "<br>";
echo date("Y-m-d H:i:s / (l)", time() + 365 * 24 * 60 * 60);
echo "<br>";

echo round(time() / 365 / 24 / 60 / 60);
echo "<br>";
echo date("Y-m-d H:i:s / (l)", strtotime("05-07-1975"));



// if(isset($_GET['id'])) {

//     echo $_GET['id'];

// }


echo "<pre>";

// var_dump($_SERVER);

$users = [ 

    ["username" => "admin" , "password" => password_hash("admin" , PASSWORD_DEFAULT) , "name" => "Yousuf"],
    ["username" => "user" , "password"  => password_hash("123"   , PASSWORD_DEFAULT) , "name" => "Maryam"], 

 ];


if($_SERVER['REQUEST_METHOD'] == 'POST') {

    $username = $_POST['username'];
    $password = $_POST['password'];


    foreach($users as $user){

        if($user['username'] == $username ) {

            if(password_verify($password , $user['password'])){

            echo "Login Success Welcome " . $user['name']; 
            exit;

        } } else {

            echo "Failed to Login";
        }
    }



}

setcookie("Yousuf", 123456789 , time() + 1 * 24 * 60 * 60);

