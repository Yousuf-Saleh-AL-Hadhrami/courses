<?php 

function trans($word , $lang = "en") {


    $languages = ["en","ar"];



    $dictionray = [

            "Hi" => 'مرحبا',
            'Welcome' => 'أهلا',
    ];


    if(in_array($lang, $languages)){

    if($lang === "en") {

        return $word;

    }
    
    foreach($dictionray as $key => $value) {

        if($word === $key) {

            return $value;
        }

        return $word;
    }

} else {

    return "Invalid Lnaguage Allowed " . json_encode($languages);
}
}



// echo trans('Hi I Like Php', "ar");

// $name = "I Like PHP";

// $exploded_name = explode(" ", $name);

// // var_dump($exploded_name);

// // echo $exploded_name[2];

// $name_after_imploded = $exploded_name[2] . " ". $exploded_name[1] . " ". $exploded_name[0];

// echo $name_after_imploded;

// $name = "Yousuf";

// var_dump(explode("s",$name));