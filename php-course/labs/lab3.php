<?php 

// Make a function to accept an array ang get the sum , average , highest number , minimum number.


function myfunction(array $array , $status = false): mixed {

    $sum = 0;
    $avg = 0;
    $max = $array[0];
    $min = $array[0];

    if($status) {

    for($i = 0; $i < count($array); $i++ ) {
       
        $sum += $array[$i];

        $avg = $sum / count($array);

        if($array[$i] > $max) {
          
            $max = $array[$i];

        }

        if($array[$i] < $min) {
          
            $min = $array[$i];

        }

    }

   return $sum . "<br>" .
          $avg . "<br>" . 
          $max . "<br>" .
          $min . "<br>";

} else {

    return 'Must be true';
}
}


echo myfunction([9,2,13,19,8, 9] , true);