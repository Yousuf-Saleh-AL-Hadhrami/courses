<?php

echo date_default_timezone_set("Asia/Muscat");

$indexed_array = array(4,6,8,"ABC",5,6);

// echo $indexed_array[3];

$associative_array = array(

    "om" => "Oman",
    "sa" => "Saudi Arabia",
    "qa" => "Qatar",
    10  => "Apple",
    20.5 => "salary",
    "ahmed" => "Employee"
);


// echo $associative_array['om'];


$multidiemensional_array = array(

    [2] , [4], [7], array([1,3] , [4,5]),
    [], ["Nasser"], ["Yousuf"],
    [10] , [4], [3,5] , ["ali","salim"]
);


// echo $multidiemensional_array[6][0];



foreach($associative_array as $key => $value) {

    echo $key . " => " . $value  . "<br>";
}


////////////////////////////////////////////////////////////////////////////


$students = [

    ["id" => 100 , "name" => "Yousuf AL Hadhrami" , "address" => "Izki" , "created_at" => date("Y-m-d H:i:s", time() - 6 * 30 * 24 * 60 * 60)] ,
    ["id" => 200 , "name" => "Shahad AL Ghanami"  , "address"  => "Al Rawdhah" , "created_at" => date("Y-m-d H:i:s", time() - 12 * 30 * 24 * 60 * 60)] ,
    ["id" => 300 , "name" => "Maryam AL Manthri"  , "address"  => "Nizwa" , "created_at" => date("Y-m-d H:i:s", time() - 8 * 30 * 24 * 60 * 60)] ,

];


// How to add a record to this array 

$students[4] = ["id" => 400 , "name" => "Maryam AL Manthri"  , "address"  => "Nizwa" , "created_at" => date("Y-m-d H:i:s", time() - 8 * 30 * 24 * 60 * 60)];
$students[5] = ["id" => 500 , "name" => "Maryam AL Manthri"  , "address"  => "Nizwa" , "created_at" => date("Y-m-d H:i:s", time() - 8 * 30 * 24 * 60 * 60)];

// $students[1] = [];



?>
<style>
    table{
        width: 80%;
        margin:auto;
        border:1px solid #ccc;
        text-align:center;
        border-collapse: collapse;
    }

    table th , td {
        border:1px solid #ccc;
        padding: 6px;
    }
</style>
<table>
    <tr>
        <th>ID</th>
        <th>Name</th>
        <th>Address</th>
        <th>Created_at</th>
        <th>Action
        </th>
    </tr>
    <?php
     foreach($students as $student){

        echo "<tr>";
        echo "<td> $student[id] </td>";
        echo "<td> $student[name] </td>";
        echo "<td> $student[address] </td>";
        echo "<td> $student[created_at] </td>";

        echo "<td>
        <a href='edit.php'>Edit</a>
        <a href='delete.php'>Delete</a>
        </td>";
        echo "</tr>";

     }
    ?>
</table>
