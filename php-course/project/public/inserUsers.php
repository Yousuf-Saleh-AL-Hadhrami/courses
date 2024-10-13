<?php 

include "./../includes/database.php";

// http://localhost/training/php-course/project/public/inserUsers.php?users=true

if(isset($_GET['users']) && $_GET['users'] === 'true') {

    for($i = 1 ; $i <= 100; $i++){

        try {

        $query = " INSERT INTO users VALUES 
        (NOT NULL , 'admin''".$i."' , '". password_hash('admin' , PASSWORD_DEFAULT) ."', 'Yousuf', 'admin') ";
        mysqli_query($connection , $query);


        } catch(Exception $e){

            echo $e->getMessage();
        }
    }

    if(mysqli_affected_rows($connection) > 0) {

        echo "You Have Inserted " . $i - 1 . " Users in Database ";
    }



} elseif($_GET['users'] && $_GET['users'] === 'truncate') {

    $query = mysqli_query($connection , "truncate users");

        echo "Deleted all users";



} else {


    echo "you have to make it true to insert data";
}