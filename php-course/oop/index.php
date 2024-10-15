<?php 

include "autoloader.php";

use Database\Connection;

$connect = new Connection("localhost","root","","project");

$connect->insert($connect , "users" , ['Yousuf' , 123 , "aASas","asASas"]);




