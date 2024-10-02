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



if(isset($_GET['id'])) {

    echo $_GET['id'];

}


echo "<pre>";

// var_dump($_SERVER);



setcookie("Yousuf", "programmer" , time() + 3 * 24 * 60 * 60);

echo $_COOKIE['Yousuf'];

