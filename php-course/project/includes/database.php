<?php 

/*
- mysqli => mysql improved 
- PDO    => PHP data object 
*/

// Using Mysqli
$hostname ="localhost";
$username = "root";
$password = "";
$dbname   = "project";

try{

    $connection = mysqli_connect($hostname,$username,$password,$dbname);
    
    if($connection){

        // echo "Connected to database";
    }
} catch(Exception $e){

    echo $e->getMessage();
}


// Using PDO


// try{

//     $pdo = new PDO("mysql:host=$hostname;dbname=$dbname", $username, $password);

//     echo "Connected to database";

// } catch(PDOException $e){

//     echo $e->getMessage();
// }


