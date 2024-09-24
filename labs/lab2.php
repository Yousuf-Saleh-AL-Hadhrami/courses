<?php

/*

- Enter Start And End Number
- get Sum of all numbers 
- get sum of odd numbers 
- get sum of even numbers 
- get Highest number 
- get Lowest Number

*/

function myFunction($start , $end) {

    $sum = 0;
    $highest = $end;
    $lowest = $start;
    $counter = 0;
    $avg = null;


    for($i = $start ; $i <= $end ; $i++) {
       
        $sum = $sum + $i;

        $counter ++;

    }

    $avg = $sum / $counter;
    


    return " Sum = " . $sum . " <br>
             Highest Numbers = ". $highest . " <br> 
             Lowest Numbers = " . $lowest . "  <br>
             Count of Numbers is " . $counter . " <br>
             Average is " . $avg  . " <br>";
}


echo myFunction( 25 , 86);

echo myFunction( 30 , 75 );


