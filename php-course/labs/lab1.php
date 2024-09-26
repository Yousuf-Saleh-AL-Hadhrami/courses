<?php 

// Write a program to print you name 10 times using all loops

$name = "Yousuf";

for($i = 1; $i <= 10; $i++){

    echo $i . '=>' . $name . "<br>";
}


echo "============================================================= <br>";

$i = 1;

while($i <= 10){

    echo $i . '=>' . $name . "<br>";

    $i++;

}

echo "============================================================= <br>";

$i = 1;

do {

    echo $i . '=>' . $name . "<br>";

    $i++;
    
} while($i <= 10);

echo "============================================================= <br>";

$numbers = [ 1 => 1, 2 , 3, 4, 5 , 6 , 7 , 8 , 9 , 10];

foreach($numbers as $key => $value){

    echo $key . '=>' . $name . "<br>";
}