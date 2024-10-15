<?php 

class FullNmae
{

    public $fname;
    public $sname;
    public $tname;
    public $lname;
    public $gender;

    public function fname($fname , $gender = "m") {

        if($gender === "m") {

        $this->fname = $fname . " بن ";

        } else {

        $this->fname = $fname . " بنت ";

        }

        return $this;
    }
    public function sname($sname , $gender = "m") {

        if($gender === "m") {

            $this->fname .= $sname . " بن ";
    
            } else {

                $this->sname .= $sname . " بنت ";
        
        
                }

        return $this;
    }

    public function tname($tname) {


    $this->fname .= $tname ;
    

        return $this;
    }

    public function lname($lname) {

        $this->lname = $lname ;

        return $this;
    }


    public function fullname(){

        return $this->fname . " " . $this->sname . " " . $this->tname . " " . $this->lname . "<br>";
    }



}

$name1 = new FullNmae;

echo $name1->fname("Yousuf")
           ->sname("Saleh")
           ->tname("Issa")
           ->lname("AL Hadhrami")
           ->fullname();
