<?php 

class Person {

    // Proprties
    public $name;
    protected $eye_color;
    private $password;

    // Constants
    const AGE = 18;

    // Static properties
    public static $count = 0;

    public function __construct($n , $ag , $pass){

        // echo 'I have created object from the class person <br>';

        // Person::$count++;
        self::$count++;

        $this->name = $n;
        $this->eye_color = $ag;
        $this->password =  password_hash($pass , PASSWORD_DEFAULT);

    }

    public static function getCount(){

        return self::$count;
    }

    public function setName($n){

        $this->name  = $n;

        return $this;
    }

    public function setEye($eye){

        $this->eye_color  = $eye;

        return $this;
    }

    public function setPassword($pass){

        $this->password  = password_hash($pass , PASSWORD_DEFAULT);

        return $this;
    }

    public function getPassword(){

        return $this->password;
    }

    public function getName(){

        return $this->name;
    }

     public function getInfo(){


        $data = '';

        $data .="<table style='width:80%'>";
        $data .="<tr>";
        $data .="<td> $this->name </td>";
        $data .="<td> $this->eye_color </td>";
        $data .="<td> $this->password </td>";
        $data .="</tr>";
        $data .="</table>";


        return $data;

    }

}

$person1 = new Person("Yousuf","black", 123);
$person2 = new Person("Marya","black", 123);
$person3 = new Person("Shahad","black", 123);
$person4 = new Person("Salim","black", 123);



// var_dump($person1);

// echo "<br>";

// echo $person1->name;

// echo "<br>";

// echo $person1->name;

// echo $person1->setName("Yousuf")
//         ->setEye('black')
//         ->setPassword(123)
//         ->getInfo();
// echo "<br>";

//         echo $person2->setName("Maryam")
//         ->setEye('black')
//         ->setPassword(123456)
//         ->getInfo();
// echo "<br>";


//         echo $person3->setName("Shahad")
//         ->setEye('black')
//         ->setPassword(123456)
//         ->getInfo();

//         echo "<br>";


//         echo $person3->setName("Salim")
//         ->setEye('black')
//         ->setPassword(123456)
//         ->getInfo();


        // printing constants 

        // echo $person1::AGE;

        //echo Person::$count;

        echo Person::getCount();

        // *************************************************************************


        class Student extends Person
        {
           public $stdid;
           public $sps;
           public $gpa;

           public function __construct($stdid , $sp , $gp,$n, $ag, $pass)
           {
               parent::__construct($n , $ag , $pass);
     
                $this->stdid = $stdid;
                $this->sps   = $sp;
                $this->gpa   = $gp;
           }

           public function setName($n){

                parent::setName($n);
                
                $this->name = $n;
           }

           public function getInfo(){

            $data = '';
            $data .= '<table style="width:180">';
            $data .= parent::getInfo();
            $data .="<td> $this->stdid</td>";
            $data .="<td> $this->sps</td>";
            $data .="<td> $this->gpa</td>";
            $data .="</tr>";
            $data .="</table>";

               return $data;
           }

        }


        $std1 = new Student("Ali","black",20,100,"IT",3.3);

        echo $std1->getInfo();

